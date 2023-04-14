<?php
/*
   ╔═══╗ ╔════╗ ╔════╗ ╔╗ ╔╗ ╔════╗ ╔═══╗  ╔════╗  ╔═════╗╔═════╗
   ║╔══╝ ║╔═╗ ║ ║╔═══╝ ║║ ║║ ║╔╗╔╗║ ║╔══╝  ║╔═╗ ║  ║ ╔═╗ ║║ ╔═╗ ║
   ║╚══╗ ║╚═╝ ║ ║╚═══╗ ║╚═╝║ ╚╝║║╚╝ ║╚══╗  ║╚═╝ ║  ║ ║ ║ ║║ ║ ║ ║
   ║╔══╝ ║ ╔╗ ║ ╚═══╗║ ╚═║║╝   ║║   ║╔══╝  ║ ╔╗ ║  ║ ║ ║ ╚╝ ║ ║ ║
   ║╚══╗ ║ ║║ ║ ╔═══╝║   ║║    ║║   ║╚══╗  ║ ║║ ║  ║ ║ ╚════╝ ║ ║
   ╚═══╝ ╚═╝╚═╝ ╚════╝   ╚╝    ╚╝   ╚═══╝  ╚═╝╚═╝  ╚═╝        ╚═╝
    discord.gg/easyteam*/
namespace GhostSushi\CustomiesExemple\Entities;

use pocketmine\entity\Entity;
use pocketmine\entity\EntitySizeInfo;
use pocketmine\event\entity\EntityDamageByEntityEvent;
use pocketmine\event\entity\EntityDamageEvent;
use pocketmine\nbt\tag\CompoundTag;
use pocketmine\player\Player;

class EntityExample extends Entity
{

    public static function getNetworkTypeId(): string {
        return "servername:entity_exemple";
    }
              ## ----------------------------- [ SCALE ] -----------------------------
    // FR : La taille de l'entitée si vous mettez 0, 0 sa sera la taille de Blockbench .
    // US : The size of the entity, if you set it to 0, 0 it will be the size of Blockbench.
    public function getInitialSizeInfo(): EntitySizeInfo
    {
        return new EntitySizeInfo(0, 0);
    }



    ##                   Les suplement vous pouvez les suprimmées  / The extras can be removed by you.



                         ## ----------------------------- [ ATTACK ] -----------------------------
 // FR : Voici un exemple si vous voulez faire en sorte que quand on utilise la stone sa enleve votre entities !
 // US : Here is an example if you want to make it so that when using the stone, it removes your entities!
    public function attack(EntityDamageEvent $source) : void {
        if($source instanceof EntityDamageByEntityEvent){
            $player = $source->getDamager();
            if($player instanceof Player){
                if($player->getInventory()->getItemInHand()->getId() === 1){
                    $this->kill();
                    $this->flagForDespawn();
                    $this->close();
                    return;
                }
            }
        }
        $source->cancel();
    }
                       ## ----------------------------- [ INFOS ] -----------------------------
    // FR : Voici un exemple qui permet de rentre imobile ou non l'entities , de lui mettre un name tag ect....
    // US : Here is an example that allows you to make the entity immobile or not, give it a name tag, etc...
    protected function initEntity(CompoundTag $nbt) : void {
        parent::initEntity($nbt);
        $this->setNameTagAlwaysVisible(false);
        $this->gravityEnabled = false;
        $this->setNameTag("Exemple NameTag");
        $this->setImmobile();
    }

}
<?php
/*
   ╔═══╗ ╔════╗ ╔════╗ ╔╗ ╔╗ ╔════╗ ╔═══╗  ╔════╗  ╔═════╗╔═════╗
   ║╔══╝ ║╔═╗ ║ ║╔═══╝ ║║ ║║ ║╔╗╔╗║ ║╔══╝  ║╔═╗ ║  ║ ╔═╗ ║║ ╔═╗ ║
   ║╚══╗ ║╚═╝ ║ ║╚═══╗ ║╚═╝║ ╚╝║║╚╝ ║╚══╗  ║╚═╝ ║  ║ ║ ║ ║║ ║ ║ ║
   ║╔══╝ ║ ╔╗ ║ ╚═══╗║ ╚═║║╝   ║║   ║╔══╝  ║ ╔╗ ║  ║ ║ ║ ╚╝ ║ ║ ║
   ║╚══╗ ║ ║║ ║ ╔═══╝║   ║║    ║║   ║╚══╗  ║ ║║ ║  ║ ║ ╚════╝ ║ ║
   ╚═══╝ ╚═╝╚═╝ ╚════╝   ╚╝    ╚╝   ╚═══╝  ╚═╝╚═╝  ╚═╝        ╚═╝
    discord.gg/easyteam*/
namespace GhostSushi\CustomiesExemple\Item;

use customiesdevs\customies\item\component\ArmorComponent;
use customiesdevs\customies\item\component\DurabilityComponent;
use customiesdevs\customies\item\component\MaxStackSizeComponent;
use customiesdevs\customies\item\component\WearableComponent;
use customiesdevs\customies\item\CreativeInventoryInfo;
use customiesdevs\customies\item\ItemComponents;
use customiesdevs\customies\item\ItemComponentsTrait;
use pocketmine\inventory\ArmorInventory;
use pocketmine\item\Armor;
use pocketmine\item\ArmorTypeInfo;
use pocketmine\item\ItemIdentifier;

class ExempleArmor extends Armor implements ItemComponents{
    use ItemComponentsTrait;

    ## ----------------------------- [  ALL ] -----------------------------
    // FR : Voila comment faire , je vais vous expliquer , SLOT FEET c'est pour le pied car moi je vous fait les botte la mais si je veux faire pour un plastron exemple c'est : chest / leg / head
    // US : Here's how to do it, let me explain. SLOT FEET is for the feet because I'm making boots for you here, but if I want to make a chestplate for example, it's: chest/leg/head.
    public function __construct(ItemIdentifier $identifier, string $name)
    {
        parent::__construct($identifier, $name, new ArmorTypeInfo(6, 2000, ArmorInventory::SLOT_FEET));
        $creativeinfo = new CreativeInventoryInfo(CreativeInventoryInfo::CATEGORY_EQUIPMENT, CreativeInventoryInfo::GROUP_BOOTS);
        $this->initComponent("exemple_boots", $creativeinfo);
        $this->addComponent(new WearableComponent(WearableComponent::SLOT_ARMOR_FEET));
        $this->addComponent(new MaxStackSizeComponent(1));
        ## FR : SI SA METS EN ROUGE CE N'EST PAS GRAVE !
        ## US : If it turns red, it's not a big deal!
        $this->addComponent(new ArmorComponent(protection: 6, textureType: "diamond"));
        $this->addComponent(new DurabilityComponent(2000));
    }
    public function getMaxDurability(): int
    {
        return 2000;
    }
    public function getDefensePoints(): int
    {
        return 6;
    }
    public function getMaxStackSize(): int
    {
        return 1;
    }
}
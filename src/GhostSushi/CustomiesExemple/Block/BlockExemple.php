<?php
/*
   ╔═══╗ ╔════╗ ╔════╗ ╔╗ ╔╗ ╔════╗ ╔═══╗  ╔════╗  ╔═════╗╔═════╗
   ║╔══╝ ║╔═╗ ║ ║╔═══╝ ║║ ║║ ║╔╗╔╗║ ║╔══╝  ║╔═╗ ║  ║ ╔═╗ ║║ ╔═╗ ║
   ║╚══╗ ║╚═╝ ║ ║╚═══╗ ║╚═╝║ ╚╝║║╚╝ ║╚══╗  ║╚═╝ ║  ║ ║ ║ ║║ ║ ║ ║
   ║╔══╝ ║ ╔╗ ║ ╚═══╗║ ╚═║║╝   ║║   ║╔══╝  ║ ╔╗ ║  ║ ║ ║ ╚╝ ║ ║ ║
   ║╚══╗ ║ ║║ ║ ╔═══╝║   ║║    ║║   ║╚══╗  ║ ║║ ║  ║ ║ ╚════╝ ║ ║
   ╚═══╝ ╚═╝╚═╝ ╚════╝   ╚╝    ╚╝   ╚═══╝  ╚═╝╚═╝  ╚═╝        ╚═╝
    discord.gg/easyteam*/
namespace GhostSushi\CustomiesExemple\Block;

use customiesdevs\customies\block\CustomiesBlockFactory;
use customiesdevs\customies\block\Material;
use customiesdevs\customies\block\Model;
use customiesdevs\customies\item\CreativeInventoryInfo;
use pocketmine\block\Block;
use pocketmine\block\BlockBreakInfo;
use pocketmine\block\BlockIdentifier;
use pocketmine\math\Vector3;

class BlockExemple
{

    ## ----------------------------- [ CONSTRUC / REGISTER ] -----------------------------
    // FR : le code qui se trouve si dessous permet  de ajouter et register le block penser a bien tout remplir
    // US : The code below allows you to add and register the block, make sure to fill everything
    public function __construct()
    {
        $material = new Material(Material::TARGET_ALL, "example", Material::RENDER_METHOD_ALPHA_TEST);
        $model = new Model([$material], "geometry.exemple", new Vector3(-8, 0, -8), new Vector3(16, 16, 16));
        $creativeInfo = new CreativeInventoryInfo(CreativeInventoryInfo::CATEGORY_NATURE, CreativeInventoryInfo::GROUP_WOOD);
        CustomiesBlockFactory::getInstance()->registerBlock(fn(int $id) => new Block(new BlockIdentifier($id, 0), "Block Test", new BlockBreakInfo(1)), "servername:block_exemple", $model, $creativeInfo);

        ##FR : Pour en rajouter il suffis juste de recopier se qu'il y a au dessus et de modifier comme en bas
        ##US :  To add more, you just need to copy what's above and modify it like below.

        /*
        $material2 = new Material(Material::TARGET_ALL, "example2", Material::RENDER_METHOD_ALPHA_TEST);
        $model2 = new Model([$material2], "geometry.exemple2", new Vector3(-8, 0, -8), new Vector3(16, 16, 16));
        $creativeInfo2 = new CreativeInventoryInfo(CreativeInventoryInfo::CATEGORY_NATURE, CreativeInventoryInfo::GROUP_WOOD);
        CustomiesBlockFactory::getInstance()->registerBlock(fn(int $id) => new Block(new BlockIdentifier($id, 0), "Block Test2", new BlockBreakInfo(1)), "servername:block_exemple2", $model2, $creativeInfo2);
        */
    }
}
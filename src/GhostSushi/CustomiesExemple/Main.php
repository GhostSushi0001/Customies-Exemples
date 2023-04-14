<?php
/*
   ╔═══╗ ╔════╗ ╔════╗ ╔╗ ╔╗ ╔════╗ ╔═══╗  ╔════╗  ╔═════╗╔═════╗
   ║╔══╝ ║╔═╗ ║ ║╔═══╝ ║║ ║║ ║╔╗╔╗║ ║╔══╝  ║╔═╗ ║  ║ ╔═╗ ║║ ╔═╗ ║
   ║╚══╗ ║╚═╝ ║ ║╚═══╗ ║╚═╝║ ╚╝║║╚╝ ║╚══╗  ║╚═╝ ║  ║ ║ ║ ║║ ║ ║ ║
   ║╔══╝ ║ ╔╗ ║ ╚═══╗║ ╚═║║╝   ║║   ║╔══╝  ║ ╔╗ ║  ║ ║ ║ ╚╝ ║ ║ ║
   ║╚══╗ ║ ║║ ║ ╔═══╝║   ║║    ║║   ║╚══╗  ║ ║║ ║  ║ ║ ╚════╝ ║ ║
   ╚═══╝ ╚═╝╚═╝ ╚════╝   ╚╝    ╚╝   ╚═══╝  ╚═╝╚═╝  ╚═╝        ╚═╝
    discord.gg/easyteam*/
namespace GhostSushi\CustomiesExemple;

use GhostSushi\CustomiesExemple\Block\BlockExemple;
use GhostSushi\CustomiesExemple\Entities\RegisterEntity;
use GhostSushi\CustomiesExemple\Item\RegisterItem;
use pocketmine\plugin\PluginBase;

class Main extends PluginBase
{

    protected function onEnable(): void
    {
        $this->getLogger()->notice("§c
   ╔═══╗ ╔════╗ ╔════╗ ╔╗ ╔╗ ╔════╗ ╔═══╗  ╔════╗  ╔═════╗╔═════╗
   ║╔══╝ ║╔═╗ ║ ║╔═══╝ ║║ ║║ ║╔╗╔╗║ ║╔══╝  ║╔═╗ ║  ║ ╔═╗ ║║ ╔═╗ ║
   ║╚══╗ ║╚═╝ ║ ║╚═══╗ ║╚═╝║ ╚╝║║╚╝ ║╚══╗  ║╚═╝ ║  ║ ║ ║ ║║ ║ ║ ║
   ║╔══╝ ║ ╔╗ ║ ╚═══╗║ ╚═║║╝   ║║   ║╔══╝  ║ ╔╗ ║  ║ ║ ║ ╚╝ ║ ║ ║
   ║╚══╗ ║ ║║ ║ ╔═══╝║   ║║    ║║   ║╚══╗  ║ ║║ ║  ║ ║ ╚════╝ ║ ║
   ╚═══╝ ╚═╝╚═╝ ╚════╝   ╚╝    ╚╝   ╚═══╝  ╚═╝╚═╝  ╚═╝        ╚═╝
    discord.gg/easyteam");

        new RegisterItem();
        new RegisterEntity();
        new BlockExemple();
    }
}
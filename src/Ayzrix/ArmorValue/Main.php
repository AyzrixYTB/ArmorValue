<?php

#                                        __      __   _
#       /\                               \ \    / /  | |
#      /  \   _ __ _ __ ___   ___  _ __   \ \  / /_ _| |_   _  ___  ___
#     / /\ \ | '__| '_ ` _ \ / _ \| '__|   \ \/ / _` | | | | |/ _ \/ __|
#    / ____ \| |  | | | | | | (_) | |       \  / (_| | | |_| |  __/\__ \
#   /_/    \_\_|  |_| |_| |_|\___/|_|        \/ \__,_|_|\__,_|\___||___/
#
#

namespace Ayzrix\ArmorValue;

use Ayzrix\ArmorValue\Events\Listener\EntityListeners;
use Ayzrix\ArmorValue\Items\{
    ChainBoots,
    ChainChestplate,
    ChainHelmet,
    ChainLeggings,
    DiamondBoots,
    DiamondChestplate,
    DiamondHelmet,
    DiamondLeggings,
    GoldenBoots,
    GoldenChestplate,
    GoldenHelmet,
    GoldenLeggings,
    IronBoots,
    IronChestplate,
    IronHelmet,
    IronLeggings,
    LeatherBoots,
    LeatherChestplate,
    LeatherHelmet,
    LeatherLeggings,
    NetheriteBoots,
    NetheriteChestplate,
    NetheriteHelmet,
    NetheriteLeggings};
use pocketmine\item\Item;
use pocketmine\plugin\PluginBase;
use pocketmine\item\ItemFactory;

class Main extends PluginBase {

    /** @var Main $instance */
    private static $instance = null;

    public function onEnable(){
        self::$instance = $this;
        $this->saveDefaultConfig();

        $this->getServer()->getPluginManager()->registerEvents(new EntityListeners(), $this);
        ItemFactory::registerItem(new LeatherBoots(),true);
        ItemFactory::registerItem(new LeatherChestplate(),true);
        ItemFactory::registerItem(new LeatherHelmet(),true);
        ItemFactory::registerItem(new LeatherLeggings(),true);
        ItemFactory::registerItem(new ChainBoots(),true);
        ItemFactory::registerItem(new ChainChestplate(),true);
        ItemFactory::registerItem(new ChainHelmet(),true);
        ItemFactory::registerItem(new ChainLeggings(),true);
        ItemFactory::registerItem(new GoldenBoots(),true);
        ItemFactory::registerItem(new GoldenChestplate(),true);
        ItemFactory::registerItem(new GoldenHelmet(),true);
        ItemFactory::registerItem(new GoldenLeggings(),true);
        ItemFactory::registerItem(new IronBoots(),true);
        ItemFactory::registerItem(new IronChestplate(),true);
        ItemFactory::registerItem(new IronHelmet(),true);
        ItemFactory::registerItem(new IronLeggings(),true);
        ItemFactory::registerItem(new DiamondBoots(),true);
        ItemFactory::registerItem(new DiamondChestplate(),true);
        ItemFactory::registerItem(new DiamondHelmet(),true);
        ItemFactory::registerItem(new DiamondLeggings(),true);
        ItemFactory::registerItem(new NetheriteBoots(),true);
        ItemFactory::registerItem(new NetheriteChestplate(),true);
        ItemFactory::registerItem(new NetheriteHelmet(),true);
        ItemFactory::registerItem(new NetheriteLeggings(),true);
        Item::initCreativeItems();
    }

    /**
     * @return Main
     */
    public static function getInstance(): Main {
        return self::$instance;
    }
}
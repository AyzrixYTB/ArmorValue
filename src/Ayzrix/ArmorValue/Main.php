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

use Ayzrix\ArmorValue\Items\{ChainBoots, ChainChestplate, ChainHelmet, ChainLeggings, DiamondBoots, DiamondChestplate, DiamondHelmet, DiamondLeggings, GoldenBoots, GoldenChestplate, GoldenHelmet, GoldenLeggings, IronBoots, IronChestplate, IronHelmet, IronLeggings, LeatherBoots, LeatherChestplate, LeatherHelmet, LeatherLeggings, NetheriteBoots, NetheriteChestplate, NetheriteHelmet, NetheriteLeggings};
use pocketmine\item\Item;
use pocketmine\plugin\PluginBase;
use pocketmine\item\ItemFactory;

class Main extends PluginBase {

    /** @var Main $instance */
    private static $instance = null;

    public function onEnable() {
        self::$instance = $this;
        $this->saveDefaultConfig();
        self::registerAllArmors();
    }

    public static function registerAllArmors(): void {
        $items = [new NetheriteLeggings(), new NetheriteHelmet(), new NetheriteChestplate(), new NetheriteBoots(), new DiamondLeggings(), new DiamondHelmet(), new DiamondChestplate(), new DiamondBoots(), new IronLeggings(), new IronHelmet(), new IronChestplate(), new IronBoots(), new GoldenLeggings(), new GoldenHelmet(), new GoldenChestplate(), new GoldenBoots(), new LeatherBoots(), new LeatherChestplate(), new LeatherHelmet(), new LeatherLeggings(), new ChainBoots(), new ChainChestplate(), new ChainHelmet(), new ChainLeggings()];
        foreach ($items as $item) {
            ItemFactory::registerItem($item, true);
        }
        Item::initCreativeItems();
    }

    /**
     * @return Main
     */
    public static function getInstance(): Main {
        return self::$instance;
    }
}
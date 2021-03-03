<?php

#                                        __      __   _
#       /\                               \ \    / /  | |
#      /  \   _ __ _ __ ___   ___  _ __   \ \  / /_ _| |_   _  ___  ___
#     / /\ \ | '__| '_ ` _ \ / _ \| '__|   \ \/ / _` | | | | |/ _ \/ __|
#    / ____ \| |  | | | | | | (_) | |       \  / (_| | | |_| |  __/\__ \
#   /_/    \_\_|  |_| |_| |_|\___/|_|        \/ \__,_|_|\__,_|\___||___/
#
#

namespace Ayzrix\ArmorValue\API;

use Ayzrix\ArmorValue\Main;
use pocketmine\item\enchantment\Enchantment;
use pocketmine\item\Item;
use pocketmine\Player;

class DurabilityAPI {

    /**
     * @param int $id
     * @return int
     */
    public static function getBaseDurability(int $id): int {
        switch ($id) {
            case 298:
                return 56;
            case 299:
                return 81;
            case 300:
                return 76;
            case 301:
                return 66;
            case 302:
            case 306:
                return 166;
            case 303:
            case 307:
                return 241;
            case 304:
            case 308:
                return 226;
            case 305:
            case 309:
                return 196;
            case 310:
                return 364;
            case 311:
                return 529;
            case 312:
                return 496;
            case 313:
                return 430;
            case 314:
                return 78;
            case 315:
                return 113;
            case 316:
                return 106;
            case 317:
                return 92;
            case 748:
                return 407;
            case 749:
                return 592;
            case 750:
                return 555;
            case 751:
                return 481;
            default:
                return 0;
        }
    }

    /**
     * @param int $id
     * @return int
     */
    public static function getNewDurability(int $id): int {
        switch ($id) {
            case 298:
                return Main::getInstance()->getConfig()->get("LeatherHelmet")[1];
            case 299:
                return Main::getInstance()->getConfig()->get("LeatherChestplate")[1];
            case 300:
                return Main::getInstance()->getConfig()->get("LeatherLeggings")[1];
            case 301:
                return Main::getInstance()->getConfig()->get("LeatherBoots")[1];
            case 302:
                return Main::getInstance()->getConfig()->get("ChainHelmet")[1];
            case 303:
                return Main::getInstance()->getConfig()->get("ChainChestplate")[1];
            case 304:
                return Main::getInstance()->getConfig()->get("ChainLeggings")[1];
            case 305:
                return Main::getInstance()->getConfig()->get("ChainBoots")[1];
            case 306:
                return Main::getInstance()->getConfig()->get("IronHelmet")[1];
            case 307:
                return Main::getInstance()->getConfig()->get("IronChestplate")[1];
            case 308:
                return Main::getInstance()->getConfig()->get("IronLeggings")[1];
            case 309:
                return Main::getInstance()->getConfig()->get("IronBoots")[1];
            case 310:
                return Main::getInstance()->getConfig()->get("DiamondHelmet")[1];
            case 311:
                return Main::getInstance()->getConfig()->get("DiamondChestplate")[1];
            case 312:
                return Main::getInstance()->getConfig()->get("DiamondLeggings")[1];
            case 313:
                return Main::getInstance()->getConfig()->get("DiamondBoots")[1];
            case 314:
                return Main::getInstance()->getConfig()->get("GoldHelmet")[1];
            case 315:
                return Main::getInstance()->getConfig()->get("GoldChestplate")[1];
            case 316:
                return Main::getInstance()->getConfig()->get("GoldLeggings")[1];
            case 317:
                return Main::getInstance()->getConfig()->get("GoldBoots")[1];
            case 748:
                return Main::getInstance()->getConfig()->get("NetheriteHelmet")[1];
            case 749:
                return Main::getInstance()->getConfig()->get("NetheriteChestplate")[1];
            case 750:
                return Main::getInstance()->getConfig()->get("NetheriteLeggings")[1];
            case 751:
                return Main::getInstance()->getConfig()->get("NetheriteBoots")[1];
            default:
                return 0;
        }
    }

    /**
     * @param Item $item
     * @param string $type
     * @param int $amount
     * @return Item|null
     */
    public static function removeDurability(Player $player, Item $item, string $type, $amount = 1) {
        $amount -= self::getUnbreakingDamageReduction($item, 1);
        $baseDurability = self::getBaseDurability($item->getId());
        $newDurability = self::getNewDurability($item->getId());
        if(!$item->getNamedTag()->offsetExists("Durabilité")) $item->getNamedTag()->setString("Durabilité", $newDurability);
        $durability = intval($item->getNamedTag()->getString("Durabilité"));
        if ($durability <= 1) {
            switch ($type) {
                case "HELMET":
                    $player->getArmorInventory()->setHelmet(Item::get(0));
                    break;
                case "CHESTPLATE":
                    $player->getArmorInventory()->setChestplate(Item::get(0));
                    break;
                case "LEGGINGS":
                    $player->getArmorInventory()->setLeggings(Item::get(0));
                    break;
                case "BOOTS":
                    $player->getArmorInventory()->setBoots(Item::get(0));
                    break;
            }


            return null;
        }

        $item->getNamedTag()->setString("Durabilité", $durability - $amount);
        $damage = $newDurability / $baseDurability;
        $damage = intval(round($durability / $damage - $baseDurability) * -1);
        $item->setDamage($damage);
        return $item;
    }

    /**
     * @param Item $item
     * @param int $amount
     * @return int
     */
    protected static function getUnbreakingDamageReduction(Item $item, int $amount) : int {
        if (($unbreakingLevel = $item->getEnchantmentLevel(Enchantment::UNBREAKING)) > 0) {
            $negated = 0;
            $chance = 1 / ($unbreakingLevel + 1);
            for($i = 0; $i < $amount; ++$i) {
                if(mt_rand(1, 100) > 60 and lcg_value() > $chance){
                    $negated++;
                }
            }
            return $negated;
        }
        return 0;
    }
}

<?php

#                                        __      __   _
#       /\                               \ \    / /  | |
#      /  \   _ __ _ __ ___   ___  _ __   \ \  / /_ _| |_   _  ___  ___
#     / /\ \ | '__| '_ ` _ \ / _ \| '__|   \ \/ / _` | | | | |/ _ \/ __|
#    / ____ \| |  | | | | | | (_) | |       \  / (_| | | |_| |  __/\__ \
#   /_/    \_\_|  |_| |_| |_|\___/|_|        \/ \__,_|_|\__,_|\___||___/
#
#

namespace Ayzrix\ArmorValue\Events\Listener;

use Ayzrix\ArmorValue\API\DurabilityAPI;
use pocketmine\entity\Living;
use pocketmine\event\entity\EntityDamageEvent;
use pocketmine\event\Listener;
use pocketmine\Player;

class EntityListeners implements Listener {

    /**
     * @param EntityDamageEvent $event
     */
    public function EntityDamage(EntityDamageEvent $event) {
        $player = $event->getEntity();
        if ($player instanceof Player) {
            if ($player instanceof Living) {
                if (!$event->isCancelled()) {

                    $helmetID = $player->getArmorInventory()->getHelmet()->getId();
                    $chestplateID = $player->getArmorInventory()->getChestplate()->getId();
                    $leggingsID = $player->getArmorInventory()->getLeggings()->getId();
                    $bootsID = $player->getArmorInventory()->getBoots()->getId();

                    if ($helmetID !== 0) {
                        $item = $player->getArmorInventory()->getHelmet();
                        $newItem = DurabilityAPI::removeDurability($player, $item, "HELMET");
                        if (!is_null($newItem)) $player->getArmorInventory()->setHelmet($item);
                    }

                    if ($chestplateID !== 0) {
                        $item = $player->getArmorInventory()->getChestplate();
                        $newItem = DurabilityAPI::removeDurability($player, $item, "CHESTPLATE");
                        if (!is_null($newItem)) $player->getArmorInventory()->setChestplate($item);
                    }

                    if ($leggingsID !== 0) {
                        $item = $player->getArmorInventory()->getLeggings();
                        $newItem = DurabilityAPI::removeDurability($player, $item, "LEGGINGS");
                        if (!is_null($newItem)) $player->getArmorInventory()->setLeggings($item);
                    }

                    if ($bootsID !== 0) {
                        $item = $player->getArmorInventory()->getBoots();
                        $newItem = DurabilityAPI::removeDurability($player, $item, "BOOTS");
                        if (!is_null($newItem)) $player->getArmorInventory()->setBoots($item);
                    }
                }
            }
        }
    }
}
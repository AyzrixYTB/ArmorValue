<?php

namespace Ayzrix\ArmorValue\Items;

use Ayzrix\ArmorValue\Main;
use pocketmine\item\Armor;

class NetheriteChestplate extends Armor {

    public function __construct($meta = 0) {
        parent::__construct(749, $meta, "Netherite Chestplate");
    }


    public function getDefensePoints() : int
    {
        return Main::getInstance()->getConfig()->get("NetheriteChestplate")[0];
    }

    public function getMaxDurability() : int
    {
        return Main::getInstance()->getConfig()->get("NetheriteChestplate")[1];
    }

    public function applyDamage(int $amount): bool
    {
        return false;
    }
}

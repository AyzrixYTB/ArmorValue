<?php

namespace Ayzrix\ArmorValue\Items;

use Ayzrix\ArmorValue\Main;
use pocketmine\item\Armor;

class NetheriteLeggings extends Armor {

    public function __construct($meta = 0) {
        parent::__construct(750, $meta, "Netherite Leggings");
    }

    public function getDefensePoints() : int
    {
        return Main::getInstance()->getConfig()->get("NetheriteLeggings")[0];
    }

    public function getMaxDurability() : int
    {
        return Main::getInstance()->getConfig()->get("NetheriteLeggings")[1];
    }

    public function applyDamage(int $amount): bool
    {
        return false;
    }

}

<?php

namespace Ayzrix\ArmorValue\Items;

use Ayzrix\ArmorValue\Main;
use pocketmine\item\Armor;

class NetheriteHelmet extends Armor {

    public function __construct($meta = 0) {
        parent::__construct(748, $meta, "Netherite Helmet");
    }

    public function getDefensePoints() : int
    {
        return Main::getInstance()->getConfig()->get("NetheriteHelmet")[0];
    }

    public function getMaxDurability() : int
    {
        return Main::getInstance()->getConfig()->get("NetheriteHelmet")[1];
    }

    public function applyDamage(int $amount): bool
    {
        return false;
    }
}

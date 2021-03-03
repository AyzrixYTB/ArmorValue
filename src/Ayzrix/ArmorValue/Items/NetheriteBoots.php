<?php

namespace Ayzrix\ArmorValue\Items;

use Ayzrix\ArmorValue\Main;
use pocketmine\item\Armor;

class NetheriteBoots extends Armor {

    public function __construct($meta = 0) {
        parent::__construct(751, $meta, "Netherite Boots");
    }

    public function getDefensePoints() : int
    {
        return Main::getInstance()->getConfig()->get("NetheriteBoots")[0];
    }

    public function getMaxDurability() : int
    {
        return Main::getInstance()->getConfig()->get("NetheriteBoots")[1];
    }

    public function applyDamage(int $amount): bool
    {
        return false;
    }
}

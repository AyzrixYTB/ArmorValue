<?php

namespace Ayzrix\ArmorValue\Items;

use Ayzrix\ArmorValue\Main;
use pocketmine\item\DiamondBoots as PMDiamondBoots;

class DiamondBoots extends PMDiamondBoots
{

    public function getDefensePoints() : int {
        return Main::getInstance()->getConfig()->get("DiamondBoots")[0];
    }

    public function getMaxDurability() : int
    {
        return Main::getInstance()->getConfig()->get("DiamondBoots")[1];
    }
    public function applyDamage(int $amount): bool
    {
        return false;
    }
}

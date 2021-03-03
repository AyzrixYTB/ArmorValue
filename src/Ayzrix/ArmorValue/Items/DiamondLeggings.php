<?php

namespace Ayzrix\ArmorValue\Items;

use Ayzrix\ArmorValue\Main;
use pocketmine\item\DiamondLeggings as PMDiamondLeggings;

class DiamondLeggings extends PMDiamondLeggings
{

    public function getDefensePoints() : int
    {
        return Main::getInstance()->getConfig()->get("DiamondLeggings")[0];
    }

    public function getMaxDurability() : int
    {
        return Main::getInstance()->getConfig()->get("DiamondLeggings")[1];
    }
    public function applyDamage(int $amount): bool
    {
        return false;
    }
}

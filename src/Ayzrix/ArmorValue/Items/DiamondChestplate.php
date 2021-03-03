<?php

namespace Ayzrix\ArmorValue\Items;

use Ayzrix\ArmorValue\Main;
use pocketmine\item\DiamondChestplate as PMDiamondChestplate;

class DiamondChestplate extends PMDiamondChestplate
{

    public function getDefensePoints() : int
    {
        return Main::getInstance()->getConfig()->get("DiamondChestplate")[0];
    }

    public function getMaxDurability() : int
    {
        return Main::getInstance()->getConfig()->get("DiamondChestplate")[1];
    }
    public function applyDamage(int $amount): bool
    {
        return false;
    }
}

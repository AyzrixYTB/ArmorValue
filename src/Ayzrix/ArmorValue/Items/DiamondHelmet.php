<?php

namespace Ayzrix\ArmorValue\Items;

use Ayzrix\ArmorValue\Main;
use pocketmine\item\DiamondHelmet as PMDiamondHelmet;

class DiamondHelmet extends PMDiamondHelmet
{

    public function getDefensePoints() : int
    {
        return Main::getInstance()->getConfig()->get("DiamondHelmet")[0];
    }

    public function getMaxDurability() : int
    {
        return Main::getInstance()->getConfig()->get("DiamondHelmet")[1];
    }
    public function applyDamage(int $amount): bool
    {
        return false;
    }
}

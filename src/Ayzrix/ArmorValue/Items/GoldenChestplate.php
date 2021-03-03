<?php

namespace Ayzrix\ArmorValue\Items;

use Ayzrix\ArmorValue\Main;
use pocketmine\item\GoldChestplate as PMGoldChestplate;

class GoldenChestplate extends PMGoldChestplate
{

    public function getDefensePoints() : int
    {
        return Main::getInstance()->getConfig()->get("GoldChestplate")[0];
    }

    public function getMaxDurability() : int
    {
        return Main::getInstance()->getConfig()->get("GoldChestplate")[1];
    }
    public function applyDamage(int $amount): bool
    {
        return false;
    }
}

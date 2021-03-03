<?php

namespace Ayzrix\ArmorValue\Items;

use Ayzrix\ArmorValue\Main;
use pocketmine\item\GoldBoots as PMGoldBoots;

class GoldenBoots extends PMGoldBoots
{

    public function getDefensePoints() : int
    {
        return Main::getInstance()->getConfig()->get("GoldBoots")[0];
    }

    public function getMaxDurability() : int
    {
        return Main::getInstance()->getConfig()->get("GoldBoots")[1];
    }
    public function applyDamage(int $amount): bool
    {
        return false;
    }
}

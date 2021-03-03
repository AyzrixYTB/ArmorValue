<?php

namespace Ayzrix\ArmorValue\Items;

use Ayzrix\ArmorValue\Main;
use pocketmine\item\GoldLeggings as PMGoldLeggings;

class GoldenLeggings extends PMGoldLeggings
{

    public function getDefensePoints() : int
    {
        return Main::getInstance()->getConfig()->get("GoldLeggings")[0];
    }

    public function getMaxDurability() : int
    {
        return Main::getInstance()->getConfig()->get("GoldLeggings")[1];
    }
    public function applyDamage(int $amount): bool
    {
        return false;
    }
}

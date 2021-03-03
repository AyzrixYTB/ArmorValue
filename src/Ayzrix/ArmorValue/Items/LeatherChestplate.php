<?php

namespace Ayzrix\ArmorValue\Items;

use Ayzrix\ArmorValue\Main;
use pocketmine\item\LeatherTunic as PMLeatherChestplate;

class LeatherChestplate extends PMLeatherChestplate
{

    public function getDefensePoints() : int
    {
        return Main::getInstance()->getConfig()->get("LeatherChestplate")[0];
    }

    public function getMaxDurability() : int
    {
        return Main::getInstance()->getConfig()->get("LeatherChestplate")[1];
    }
    public function applyDamage(int $amount): bool
    {
        return false;
    }
}

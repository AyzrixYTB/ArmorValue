<?php

namespace Ayzrix\ArmorValue\Items;

use Ayzrix\ArmorValue\Main;
use pocketmine\item\LeatherBoots as PMLeatherBoots;

class LeatherBoots extends PMLeatherBoots
{

    public function getDefensePoints() : int
    {
        return Main::getInstance()->getConfig()->get("LeatherBoots")[0];
    }

    public function getMaxDurability() : int
    {
        return Main::getInstance()->getConfig()->get("LeatherBoots")[1];
    }
    public function applyDamage(int $amount): bool
    {
        return false;
    }
}

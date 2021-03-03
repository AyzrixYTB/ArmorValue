<?php

namespace Ayzrix\ArmorValue\Items;

use Ayzrix\ArmorValue\Main;
use pocketmine\item\LeatherPants as PMLeatherLeggings;

class LeatherLeggings extends PMLeatherLeggings
{

    public function getDefensePoints() : int
    {
        return Main::getInstance()->getConfig()->get("LeatherLeggings")[0];
    }

    public function getMaxDurability() : int
    {
        return Main::getInstance()->getConfig()->get("LeatherLeggings")[1];
    }

    public function applyDamage(int $amount): bool
    {
        return false;
    }

}

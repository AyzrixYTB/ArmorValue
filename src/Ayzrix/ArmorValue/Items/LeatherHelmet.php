<?php

namespace Ayzrix\ArmorValue\Items;

use Ayzrix\ArmorValue\Main;
use pocketmine\item\LeatherCap as PMLeatherHelmet;

class LeatherHelmet extends PMLeatherHelmet
{

    public function getDefensePoints() : int
    {
        return Main::getInstance()->getConfig()->get("LeatherHelmet")[0];
    }

    public function getMaxDurability() : int
    {
        return Main::getInstance()->getConfig()->get("LeatherHelmet")[1];
    }
    public function applyDamage(int $amount): bool
    {
        return false;
    }
}

<?php

namespace Ayzrix\ArmorValue\Items;

use Ayzrix\ArmorValue\Main;
use pocketmine\item\GoldHelmet as PMGoldHelmet;

class GoldenHelmet extends PMGoldHelmet
{

    public function getDefensePoints() : int
    {
        return Main::getInstance()->getConfig()->get("GoldHelmet")[0];
    }

    public function getMaxDurability() : int
    {
        return Main::getInstance()->getConfig()->get("GoldHelmet")[1];
    }
    public function applyDamage(int $amount): bool
    {
        return false;
    }
}

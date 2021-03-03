<?php

namespace Ayzrix\ArmorValue\Items;

use Ayzrix\ArmorValue\Main;
use pocketmine\item\IronLeggings as PMIronLeggings;

class IronLeggings extends PMIronLeggings
{

    public function getDefensePoints() : int
    {
        return Main::getInstance()->getConfig()->get("IronLeggings")[0];
    }

    public function getMaxDurability() : int
    {
        return Main::getInstance()->getConfig()->get("IronLeggings")[1];
    }
    public function applyDamage(int $amount): bool
    {
        return false;
    }
}

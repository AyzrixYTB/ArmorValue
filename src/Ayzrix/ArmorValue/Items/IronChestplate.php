<?php

namespace Ayzrix\ArmorValue\Items;

use Ayzrix\ArmorValue\Main;
use pocketmine\item\IronChestplate as PMIronChestplate;

class IronChestplate extends PMIronChestplate
{

    public function getDefensePoints() : int
    {
        return Main::getInstance()->getConfig()->get("IronChestplate")[0];
    }

    public function getMaxDurability() : int
    {
        return Main::getInstance()->getConfig()->get("IronChestplate")[1];
    }
    public function applyDamage(int $amount): bool
    {
        return false;
    }
}

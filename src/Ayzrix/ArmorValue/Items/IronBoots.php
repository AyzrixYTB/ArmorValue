<?php

namespace Ayzrix\ArmorValue\Items;

use Ayzrix\ArmorValue\Main;
use pocketmine\item\IronBoots as PMIronBoots;

class IronBoots extends PMIronBoots
{

    public function getDefensePoints() : int
    {
        return Main::getInstance()->getConfig()->get("IronBoots")[0];
    }

    public function getMaxDurability() : int
    {
        return Main::getInstance()->getConfig()->get("IronBoots")[1];
    }
    public function applyDamage(int $amount): bool
    {
        return false;
    }
}

<?php

namespace Ayzrix\ArmorValue\Items;

use Ayzrix\ArmorValue\Main;
use pocketmine\item\IronHelmet as PMIronHelmet;

class IronHelmet extends PMIronHelmet
{

    public function getDefensePoints() : int
    {
        return Main::getInstance()->getConfig()->get("IronHelmet")[0];
    }

    public function getMaxDurability() : int
    {
        return Main::getInstance()->getConfig()->get("IronHelmet")[1];
    }
    public function applyDamage(int $amount): bool
    {
        return false;
    }
}

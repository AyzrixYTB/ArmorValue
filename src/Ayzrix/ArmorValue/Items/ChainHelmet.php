<?php

namespace Ayzrix\ArmorValue\Items;

use Ayzrix\ArmorValue\Main;
use pocketmine\item\ChainHelmet as PMChainHelmet;

class ChainHelmet extends PMChainHelmet
{

    public function getDefensePoints() : int
    {
        return Main::getInstance()->getConfig()->get("ChainHelmet")[0];
    }

    public function getMaxDurability() : int
    {
        return Main::getInstance()->getConfig()->get("ChainHelmet")[1];
    }
    public function applyDamage(int $amount): bool
    {
        return false;
    }
}

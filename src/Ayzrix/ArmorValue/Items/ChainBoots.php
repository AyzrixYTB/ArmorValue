<?php

namespace Ayzrix\ArmorValue\Items;

use Ayzrix\ArmorValue\Main;
use pocketmine\item\ChainBoots as PMChainBoots;

class ChainBoots extends PMChainBoots {

    public function getDefensePoints() : int{
        return Main::getInstance()->getConfig()->get("ChainBoots")[0];
    }

    public function getMaxDurability() : int {
        return Main::getInstance()->getConfig()->get("ChainBoots")[1];
    }
    public function applyDamage(int $amount): bool
    {
        return false;
    }
}

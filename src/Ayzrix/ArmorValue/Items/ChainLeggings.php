<?php

namespace Ayzrix\ArmorValue\Items;

use Ayzrix\ArmorValue\Main;
use pocketmine\item\ChainLeggings as PMChainLeggings;

class ChainLeggings extends PMChainLeggings
{

    public function getDefensePoints() : int
    {
        return Main::getInstance()->getConfig()->get("ChainLeggings")[0];
    }

    public function getMaxDurability() : int
    {
        return Main::getInstance()->getConfig()->get("ChainLeggings")[1];
    }
    public function applyDamage(int $amount): bool
    {
        return false;
    }
}

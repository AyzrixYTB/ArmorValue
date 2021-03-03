<?php

namespace Ayzrix\ArmorValue\Items;

use Ayzrix\ArmorValue\Main;
use pocketmine\item\ChainChestplate as PMChainChestplate;

class ChainChestplate extends PMChainChestplate
{

    public function getDefensePoints() : int
    {
        return Main::getInstance()->getConfig()->get("ChainChestplate")[0];
    }

    public function getMaxDurability() : int
    {
        return Main::getInstance()->getConfig()->get("ChainChestplate")[1];
    }
    public function applyDamage(int $amount): bool
    {
        return false;
    }
}

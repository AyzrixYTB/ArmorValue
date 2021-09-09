<?php

namespace Ayzrix\ArmorValue\Items;

use Ayzrix\ArmorValue\API\DurabilityAPI;
use Ayzrix\ArmorValue\Main;
use pocketmine\item\enchantment\Enchantment;
use pocketmine\item\IronHelmet as PMIronHelmet;
use pocketmine\item\Item;

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

    public function applyDamage(int $amount) : bool{
        $amount -= self::getUnbreakingDamageReductions($this, $amount);
        $baseDurability = DurabilityAPI::getBaseDurability($this->getId());
        $newDurability = self::getMaxDurability();
        if(!$this->getNamedTag()->offsetExists("durability")) $this->getNamedTag()->setInt("durability", $newDurability-1);
        $durability = $this->getNamedTag()->getInt("durability");
        $damage = $newDurability / $baseDurability;
        if($durability <= 0) {
            return parent::applyDamage($baseDurability);
        }
        $this->getNamedTag()->setInt("durability", $durability - $amount);
        $damage = intval(round($durability / $damage - $baseDurability) * -1);
        $this->setDamage($damage);
        return true;
    }

    /**
     * @param Item $item
     * @param int $amount
     * @return int
     */
    protected static function getUnbreakingDamageReductions(Item $item, int $amount) : int {
        if (($unbreakingLevel = $item->getEnchantmentLevel(Enchantment::UNBREAKING)) > 0) {
            $negated = 0;
            $chance = 1 / ($unbreakingLevel + 1);
            for($i = 0; $i < $amount; ++$i) {
                if(mt_rand(1, 100) > 60 and lcg_value() > $chance){
                    $negated++;
                }
            }
            return $negated;
        }
        return 0;
    }
}

<?php

namespace Arena\Character;

class Mage extends Character
{
    const SUPER_ATTACK_DELAY = 3;

    private $attackNumber = 0;

    public function __construct()
    {
        $this->healthPoints = 80;
        $this->name = 'Mage';
    }

    public function attack(Character $character)
    {
        $this->attackNumber++;

        if ($this->attackNumber % self::SUPER_ATTACK_DELAY === 0) {
            echo "{$this->name} start a super attack!!!\n";
            $this->superAttack($character);
        } else {
            parent::attack($character);
            $character->hit(5);
        }
    }

    public function superAttack(Character $character)
    {
        $character->hit(35);
    }
}

<?php

namespace Arena;

class Mage extends Character
{
    private static $attackNumber = 0;

    public function __construct()
    {
        $this->healthPoints = 80;
        $this->name = 'Mage';
    }

    public function attack(Character $character)
    {
        self::$attackNumber++;

        if (self::$attackNumber == 3) {
            self::$attackNumber = 0;
            echo "{$this->name} start a super attack!!!\n";
            $character->hit(35);
        } else {
            echo "{$this->name} attack {$character->name}!\n";
            $character->hit(5);
        }
    }
}

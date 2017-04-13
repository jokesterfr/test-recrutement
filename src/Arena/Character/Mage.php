<?php

namespace Arena\Character;


class Mage extends Character
{
    public function __construct()
    {
        $this->healthPoints = 100;
        $this->name = 'Mage';
    }

    public function attack(Character $character)
    {
        $character->hit(5);
    }

}
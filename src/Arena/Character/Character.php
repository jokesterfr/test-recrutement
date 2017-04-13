<?php

namespace Arena\Character;

abstract class Character
{
    protected $healthPoints;
    protected $name;

    public function attack(Character $character) {
        echo "{$this->name} attack {$character->name}!\n";
    }

    public function hit($points) {
        $this->healthPoints -= $points;
        echo "{$this->name} lose {$points} health points. {$this->healthPoints} remaining.\n";
    }

    public function isDead()
    {
        return $this->healthPoints <= 0;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getHealthPoint()
    {
        return $this->healthPoints;
    }
}

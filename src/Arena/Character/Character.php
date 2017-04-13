<?php

namespace Arena\Character;

abstract class Character
{
    protected $healthPoints;
    protected $name;

    abstract public function attack(Character $character);

    public function hit($points) {
        $this->healthPoints -= $points;
    }

    public function isDead()
    {
        return $this->healthPoints <= 0 ;
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

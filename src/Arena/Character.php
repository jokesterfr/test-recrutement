<?php

namespace Arena;

abstract class Character
{
    protected $healthPoints;
    protected $name;

    abstract public function attack(Character $character);

    public function hit(int $points)
    {
        $this->healthPoints -= $points;
        echo "{$this->name} lose {$points} health points. {$this->healthPoints} remaining.\n";
    }

    public function isDead() : bool
    {
        return 0 === $this->healthPoints;
    }

    public function getName() : string
    {
        return $this->name;
    }

    public function getHealthPoint() : int
    {
        return $this->healthPoints;
    }
}

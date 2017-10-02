<?php

namespace Arena;

abstract class Character
{
    protected $healthPoints;
    protected $name;

    abstract public function attack(Character $character);

    public function hit($points)
    {
        $healthPoints = $this->healthPoints;
        $healthPoints -= $points;
        $this->healthPoints = max(0, $healthPoints);

        echo "{$this->name} lose {$points} health points. {$this->healthPoints} remaining.\n";
    }

    public function isDead()
    {
        return 0 === $this->healthPoints;
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
<?php

namespace Arena;

abstract class Character
{
    protected $healthPoints;
    protected $name;

    abstract public function attack($character);

    public function hit($points) {
        $this->healthPoints -= $points; echo "{$this->name} lose {$points} health points. {$this->healthPoints} remaining.\n";
    }

    public function isDead()
    {
        if ($this->healthPoints == 0)
            $isDead = true;
        else
            $isDead = false;

        return $isDead;
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

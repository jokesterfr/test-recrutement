<?php

namespace Arena;

use Arena\Character\Character;

class Arena
{
    /** @var Character */
    private $characterOne;

    /** @var Character */
    private $characterTwo;

    /**
     * Arena constructor.
     * @param Character $characterOne
     * @param Character $characterTwo
     */
    public function __construct(Character $characterOne, Character $characterTwo)
    {
        $this->characterOne = $characterOne;
        $this->characterTwo = $characterTwo;
    }

    function fight()
    {
        while($this->noDead()) {
            $this->nextRound();
        }
        $this->result();
    }

    function noDead() {
        return !($this->characterOne->isDead() || $this->characterTwo->isDead());
    }

    function nextRound() {
        $this->characterOne->attack($this->characterTwo);
        $this->characterTwo->attack($this->characterOne);
        echo "{$this->characterOne->getHealthPoint()} {$this->characterTwo->getHealthPoint()}\n";
    }

    function result() {
        $winner = $this->characterOne->isDead() ? $this->characterTwo->getName() : $this->characterOne->getName();
        echo $winner;
    }
}
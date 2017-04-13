<?php

namespace Arena;

use Arena\Character\Character;

class Arena
{
    private $characterOne;
    private $characterTwo;



    private $roundNumber = 0;

    public function __construct( Character $characterOne, $characterTwo ) {
        $this->characterOne = $characterOne; $this->characterTwo = $characterTwo;
    }

    function fight()
    {

      for ($i = 0; $i < 10000; $i++) {
        $this->roundNumber++;
        if ($this->roundNumber % 2) {
          $this->characterOne->attack($this->characterTwo);
        }
        else $this->characterTwo->attack($this->characterOne);

        if ($this->characterOne->isDead()) {
          echo "{$this->characterTwo->getName()} won the battle!!\n";
           exit;
        } else {
            if ($this->characterTwo->isDead()) {
                echo "{$this->characterOne->getName()} won the battle!!\n";
                exit;
            }
        }
      }
    }
}

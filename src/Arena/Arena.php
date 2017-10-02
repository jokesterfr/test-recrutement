<?php

namespace Arena;

final class Arena
{
    private $characterOne;
    private $characterTwo;
    private $roundNumber = 0;

    const STANDARD_MODE_FIGHT = 0;
    const RANDOM_MODE_FIGHT = 1;

    public function __construct(Character $characterOne, Character $characterTwo)
    {
        $this->characterOne = $characterOne;
        $this->characterTwo = $characterTwo;
    }

    function displayFightMode(int $fightMode)
    {
        echo PHP_EOL . "Fight mode $fightMode" . PHP_EOL;
    }

    function standardFight()
    {
        return $this->fight(self::STANDARD_MODE_FIGHT);
    }

    function randomFight()
    {
        return $this->fight(self::RANDOM_MODE_FIGHT);
    }

    function fight(int $fightMode)
    {
        $this->displayFightMode($fightMode);

        for ($i = 0; $i < 10000; $i++) {
            $this->roundNumber++;
            if($fightMode === self::STANDARD_MODE_FIGHT) {
                if ($this->roundNumber % 2) {
                    $this->characterOne->attack($this->characterTwo);
                } else $this->characterTwo->attack($this->characterOne);
            } else {
                $defender = $this->characterTwo;

                $attacker = $this->playRockPaperScissor();
                if($defender === $attacker) {
                    $defender = $this->characterOne;
                }
                $attacker->attack($defender);
            }
            if ($this->characterOne->isDead()) {
                echo "{$this->characterTwo->getName()} won the battle!!\n";
                break;
            } else {
                if ($this->characterTwo->isDead()) {
                    echo "{$this->characterOne->getName()} won the battle!!\n";
                    break;
                }
            }
        }
    }

    private function playRockPaperScissor()
    {
        // Randomize Moves
        $player1 = rand(1, 3);
        $player2 = rand(1, 3);

        // Declare wins
        //rock =1
        //paper =2
        //scissors =3

        $rock_wins = 3;
        $paper_wins = 1;
        $scissors_wins = 2;

        // Conditional logic for wins
        if ($player1 == $player2) {
            return $this->characterOne; //Life is not fair
        } elseif ($player1 == 1) {
            if ($player2 == $rock_wins) {
                return $this->characterOne;
            }
        } elseif ($player1 == 2) {
            if ($player2 == $paper_wins) {
                return $this->characterOne;
            }
        } elseif ($player1 == 3) {
            if ($player2 == $scissors_wins) {
                return $this->characterOne;
            }
        }

        return $this->characterTwo;

    }
}
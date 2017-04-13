<?php
/**
 * Created by PhpStorm.
 * User: apelletier
 * Date: 13/04/17
 * Time: 10:07
 */

namespace Arena\Character;


class Warrior extends Character
{
    public function __construct()
    {
        $this->healthPoints = 20;
        $this->name = 'Warrior';
    }

    public function attack(Character $character)
    {
        $character->hit(10);
    }

}
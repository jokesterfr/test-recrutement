const Rx = require('Rx');

const Warrior = require('./Warrior');
const Mage = require('./Mage');
const Arena = require('./Arena');
const RandomArena = require('./RandomArena');

class Game {

    constructor() {
        this.characters = [
            new Warrior('1'),
            new Mage('2'),
            new Warrior('3'),
            new Warrior('4')
        ];

        this.arena = new Arena();
        this.randomArena = new RandomArena();
    }

    async play() {
        let firstWinner = this.arena.fight(this.characters[0], this.characters[1]);
        let secondWinner = this.arena.fight(this.characters[2], this.characters[3]);
        let finalWinner = this.arena.fight(firstWinner, secondWinner);
        this.arena.podium(finalWinner);
    }

    async playRandom() {
        let command = this.randomArena.fight(new Warrior('random'), new Mage('random'));
    }

}

module.exports = Game;
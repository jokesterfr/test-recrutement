const Rx = require('Rx');

class RandomArena {

    fight(characterOne, characterTwo)
    {
        return Rx.Observable.of(characterOne)
         .zip([Rx.Observable.of(characterTwo)], (firstCharacter, secondCharacter) => {
             return Math.floor(Math.random()) == 1 ? firstCharacter : secondCharacter;
         });
    }

    podium(character) {
        console.log(`${character.name} won the battle !`);
    }

}

module.exports = RandomArena;
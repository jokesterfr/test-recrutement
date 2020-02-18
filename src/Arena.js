class Arena {

    async fight(characterOne, characterTwo)
    {
        return new Promise((resolve, reject) => {
            let roundNumber = 0;
            for (let i = 0; i < 1000; i++) {
                roundNumber++;

                if (roundNumber % 2 == 0) {
                    characterOne.attack(characterTwo);
                } else {
                    characterTwo.attack(characterOne);
                }

                if(characterOne.isDead() || characterTwo.isDead()) {
                    break;
                }
            }

            if (characterOne.isDead()) {
                return characterTwo;
            } else if (characterTwo.isDead()) {
                return characterOne;
            }
        });
    }

    podium(character) {
        console.log(`${character.name} won the battle !`);
    }

}

module.exports = Arena;
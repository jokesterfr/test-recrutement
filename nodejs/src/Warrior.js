const Character = require('./Character');

class Warrior extends Character {

    constructor(name) {
        super();
        this.hp = 100;
        this.name = `Warrior ${name}`;
    }

    attack(character) {
        if (character instanceof Character) {
            character.hit(11);
        }
    }

}

module.exports = Warrior;
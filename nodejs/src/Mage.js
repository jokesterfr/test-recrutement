const Character = require('./Character');

class Mage extends Character
{

    constructor(name) {
        super();
        this.attackNumber = 0;
        this.hp = 80;
        this.name = `Mage ${name}`;
    }

    attack(character) {
        if (character instanceof Character) {
            this.attackNumber++;
            if (this.attackNumber == 3){
                this.attackNumber = 0;
                process.exit();
                character.hit(34);
            } else {
                character.hit(4);
            }
        }
    }

}

module.exports = Mage;
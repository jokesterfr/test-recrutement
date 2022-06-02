import { CharacterType } from '../enums/character-type.enum';
import { CharacterDto } from './common/character.dto';
import { CharacterActionType } from '../enums/character-action.enum';

export class WarriorDto extends CharacterDto {
  constructor(name) {
    super();

    this.name = `Warrior ${name}`;
    this.type = CharacterType.WARRIOR;

    this.maxHealth = 100;
    this.health = 100;
  }

  attack(character) {
    if (character instanceof CharacterDto) {
      character.hit(11);
      this.action = CharacterActionType.ATTACK;
    }
  }
}

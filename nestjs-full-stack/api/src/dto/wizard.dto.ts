import { CharacterType } from '../enums/character-type.enum';
import { CharacterDto } from './common/character.dto';
import { CharacterActionType } from '../enums/character-action.enum';

export class WizardDto extends CharacterDto {
  private attackCount = 0;

  constructor(name) {
    super();

    this.name = `Wizard ${name}`;
    this.type = CharacterType.WIZARD;

    this.maxHealth = 80;
    this.health = 80;
  }

  attack(character: CharacterDto) {
    if (character instanceof CharacterDto) {
      if (this.attackCount === 3) {
        this.attackCount = 0;
        character.hit(34);
        this.action = CharacterActionType.ATTACK;
      } else {
        this.action = CharacterActionType.ATTACK;
      }
    }
  }
}

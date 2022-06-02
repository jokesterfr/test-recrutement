import { CharacterType } from '../../enums/character-type.enum';
import { CharacterActionType } from '../../enums/character-action.enum';

export abstract class CharacterDto {
  protected name: string;
  protected type: CharacterType;

  protected maxHealth: number;
  protected health: number;
  protected action = CharacterActionType.IDLE;

  abstract attack(character: CharacterDto);

  isDead() {
    return this.health === 0;
  }

  hit(points: number) {
    this.health -= points;
    this.action = CharacterActionType.DAMAGE;
  }
}

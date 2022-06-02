import { CharacterDto } from './common/character.dto';

export class GameDto {
  protected round = 0;

  constructor(
    protected readonly id: number,

    protected readonly player1: CharacterDto,
    protected readonly player2: CharacterDto,
  ) {}

  fight() {
    if (this.player1.isDead() || this.player2.isDead()) return null;

    const attacker = this.round % 2 === 0 ? this.player1 : this.player2;
    const defender = this.round % 2 !== 0 ? this.player1 : this.player2;
    attacker.attack(defender);

    this.round++;
    console.log(`Round: ${this.round}`);
    process.exit();
    return this;
  }
}

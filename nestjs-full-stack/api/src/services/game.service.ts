import { Injectable, NotFoundException } from '@nestjs/common';

import { GameDto } from '../dto/game.dto';
import { WarriorDto } from '../dto/warrior.dto';
import { WizardDto } from '../dto/wizard.dto';

@Injectable()
export class GameService {
  protected id = 0;
  protected games: GameDto[] = [];

  public create(player1 = new WarriorDto('1'), player2 = new WizardDto('2')) {
    this.games.push(new GameDto(this.id++, player1, player2));
    return this.games[this.id];
  }

  public fight(id) {
    if (this.games[id]) {
      return this.games[id].fight();
    } else throw new NotFoundException();
  }
}

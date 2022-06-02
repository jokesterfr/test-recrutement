import { Controller, HttpStatus, Param, Post, Res } from '@nestjs/common';

import { GameService } from '../services/game.service';
import { Response } from 'express';

@Controller('/game')
export class GameController {
  constructor(private readonly gameService: GameService) {}

  @Post('/create')
  createGame() {
    return this.gameService.create();
  }

  @Post('/fight/:id')
  fightGame(@Res() res: Response, @Param('id') id: number) {
    const game = this.gameService.fight(id);
    if (game) {
      return res.json(game);
    }

    return res.status(HttpStatus.NOT_FOUND).json(null);
  }
}

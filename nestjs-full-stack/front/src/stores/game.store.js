import { defineStore } from 'pinia';
import axios from 'axios';

const HOST = 'http://localhost:3001';

const ENDPOINT_GAME_CREATE = '/game/create';
const ENDPOINT_GAME_FIGHT = '/game/fight';

const useGameStore = defineStore('game', {
  state: () => {
    return { game: null };
  },
  actions: {
    create() {
      this.game = axios.post(`${HOST}${ENDPOINT_GAME_CREATE}`).data;
    },
    async fight() {
      try {
        this.game = (
          await axios.post(`${HOST}${ENDPOINT_GAME_FIGHT}/${this.game.id}`)
        ).data;
      } catch (e) {
        if (e.response.status === 404) {
          this.game = null;
        }
      }
    },
  },
});

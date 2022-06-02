<script setup>
// This starter template is using Vue 3 <script setup> SFCs
// Check out https://vuejs.org/api/sfc-script-setup.html#script-setup
import { computed } from 'vue';

import CharacterHealth from '../components/character-health.component.vue';
import CharacterModel from '../components/character-model.component.vue';
import Button from '../components/button.component.vue';
import {useGameStore} from "../stores/game.store";
import Podium from '../components/podium.component.vue';

const gameStore = useGameStore();
const game = computed(() => gameStore.$state.game);

const onStart = () => {
    gameStore.create();
}

const onFight = () => {
    gameStore.fight();
}

const fightEnded = computed(() => game.value && (game.value.player1.health === 0 || game.value.player2.health === 0));
const player1Win = computed(() => game.value && fightEnded.value && game.value.player1.health !== 0);
const player2Win = computed(() => game.value && fightEnded.value && game.value.player2.health !== 0);

</script>

<template>
    <template v-if="game">
        <CharacterHealth :number='1' :player="game.player1" />
        <CharacterHealth :number='2' :player="game.player2" align="right" />
        <CharacterModel v-if="!player2Win" :number='1' :player="game.player1" />
        <CharacterModel v-if="!player1Win" :number='2' :player="game.player2" align="right" />

        <Podium v-if="player1Win">{{game.player1.name}}</Podium>
        <Podium v-if="player2Win">{{game.player2.name}}</Podium>

        <Button v-if="fightEnded" small @click="onStart">START AGAIN</Button>
    </template>
    <template v-else>
        <Button @click="onStart">START</Button>
    </template>
</template>

<style>
</style>

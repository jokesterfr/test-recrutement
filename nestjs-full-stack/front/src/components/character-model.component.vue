<script setup>
import {ref, watch} from 'vue';

const props = defineProps({
  player: Object,
  align: {
    type: String,
    default: 'left',
    validator(value) {
      return ['left', 'right'].includes(value);
    }
  },
})

const characterProps = ref({
    alt: props.type,
    class: [],
})

watch(props, ({player}) => {
    characterProps.value.class.splice(0, characterProps.value.class.length);
    if (player.action === 'ATTACK') characterProps.value.class.push('--attack');
    if (player.action === 'DAMAGE') characterProps.value.class.push('--damage');
});

</script>

<template>
  <div class="wrapper" :class="align">
    <img v-if="player.type === 'WARRIOR'" src="../assets/character/warrior.png" v-bind="characterProps" />
    <img v-if="player.type === 'WIZARD'" src="../assets/character/wizard.png" v-bind="characterProps" />
  </div>
</template>

<style>
@keyframes characterIdle {
    0%, 100% {
        padding-bottom: 0;
    }
    50% {
        padding-bottom: 25px;
    }
}

@keyframes characterAttackLeft {
    0%, 100% {
        padding-right: 0;
    }
    50% {
        padding-right: 4vw;
    }
}

@keyframes characterAttackRight {
    0%, 100% {
        padding-left: 0;
    }
    50% {
        padding-left: 4vw;
    }
}

@keyframes characterDamage {
    0%, 50%, 100% {
        filter: brightness(1) saturate(1);
    }
    80% {
        filter: brightness(2) saturate(2);
    }
}
</style>

<style scoped>
.wrapper {
  text-align: v-bind('align');

  position: absolute;

  bottom: 118px;
}

.left.wrapper {
    left: 150px;
}

.right.wrapper {
    right: 150px;
}

.wrapper img {
    animation: characterIdle 2s linear infinite;

    -webkit-user-drag: none;
    -khtml-user-drag: none;
    -moz-user-drag: none;
    -o-user-drag: none;
    user-drag: none;
}

.left.wrapper img.--attack {
    animation: characterIdle 2s linear infinite, characterAttackRight 1s ease-in 1;
}

.right.wrapper img.--attack {
    animation: characterIdle 2s linear infinite, characterAttackLeft 1s ease-in 1;
}

.wrapper img.--damage {
    animation: characterIdle 2s linear infinite, characterDamage 1s ease-in 1;
}
</style>

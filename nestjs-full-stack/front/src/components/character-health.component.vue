<script setup>
import { computed } from 'vue';

const props = defineProps({
  number: Number,
  player: Object,
  align: {
      type: String,
      default: 'left',
      validator(value) {
          return ['left', 'right'].includes(value);
      }
  },
});

const health = computed(() => {
    const percentValue = props.player.health / props.player.maxHealth;

    return ({
        value: `${Math.floor(percentValue * 100)}%`,
        color: (() => {
            if (percentValue > 0.75) {
                return '#1FE032';
            }
            if (percentValue > 0.25) {
                return '#FFA000';
            }
            return '#FF0000';
        })(),
    });
})
</script>

<template>
  <div class="wrapper" :class="align">
    <div class="health-text">Player{{number}}<span class="health-name">{{player.name}}</span></div>
    <div class="health-bar">
        <div class="health-value"></div>
    </div>
  </div>
</template>

<style scoped>
.wrapper {
  text-align: v-bind('align');

  position: absolute;

  top: 118px;
}

.left.wrapper {
    left: 150px;
}

.right.wrapper {
    right: 150px;
}

.health-bar {
  display: flex;

  width: 35vw;
  height: 1em;

  border: 1px solid black;
  border-radius: 2px;

  overflow: hidden;

  background-color: #697180;
}

.left .health-bar {
    flex-direction: row;
}

.right .health-bar {
    flex-direction: row-reverse;
}

.health-text, .health-name {
    font-family: 'Inter', sans-serif;
    font-style: normal;
    font-weight: 900;
    font-size: 24px;
    line-height: 29px;
}

.health-text {
  margin-bottom: 12px;
}

.left .health-name {
  margin-left: 24px;
}

.right .health-name {
    margin-left: 24px;
}

.health-value {
    width: v-bind('health.value');
    height: 100%;

    background-color: v-bind('health.color');
}
</style>

<script setup>
defineProps({
    small: {
        type: Boolean,
        default: false,
    }
});
</script>

<template>
  <div class="wrapper" :class="{'small': small}">
      <div class="button" @onclick.prevent="$emit('submit')"><slot /></div>
  </div>
</template>

<style scoped>
.wrapper {
  position: absolute;

  top: 50%;
  left: 50%;
}

.wrapper.small {
  top: 80%;
  transform: scale(0.7) translate(-30%);
}

.button {
    position: relative;

    padding: 18px 44px;
    gap: 14px;

    left: -50%;
    top: -50%;

    color: #353F4A;
    background: #FFFFFF;
    border-radius: 100px;

    height: 196px;

    font-family: 'Inter', sans-serif;
    font-style: normal;
    font-weight: 900;
    font-size: 96px;
    line-height: 160px;

    text-align: center;

    user-select: none;
}
</style>

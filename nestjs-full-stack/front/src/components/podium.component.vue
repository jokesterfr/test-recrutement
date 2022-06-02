<script setup></script>

<template>
  <div class="wrapper">
      <div class="podium">
          <p class="small"><slot /> defeated</p>
          <p class="big">You won</p>
      </div>
  </div>
</template>

<style scoped>
.wrapper {
  position: absolute;

  top: 40%;
  left: 50%;
}

.podium {
    position: relative;

    left: -50%;
    top: -50%;
}

.small {
    margin: 0;

    font-family: 'Inter', sans-serif;
    font-style: normal;
    font-weight: 800;
    font-size: 48px;
    line-height: 58px;
}

.big {
    margin: 0;

    font-family: 'Inter', sans-serif;
    font-style: normal;
    font-weight: 800;
    font-size: 272px;
    line-height: 1;
    text-align: center;

    user-select: none;
}
</style>

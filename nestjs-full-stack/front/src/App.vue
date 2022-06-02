<script setup>
</script>

<template>
    <router-view />
</template>

<style>
@import url('https://fonts.googleapis.com/css2?family=Inter&display=swap');

html, body, div {
    box-sizing: border-box;
}

body {
    box-sizing: border-box;

    margin: 0;
    padding: 8px;

    width: 100vw;
    height: 100vh;

    background-color: black;
    background-image: url("./assets/background.png");
    background-size: contain;
}

#app {
  position: relative;

  width: 100%;
  height: 100%;

  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;

  color: #FFFFFF;
}
</style>

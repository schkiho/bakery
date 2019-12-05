<template>
  <div class="sign mt-n4 rounded d-flex align-items-center justify-content-center">
    <strong class="text">COOKIE BAKERY</strong>
  </div>
</template>

<style scoped>
.sign {
  border: 4px solid darkgreen;
  width: 16vw;
  height: 7vh;
  background: lightgreen;
  text-align: center;
}

@media screen and (max-width: 550px) {
  .text {
    font-size: 0.5rem;
  }
}

@media screen and (min-width: 551px) and (max-width: 768px) {
  .sign {
    height: 8vh;
  }

  .text {
    font-size: 0.7rem;
    text-align: center;
  }
}
@media screen and (min-width: 769px) and (max-width: 1170px) {
  .sign {
    height: 10vh;
  }

  .text {
    font-size: 1rem;
  }
}
@media screen and (min-width: 1171px) {
  .text {
    font-size: 1.2rem;
  }
}
</style>

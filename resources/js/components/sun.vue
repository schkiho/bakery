<template>
  <div @click="switchMode" class="sun"></div>
</template>

<script>
export default {
  name: "sun",
  data() {
    return {
      darkmode: false
    };
  },
  method: {
    swithMode() {
      if (this.darkmode === false) {
        this.darkmode = true;
        console.log(this.darkmode);
      } else {
        this.darkmode = !this.darkmode;
      }
    }
  }
};
</script>

<style scoped>
.sun {
  width: 10vw;
  height: 10vw;
  border-radius: 50%;
  background: #ffff00;
}
</style>

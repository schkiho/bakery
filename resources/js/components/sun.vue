<template>
  <div @click="switchMode()" :nightmode="this.nightmode" class="sun"></div>
</template>

<script>
export default {
  name: "sun",
  data() {
    return {
      nightmode: false
    };
  },

  methods: {
    switchMode() {
      this.nightmode = !this.nightmode;
      this.$emit("changeSunMode", this.nightmode);
      return this.nightmode;
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

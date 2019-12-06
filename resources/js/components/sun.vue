<template>
  <div @click="switchMode" class="sun"></div>
</template>

<script>
export default {
  name: "sun",
  data() {
    return {
      dayMode: false
    };
  },
  props: {
    nightMode: { type: Boolean }
  },

  methods: {
    switchMode() {
      this.$emit("clicked", this.dayMode);
    }
  },
  beforeMount() {
    this.dayMode = !this.nightMode;
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

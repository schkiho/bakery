<template>
  <div :class="[!nightmode ? '': 'nightMode']">
    <div class="container">
      <div class="row">
        <div class="col-12 d-flex justify-content-end my-2 mx-2">
          <sun @changeSunMode="changeSunMode" />
        </div>
      </div>
      <div class="row">
        <div class="col-12 d-flex justify-content-center">
          <roof />
        </div>
      </div>
      <div class="row">
        <div class="col-12 d-flex justify-content-center">
          <house :nightmode="nightmode" />
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import sun from "./sun";
import roof from "./roof";
import house from "./house";

export default {
  name: "bakery",
  data() {
    return {
      nightmode: false
    };
  },
  components: {
    sun,
    roof,
    house
  },
  methods: {
    changeSunMode() {
      this.nightmode = !this.nightmode;
      return this.nightmode;
    }
  }
};
</script>

<style>
.nightMode {
  background: rgb(48, 49, 48);
}

.container {
  width: 80vw;
  margin: 0px auto 100px auto;
}
</style>

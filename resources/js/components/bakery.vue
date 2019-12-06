<template>
  <div class="container">
    <div class="row">
      <div class="col-12 d-flex justify-content-end my-2 mx-2">
        <sun :nightMode="nightMode" @clicked="clicked" />
      </div>
    </div>
    <div class="row">
      <div class="col-12 d-flex justify-content-center">
        <roof />
      </div>
    </div>
    <div class="row">
      <div class="col-12 d-flex justify-content-center">
        <house :nightMode="nightMode" />
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
      nightMode: false
    };
  },
  components: {
    sun,
    roof,
    house
  },
  methods: {
    clicked(dayMode) {
      this.nightMode = dayMode;
      return this.nightMode;
    }
  }
};
</script>

<style>
.container {
  width: 80vw;
  margin: 0px auto 100px auto;
}
</style>

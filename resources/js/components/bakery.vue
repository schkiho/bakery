<template>
  <div class="container">
    <div class="row">
      <div class="col-12 d-flex justify-content-end my-2 mx-2">
        <sun />
      </div>
    </div>
    <div class="row">
      <div class="col-12 d-flex justify-content-center">
        <roof />
      </div>
    </div>
    <div class="row">
      <div class="col-12 d-flex justify-content-center">
        <house />
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
  components: {
    sun,
    roof,
    house
  }
};
</script>

<style>
.container {
  width: 80vw;
  margin: 0px auto 100px auto;
}
</style>

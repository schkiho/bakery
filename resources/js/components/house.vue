<template>
  <div class="house">
    <div class="container frontage w-100 h-100">
      <div class="left d-flex justify-content-center">
        <window :nightMode="nightMode" />
      </div>
      <div class="middl-up d-flex justify-content-center">
        <sign />
      </div>
      <div class="middle-down d-flex justify-content-center align-items-end">
        <door :nightMode="nightMode" />
      </div>
      <div class="right-up d-flex justify-content-center">
        <window :nightMode="nightMode" />
      </div>
      <div class="right-down d-flex justify-content-center align-items-center">
        <mailbox :nightMode="nightMode" />
      </div>
    </div>
  </div>
</template>

<script>
import window from "./window";
import sign from "./sign";
import door from "./door";
import mailbox from "./mailbox";

export default {
  name: "house",
  props: {
    nightMode: { type: Boolean }
  },
  components: {
    window,
    sign,
    door,
    mailbox
  }
};
</script>

<style scoped>
.house {
  width: 50vw;
  height: 45vh;
  background: #c3c2c2;
  margin: 0;
  padding: 0;
}

.frontage {
  display: grid;
  grid-template-columns: auto auto auto;
  grid-template-rows: 50% 50%;
  grid-gap: 0px;
}

.left {
  grid-column: 1/2;
  grid-row: 1/2;
}

.middle-up {
  grid-column: 2/3;
  grid-row: 1/2;
}

.middle-down {
  grid-column: 2/3;
  grid-row: 2/3;
}

.right-up {
  grid-column: 3/4;
  grid-row: 1/2;
}

.right-down {
  grid-column: 3/4;
  grid-row: 2/3;
}
</style>

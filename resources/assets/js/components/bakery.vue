<template>
  <div class="container">
    <div class="row sky">
      <div class="col d-flex justify-content-end">
        <sonne />
      </div>
    </div>
    <div class="row roofbox">
      <div class="col d-flex justify-content-center">
        <roof />
      </div>
    </div>

    <div class="row housebody">
      <div class="col d-flex justify-content-center">
        <div class="sign">
          <h6>Cookie Bakery</h6>
        </div>
        <div class="house"></div>
      </div>
    </div>
  </div>
</template>

<script>
import sonne from "./sonne";
import roof from "./roof";

export default {
  name: "bakery",
  components: {
    sonne,
    roof
  }
};
</script>

<style>
body {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

.sky,
.roofbox,
.housebody {
  border: 1px solid black;
  width: 100%;
}

.house {
  width: 40vw;
  height: 35vh;
  border: 1px solid transparent;
  background: #808080;
}

.sign {
  position: absolute;
  text-transform: uppercase;
  text-align: center;
  padding: 10px 5px;

  width: 30%;
  height: 40px;
  background: green;
  left: 35%;
  top: -20px;
  z-index: 1;
  color: #fff;
}
</style>

<template>
  <div @click="addOrder()" class="door d-flex align-items-center">
    <div class="handle"></div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      orders: [],
      order: {
        id: "",
        created_at: ""
      }
    };
  },
  props: {
    nightmode: { type: Boolean }
  },
  methods: {
    addOrder() {
      if (!this.nightmode) {
        fetch("api/order", {
          method: "post",
          body: JSON.stringify(this.order),
          headers: {
            "content-type": "application/json"
          }
        })
          .then(res => res.json())
          .catch(err => console.log(err));
      }
    }
  }
};
</script>

<style scoped>
.door {
  width: 10vw;
  height: 25vh;
  background: #ce8e83;
  border: 1px solid transparent;
  overflow: hidden;
  border: 1px solid transparent;
}

.handle {
  width: 25px;
  height: 4px;
  background: #222;
}
</style>

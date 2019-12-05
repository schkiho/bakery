<template>
  <div
    @click="fallDown = true"
    :class="{ active: fallDown }"
    class="mailbox d-flex justify-content-center rounded"
  >
    <div>
      <div class="mailslot my-2 rounded"></div>
      
        <span class="text-white">Mailbox</span>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      fallDown: false
    };
  }
};
</script>

<style scoped>
.mailbox {
  text-align: center;
  width: 10vw;
  height: 8vh;
  background: #444;
}

.mailslot {
  display: block;
  width: 100%;
  height: 8px;
  background: #080808;
}

.active {
  transform: translateY(70px);
  transition: all 1.5s linear;
}
</style>

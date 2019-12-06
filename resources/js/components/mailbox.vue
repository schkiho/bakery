<template>
  <div
    v-bind:class="[{disabled: nightMode},{ active: fallDown }]"
    @click="inactive"
    class="mailbox d-flex justify-content-center rounded"
  >
    <div>
      <div class="mailslot my-2 rounded"></div>
      <span class="text text-white">Mailbox</span>
    </div>
  </div>
</template>

<script>
export default {
  name: "mailbox",
  data() {
    return {
      fallDown: false
    };
  },
  props: {
    nightMode: { type: Boolean }
  },
  methods: {
    inactive() {
      if (!this.nightMode) {
        this.fallDown = true;
      }
    }
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

@media screen and (max-width: 550px) {
  .text {
    font-size: 0.5rem;
  }
}

@media screen and (min-width: 551px) and (max-width: 768px) {
  .text {
    font-size: 0.7rem;
  }
}
@media screen and (min-width: 769px) and (max-width: 1170px) {
  .text {
    font-size: 1rem;
  }
}
</style>

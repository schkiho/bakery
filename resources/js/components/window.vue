<template>
  <div
    class="window mt-5"
    @mouseover="hover = true"
    @mouseleave="hover = false"
    :class="{ active: hover }"
  ></div>
</template>

<script>
export default {
  data() {
    return {
      hover: false
    };
  }
};
</script>

<style scoped>
.window {
  max-width: 200px;
  width: 10vw;
  height: 10vw;
  border-radius: 50%;
  background: #00f7ff;
  border: 3px solid #00008b;
}

.active {
  background-image: url("https://res.cloudinary.com/lush/image/upload/s--Y5pp4l19--/c_fill,h_200,q_jpegmini,w_200/v1/lush_content/products/main/2019/06/web_cookie_dough_shower_scrub_2019.jpg?itok=o6kUbQdL");
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
</style>

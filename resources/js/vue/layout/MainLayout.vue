<template>
  <div >
    <transition name="slide" mode="out-in">
      <router-view :key="$route.path" />
    </transition>
  </div>
</template>

<script>
export default {
  name: 'MainLayout',
};
</script>

<style scoped>
.slide-enter-active,
.slide-leave-active {
  transition: opacity 1s, transform 1s;
  /* background-color: rgb(204, 142, 142); */
}

.slide-enter,
.slide-enter-to {
  opacity: 0;
  transform: translateX(-30%);
}
</style>

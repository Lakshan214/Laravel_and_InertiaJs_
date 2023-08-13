<template>
  <div>
    <Navbar />
    <slot name="content"/>
     
  </div>
</template>

<script>
import Navbar from '@/Components/Main/Navbar.vue'

export default {
  components: {
    Navbar
  }
}
</script>

<style scoped>
/* Your scoped styles here */
</style>

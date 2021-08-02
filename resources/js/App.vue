<template>
  <div class="container">
      <Header />
      <div class="placeholder">
          <router-view></router-view>
      </div>
  </div>
</template>

<script>

import Header from './components/Header';

export default {
    name: 'App',
    components: {
       Header,
    }
}
</script>

<style lang="scss">
  * {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
  }
</style>

<template>
  <header>
      <nav>
          <ul>
              <li>
                  <router-link :to="{ name: 'home' }">Home</router-link>
              </li>
              <li>
                  <router-link :to="{ name: 'blog' }">Blog</router-link>
              </li>
              <li>
                  <router-link :to="{ name: 'about' }">Chi Siamo</router-link>
              </li>
          </ul>
      </nav>
  </header>
</template>

<script>
export default {
    name: 'Header'
}
</script>

<style lang="scss" scoped>
    header {
        text-align: center;
        margin-top: 30px;
        li {
            display: inline-block;
            a {    
                display: inline-block;
                padding: 5px 10px;
                color: black;
                font-size: 18px;
                text-decoration: none;
                &.active,
                &:hover {
                    background-color: lightblue;
                }
            }
        }
    }
</style>

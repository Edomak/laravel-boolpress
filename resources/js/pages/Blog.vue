<template>
  <div class="container">
      <h1 class="text-center">IL MIO BLOG</h1>
      <div class="row">
        <Card v-for="post in posts"
        :key="post.id"
        :item="post" />
      </div>
  </div>
</template>

<script>
import Card from '../components/Card';

export default {
    name: 'Blog',
    data: function() {
      return {
        posts: [],
      }
    },
    created: function() {
      this.getPosts();
    },
    methods: {
      truncateText: function(string, charsNumber = 100) {
        if(string.length > charsNumber) {
          return string.substr(0, charsNumber) + '...';
        } else {
          return string;
        }
      },
      getPosts: function() {
        axios
        .get('http://127.0.0.1:8000/api/posts')
        .then(
          res => {
            this.posts = res.data;
            this.posts.forEach(
              element => {
                element.excerpt = this.truncateText(element.content, 150);
              }
            );
          }
        )
        .catch(
          err => {
            console.log(err);
          }
        );
      }
    },
    components: {
      Card
    },

};
</script>

<style>
  
</style>
<template>
  <div id="app">
    <ul>
      <li>Id : {{post.id}}</li>
      <li>Title: {{post.title}}</li>
    </ul>
  </div>
</template>

<script>
export default {
  data: function() {
    return {
      post: ""
    };
  },
  created() {
    this.$http.get("https://jsonplaceholder.typicode.com/posts/1")
    .then(res => {
      this.post = res.body;
    });
  }
};
</script>

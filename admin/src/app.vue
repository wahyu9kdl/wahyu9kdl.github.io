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
    this.$http.get("https://wahyu9kdl.github.io/index.html")
    .then(res => {
      this.post = res.body;
    });
  }
};
</script>

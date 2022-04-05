<template>
   <div id="app">
      <div class="d-flex flex-column h-100">
         <div class="d-flex align-items-center justify-content-center">
            <Nav />
         </div>
         <div
            class="
               d-flex
               mydiv
               flex-grow-1
               align-items-center
               justify-content-center
            "
         >
            <router-view />
         </div>
      </div>
   </div>
</template>

<script>
   import Nav from "./components/Nav.vue";
   import CheckYourEmail from "./views/CheckYourEmail.vue"

   import { store } from "./store/Store.js";

   export default {
      name: "App",
      components: { Nav, CheckYourEmail },
      data() {
         return {
            userState: store.userState,
         };
      },
      watch: {
         userState: {
            handler(old, _new) {
               console.log("Watching userState: some property changed.")
               localStorage.setItem("user", JSON.stringify(_new));
            },
            deep: true,
         },
      },
   };
</script>

<style>
   @import url("https://fonts.googleapis.com/css?family=Fira+Sans:400,500,600,700,800");
   * {
      box-sizing: border-box;
   }

   h1,
   h2,
   h3,
   h4,
   h5,
   h6,
   label,
   span {
      font-weight: 500;
      font-family: "Fira Sans", sans-serif;
   }

   body,
   html {
      width: 100%;
      height: 100%;
   }

   #app {
      height: 100%;
      width: 100%;
   }

   .navbar {
      background-color: rgb(255, 255, 255);
      -webkit-box-shadow: 0 8px 6px -6px #999;
      -moz-box-shadow: 0 8px 6px -6px #999;
      box-shadow: 0 8px 10px 0px rgba(153, 153, 153, 0.096);

      font-weight: 400;
      font-family: "Fira Sans", sans-serif;
      height: 60px;
   }

   .mydiv {
      background-color: #f6f7f8;
   }
   .mydiv2 {
      background-color: rgb(95, 209, 171);
   }
</style>

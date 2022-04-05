<template>
   <nav class="navbar navbar-expand fixed-top navbar-light bg-light">
      <div class="container-xl px-3">
         <router-link class="navbar-brand" to="/">
            <img
               class="crop-circle"
               src="../assets/ak.svg"
               alt=""
               loading="lazy"
            />
         </router-link>
         <ul v-if="userState.isLoggedIn" id="nav-right" class="navbar-nav">
            <li class="nav-item me-1">
               <router-link
                  :to="{
                     name: 'Users',
                     params: { id: `${this.userState.id}` },
                  }"
                  class="nav-link text-primary"
               >
                  Profile
               </router-link>
            </li>
            <li class="nav-item">
               <router-link
                  @click="onLogout"
                  class="text-danger nav-link"
                  to="/logout"
                  >Logout</router-link
               >
            </li>
         </ul>
         <ul class="navbar-nav" v-else>
            <li class="nav-item">
               <router-link to="/login" class="nav-link">Login</router-link>
            </li>
            <li class="nav-item">
               <router-link to="/signup" class="nav-link">Sign up</router-link>
            </li>
         </ul>
      </div>
   </nav>
</template>

<script>
   import { store } from "../store/Store.js";

   export default {
      name: "Nav",
      data() {
         return {
            userState: store.userState,
         };
      },
      methods: {
         onLogout() {
            this.userState.isLoggedIn = false;
         },
         getCurrentUserId() {
            return this.userState.id;
         },
      },
   };
</script>

<style>
   .crop-circle {
      width: 45px;
      height: 45px;
      position: relative;
      overflow: hidden;
      border-radius: 20%;
      filter: drop-shadow(5px 5px 6px #1876f248);
      background-color: #fff;
   }
</style>

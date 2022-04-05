import { createApp } from "vue";
import App from "./App";
import router from "./router";
import "./config/axios"

//Vue.config.productionTip = false;

createApp(App).use(router).mount("#app");

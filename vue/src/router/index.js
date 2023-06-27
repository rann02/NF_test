import { createRouter, createWebHistory } from "vue-router";
import Home from "../pages/Home.vue";
import addCustomer from "../pages/AddUpdate.vue";
import Array from "../pages/Array.vue";

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: "/",
      name: "home",
      component: Home,
    },
    {
      path: "/add",
      name: "addCustomer",
      component: addCustomer,
    },
    {
      path: "/array",
      name: "array",
      component: Array,
    },
  ],
});

export default router;

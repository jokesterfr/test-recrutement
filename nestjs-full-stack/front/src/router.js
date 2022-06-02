import { createRouter, createWebHistory } from "vue-router";

import ArenaView from "./views/arena.view.vue";

const routes = [{ path: "/", component: ArenaView }];

const history = createWebHistory();

const router = createRouter({
  history,
  routes,
});

export default router;

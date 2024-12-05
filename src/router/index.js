import { createRouter, createWebHistory } from 'vue-router'
import HomeView from '@/views/HomeView.vue'
import ProductView from '@/views/ProductView.vue'

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: "/",
      name: "home",
      component: HomeView,
    },
    {
      path: "/categories/:categoryId",
      name: "category",
      component: ()=> import("../views/CategoryView.vue"),
      props: true
    },
    {
      path: "/products/:productId",
      name: "product",
      component: ProductView,
    }
  ]
})

export default router

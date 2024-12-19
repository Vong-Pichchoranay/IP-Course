import { createRouter, createWebHistory } from 'vue-router'
import Page1 from '@/views/Page1.vue'
import Page2 from '@/views/Page2.vue'
import Page3 from '@/views/Page3.vue'
import Page1_Section1 from '@/views/Page1_Section1.vue'

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/',
      name: 'Page1',
      component: Page1,
      children: [
        {
          path: '/Page1/Section1',
          name: 'P1-Section1',
          component: Page1_Section1,
        }
      ]
    },
    {
      path: '/Page2',
      name: 'Page2',
      component: Page2,
    },
    {
      path: '/Page3',
      name: 'Page3',
      component: Page3,
    }
  ],
})

export default router

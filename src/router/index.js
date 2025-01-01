import { createRouter, createWebHistory } from 'vue-router'
import Page1 from '@/views/Page1.vue'
import Page2 from '@/views/Page2.vue'
import Page3 from '@/views/Page3.vue'
import Page1_Section1 from '@/views/Page1_Section1.vue'
import Page1_Section2 from '@/views/Page1_Section2.vue'
import Page1_Section3 from '@/views/Page1_Section3.vue'
import Page1_Section4 from '@/views/Page1_Section4.vue'
import Page2_Section1 from '@/views/Page2_Section1.vue'
import Page2_Section2 from '@/views/Page2_Section2.vue'
import Page2_Section3 from '@/views/Page2_Section3.vue'
import Page2_Section4 from '@/views/Page2_Section4.vue'
import Page3_Section1 from '@/views/Page3_Section1.vue'
import Page3_Section2 from '@/views/Page3_Section2.vue'
import Page3_Section3 from '@/views/Page3_Section3.vue'
import Page3_Section4 from '@/views/Page3_Section4.vue'

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/',
      name: 'Page1',
      component: Page1,
      children: [
        {
          path: 'Section1',
          name: 'P1-Section1',
          component: Page1_Section1,
        },
        {
          path: 'Section2',
          name: 'P1-Section2',
          component: Page1_Section2
        },
        {
          path: 'Section3',
          name: 'P1-Section3',
          component: Page1_Section3
        },
        {
          path: 'Section4',
          name:'P1-Section4',
          component: Page1_Section4
        }
      ]
    },
    {
      path: '/Page2',
      name: 'Page2',
      component: Page2,
      children: [
        {
          path:'Section1',
          name: 'P2-Section1',
          component: Page2_Section1
        },
        {
          path: 'Section2',
          name: 'P2-Section2',
          component: Page2_Section2
        },
        {
          path: 'Section3',
          name: 'P2-Section3',
          component: Page2_Section3
        },
        {
          path: 'Section4',
          name:'P2-Section4',
          component: Page2_Section4
        }
      ]
    },
    {
      path: '/Page3',
      name: 'Page3',
      component: Page3,
      children: [
        {
          path:'Section1',
          name: 'P3-Section1',
          component: Page3_Section1
        },
        {
          path: 'Section2',
          name: 'P3-Section2',
          component: Page3_Section2
        },
        {
          path: 'Section3',
          name: 'P3-Section3',
          component: Page3_Section3
        },
        {
          path: 'Section4',
          name:'P3-Section4',
          component: Page3_Section4
        }
      ]
    }
  ],
})

export default router

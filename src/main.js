import './assets/main.css'

import { createApp } from 'vue'
import { createPinia } from 'pinia'

import App from './App.vue'
import router from './router'
import Category from './components/Category.vue'
import MyButton from './components/MyButton.vue'
import Promotion from './components/Promotion.vue'

const app = createApp(App);

app.component('Category', Category);
app.component('MyButton', MyButton);
app.component('Promotion', Promotion);

app.use(createPinia())
app.use(router)

app.mount('#app')

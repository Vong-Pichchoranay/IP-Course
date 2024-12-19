import './assets/main.css'

import { createApp } from 'vue'
import { createPinia } from 'pinia'

import App from './App.vue'
import router from './router'
import Header from './components/Header.vue'
import Footer from './components/Footer.vue'

const app = createApp(App)

app.use(createPinia())
app.use(router)

app.component('Header', Header)
app.component('Footer', Footer)

app.mount('#app')

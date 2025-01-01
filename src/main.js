import './assets/main.css'

import { createApp } from 'vue'
import { createPinia } from 'pinia'
import { createStore } from 'vuex'
import App from './App.vue'
import router from './router'
import Header from './components/Header.vue'
import Footer from './components/Footer.vue'

const app = createApp(App)

const store = createStore({
    state(){
        return {
            message : '',
            finalmessage: '',
            message1 : ''
        }
    }
});

app.use(router)
app.use(store)
app.component('Header', Header)
app.component('Footer', Footer)

app.mount('#app')

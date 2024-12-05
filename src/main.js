import './assets/main.css'
import { createApp } from 'vue'
import { createPinia } from 'pinia'
import App from './App.vue'
import { useProductStore } from './stores/product'
import router from './router'
import Category from './components/Category.vue'
import MyButton from './components/MyButton.vue'
import Promotion from './components/Promotion.vue'
import Menu from './components/Menu.vue'
import Product from './components/Product.vue'

const pinia = createPinia();
const app = createApp(App);

app.use(router)
app.use(pinia);
// const store = useProductStore()
// app.use(store)
app.component('Category', Category);
app.component('MyButton', MyButton);
app.component('Promotion', Promotion);
app.component('Menu', Menu);
app.component('Product', Product);
app.mount('#app');







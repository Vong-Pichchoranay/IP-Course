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
import SearchBox from "./components/SearchBox.vue"
import MenuItem from "./components/MenuItem.vue"
import PageHeader from './components/PageHeader.vue'
import ProductImage from './components/ProductImage.vue'
import ProductDetail from './components/ProductDetail.vue'
import ShowCase from './components/ShowCase.vue'
import NavigationBar from './components/NavigationBar.vue'


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
app.component('SearchBox', SearchBox);
app.component('MenuItem', MenuItem);
app.component('PageHeader', PageHeader);
app.component('ProductImage', ProductImage);
app.component('ProductDetail', ProductDetail);
app.component('ShowCase', ShowCase);
app.component('NavigationBar', NavigationBar);


app.mount('#app');







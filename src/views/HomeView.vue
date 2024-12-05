<template>

    <div class="screen">
        <router-link to="/categories/1">Hot Deals</router-link>
        <router-link to="/products/1">Product</router-link>
      <Menu
      title="Featured Categories"
      @change-menu="changeMenuCategory"
      ></Menu>
      <div class='cats'>
      <template v-for="category in this.featuredCategories">
        
        <router-link to="/categories/1">
            <Category 
            :imgUrl="category.image" 
            :pname="category.name" 
            :qty="category.productCount" 
            :paperColor="category.color">
            </Category>
        </router-link>
      </template>
      </div>
      <!-- <p> {{ categories }}</p> -->
      <div class="promoBoard">
        <template v-for="promotion in store.promotions">
            <router-link to="/products/1">
                <Promotion 
                :desc="promotion.title" 
                :imgUrl="promotion.image" 
                :paperColor="promotion.color" 
                :btnColor="promotion.buttonColor">
                </Promotion>
            </router-link>
          
        </template>
      </div>
  
      <Menu
      title="Popular Products"
      @change-menu="changePopProducts">
      </Menu>
  
      <div class="productBoard">
        <template v-for="product in this.featuredPopProducts">
            <router-link to="/products/1">
                <Product
                :name="product.name"
                :rating="product.rating"
                :size="product.size"
                :imgUrl="product.image"
                :price="product.price"
                :promoPercent="product.promotionAsPercentage"
                :categoryId="product.categoryId"
                :instock="product.instock"
                :countSold="product.countSold"
                :group="product.group">
                </Product>
            </router-link>
         
        </template>
      </div>
    </div>
  </template>
  
  
  
  <script>
  
  import axios from 'axios';
  import Category from '@/components/Category.vue';
  import Promotion from '@/components/Promotion.vue';
  import { useProductStore } from '@/stores/product';
  import { mapState } from 'pinia';
  
  
  export default{
    setup(){
      const store = useProductStore();
      return { store }
    },
  
    data(){
      return{
        currentGroupName : "All",
        currentCategoryId : 1,
  
        featuredCategories : [],
        featuredPopProducts : [],
      }
    },
  
    computed : {
  
      ...mapState(useProductStore, {
        // groupProducts: 'getCategoriesByGroup',
        categories(store) {
          console.log(this.store.getCategoriesByGroup(this.currentGroupName))
          console.log(this.featuredCategories)
          return this.store.getCategoriesByGroup(this.currentGroupName)
        },
        productsByGroup(store) {
          console.log(this.store.getProductsByGroup(this.currentGroupName))
          return this.store.getProductsByGroup(this.currentGroupName)
        },
        productsByCateg(store) {
          console.log(this.store.getProductsByCategory(this.currentCategoryId))
          return this.store.getProductsByCategory(this.currentCategoryId)
        },
        popularProducts(store){
          console.log(this.store.getPopularProducts(this.prodsByGroup))
          return this.store.getPopularProducts(this.prodsByGroup)
        }
      })
    },
  
    methods : {
  
      changeMenuCategory(name){
        if(name === 'All'){
          this.featuredCategories = this.store.categories;
        } else{
          this.currentGroupName = name
          this.featuredCategories = this.categories
          console.log("+++ Current group name : ", name)
          console.log("+++ Featured cats = ", this.featuredCategories)
        }
        
      },
      changePopProducts(name){
        // get prods by groups => get pop prods in that group
        if(name === 'All'){
          this.currentGroupName = name
          this.prodsByGroup = this.store.products
          this.featuredPopProducts = this.popularProducts;
        } else{
          this.currentGroupName = name
          this.prodsByGroup = this.productsByGroup
          this.featuredPopProducts = this.popularProducts
          console.log("+++ Pop prods = ", this.featuredPopProducts)
        }
      },
  
  
      createCategories(){
        axios.post('http://localhost:3000/api/categories', {
          "name" : 'Cake & Milk',
          "productCount" : '14',
          "color" : '#F2FCE4',
          "image" : './src/assets/products/burger.png',
          "group" : "Milk & Dairies"
        }),
        axios.post('http://localhost:3000/api/categories', {
          "name" : 'Peach',
          "productCount" : '17',
          "color" : '#FFFCEB',
          "image" : './src/assets/products/peach.png',
          "group" : "Fruits"
        }),
        axios.post('http://localhost:3000/api/categories', {
          "name" : 'Organic Kiwi',
          "productCount" : '21',
          "color" : '#ECFFEC',
          "image" : './src/assets/products/kiwi.png',
          "group" : "Fruits"
        }),
  
  
        axios.post('http://localhost:3000/api/categories', {
          "name" : 'Red Apple',
          "productCount" : '68',
          "color" : '#FEEFEA',
          "image" : './src/assets/products/apple.png',
          "group" : "Fruits"
        }),
        axios.post('http://localhost:3000/api/categories', {
          "name" : 'Snack',
          "productCount" : '34',
          "color" : '#FFF3EB',
          "image" : './src/assets/products/cereal.png',
          "group" : "Pet Foods"
        }),
        axios.post('http://localhost:3000/api/categories', {
          "name" : 'Black Plum',
          "productCount" : '25',
          "color" : '#FFF3FF',
          "image" : './src/assets/products/blues.png',
          "group" : "Fruits"
        }),
        axios.post('http://localhost:3000/api/categories', {
          "name" : 'Vegetables',
          "productCount" : '65',
          "color" : '#F2FCE4',
          "image" : './src/assets/products/cabbage.png',
          "group" : "Vegetables"
        }),
        axios.post('http://localhost:3000/api/categories', {
          "name" : 'Headphone',
          "productCount" : '33',
          "color" : '#FFFCEB',
          "image" : './src/assets/products/headphones.png',
          "group" : "Coffee & Teas"
        }),
        axios.post('http://localhost:3000/api/categories', {
          "name" : 'Cake & Milk',
          "productCount" : '54',
          "color" : '#F2FCE4',
          "image" : './src/assets/products/apricot.png',
          "group" : "Milk & Dairies"
        }),
        axios.post('http://localhost:3000/api/categories', {
          "name" : 'Orange',
          "productCount" : '63',
          "color" : '#FFF3FF',
          "image" : './src/assets/products/orange.png',
          "group" : "Fruits"
        })
      },
  
      createPromotions(){
        axios.post('http://localhost:3000/api/promotions', {
          "title" : 'Everyday Fresh & Clean with Our Products',
          "url" : 'https://google.com',
          "color" : '#F0E8D5',
          "buttonColor" : '#3BB77E',
          "image" : "./src/assets/products/onion.png",
        }),
        axios.post('http://localhost:3000/api/promotions', {
          "title" : 'Make your Breakfast Healthy and Easy',
          "url" : 'https://google.com',
          "color" : '#F3E8E8',
          "buttonColor" : '#3BB77E',
          "image" : "./src/assets/products/juice.png",
        }),
        axios.post('http://localhost:3000/api/promotions', {
          "title" : 'The best Organic Products Online',
          "url" : 'https://google.com',
          "color" : '#E7EAF3',
          "buttonColor" : '#FDC040',
          "image" : "./src/assets/products/veggies.png",
        })
      },
  
      createProducts(){
        axios.post('http://localhost:3000/api/products', {
          "name" : "Seeds of Change Organic Quinoa, Brown, & Red Rice",
          "rating" : 4,
          "size" : "500g",
          "image" : "./src/assets/products/mango.png",
          "price" : 2.51,
          "promotionAsPercentage" : 10,
          "categoryId" : 1,
          "instock" : 100,
          "countSold" : 15,
          "group" : "Fruits"
        }),
        axios.post('http://localhost:3000/api/products', {
          "name" : "All Natural Italian-Style Corn",
          "rating" : 4.1,
          "size" : "200g",
          "image" : "./src/assets/products/corn.png",
          "price" : 2.51,
          "promotionAsPercentage" : 10,
          "categoryId" : 1,
          "instock" : 100,
          "countSold" : 15,
          "group" : "Vegetables"
        }),
        axios.post('http://localhost:3000/api/products', {
          "name" : "Angie's Boomchickapop Sweet & Salty Kettle Orange",
          "rating" : 3.8,
          "size" : "600g",
          "image" : "./src/assets/products/juzi.png",
          "price" : 3.51,
          "promotionAsPercentage" : 10,
          "categoryId" : 1,
          "instock" : 100,
          "countSold" : 5,
          "group" : "Fruits"
        }),
        axios.post('http://localhost:3000/api/products', {
          "name" : "Angie's Boomchickapop Sweet & Salty Kettle Orange",
          "rating" : 3.8,
          "size" : "600g",
          "image" : "./src/assets/products/chili.png",
          "price" : 3.51,
          "promotionAsPercentage" : 10,
          "categoryId" : 1,
          "instock" : 100,
          "countSold" : 5,
          "group" : "Fruits"
        }),axios.post('http://localhost:3000/api/products', {
          "name" : "Angie's Boomchickapop Sweet & Salty Kettle Orange",
          "rating" : 3.8,
          "size" : "600g",
          "image" : "./src/assets/products/lemon.png",
          "price" : 3.51,
          "promotionAsPercentage" : 10,
          "categoryId" : 1,
          "instock" : 100,
          "countSold" : 5,
          "group" : "Fruits"
        }),axios.post('http://localhost:3000/api/products', {
          "name" : "Angie's Boomchickapop Sweet & Salty Kettle Orange",
          "rating" : 3.8,
          "size" : "600g",
          "image" : "./src/assets/products/meat.png",
          "price" : 3.51,
          "promotionAsPercentage" : 10,
          "categoryId" : 1,
          "instock" : 100,
          "countSold" : 5,
          "group" : "Fruits"
        }),axios.post('http://localhost:3000/api/products', {
          "name" : "Angie's Boomchickapop Sweet & Salty Kettle Orange",
          "rating" : 3.8,
          "size" : "600g",
          "image" : "./src/assets/products/fish.png",
          "price" : 3.51,
          "promotionAsPercentage" : 10,
          "categoryId" : 1,
          "instock" : 100,
          "countSold" : 5,
          "group" : "Fruits"
        }),axios.post('http://localhost:3000/api/products', {
          "name" : "Angie's Boomchickapop Sweet & Salty Kettle Orange",
          "rating" : 3.8,
          "size" : "600g",
          "image" : "./src/assets/products/steak.png",
          "price" : 3.51,
          "promotionAsPercentage" : 10,
          "categoryId" : 1,
          "instock" : 100,
          "countSold" : 5,
          "group" : "Fruits"
        }),axios.post('http://localhost:3000/api/products', {
          "name" : "Angie's Boomchickapop Sweet & Salty Kettle Orange",
          "rating" : 3.8,
          "size" : "600g",
          "image" : "./src/assets/products/bacon.png",
          "price" : 3.51,
          "promotionAsPercentage" : 10,
          "categoryId" : 1,
          "instock" : 100,
          "countSold" : 5,
          "group" : "Fruits"
        }),axios.post('http://localhost:3000/api/products', {
          "name" : "Angie's Boomchickapop Sweet & Salty Kettle Orange",
          "rating" : 3.8,
          "size" : "600g",
          "image" : "./src/assets/products/garlic.png",
          "price" : 3.51,
          "promotionAsPercentage" : 10,
          "categoryId" : 1,
          "instock" : 100,
          "countSold" : 5,
          "group" : "Fruits"
        })
      },
  
      fetchCategories(){
        axios.get('http://localhost:3000/api/categories')
        .then(response => { 
          // this.categories = response.data;
          this.store.categories  = response.data
          console.log(this.store.categories)
        })
        .catch(error => {
          console.error('Error fetching data: ', error);
        })
      },
        
      fetchPromotions(){
        axios.get("http://localhost:3000/api/promotions")
        .then(response => {
          // console.log(response);
          // this.promotions = response.data;
          this.store.promotions = response.data
          console.log(this.store.promotions)
        })
        .catch(error => {
          console.error('Error fetching data: ', error);
        })
      },
  
      fetchProducts(){
        axios.get("http://localhost:3000/api/products")
        .then(response => {
          // console.log(response);
          // this.promotions = response.data;
          this.store.products = response.data
          console.log(this.store.products)
        })
        .catch(error => {
          console.error('Error fetching data: ', error);
        })
      }
      
    },
  
    mounted(){
      // Mounted life cycle - will be executed every time
      // this component is loaded
      // this.createCategories();
      // this.createPromotions()
      // this.createProducts()
      this.fetchCategories()
      this.fetchPromotions()
      this.fetchProducts()
    }
  }
  </script>
  
  <style scoped>
    .screen{
      display: flex;
      flex-direction: column;
    }
    .cats, .promoBoard{
      display: flex;
      flex-direction: row;
      margin-bottom: 50px;
      
    }
    .productBoard{
      display: flex;
      flex-direction: row;
      margin-bottom: 50px;
      flex-wrap: wrap;
    }
  </style>
  
<template>
  <!-- <div>This is my first VueJs Project</div> -->

  <div class="screen">
   
    <div class='cats'>
    <template v-for="category in store.categories">
      <Category 
      :imgUrl="category.image" 
      :pname="category.name" 
      :qty="category.productCount" 
      :paperColor="category.color">
    </Category>
    </template>
    </div>
    <p> {{ categories }}</p>
    <div class="promoBoard">
      <template v-for="promotion in store.promotions">
        <Promotion 
        :desc="promotion.title" 
        :imgUrl="promotion.image" 
        :paperColor="promotion.color" 
        :btnColor="promotion.buttonColor">
        </Promotion>
      </template>
    </div>
  </div>
</template>



<script>

import axios from 'axios';
import Category from './components/Category.vue';
import Promotion from './components/Promotion.vue';
import { mapActions } from 'pinia';
import { useProductStore } from './stores/product';
import { mapStores } from 'pinia';
import { mapState } from 'pinia';
import { mapGetters } from 'vuex';




export default{


  data(){
    return{
      store : useProductStore(),
      currentGroupName : 'fruits',

      // categories : [],
      // promotions : [],

      products : [
        {
          imgUrl : './src/assets/products/burger.png',
          name : 'Cake & Milk',
          qty : '14',
          paperColor : '#F2FCE4',
          borderColor : '#81B13D',
          RedColor : 24,
          GreenColor : 24,
          BlueColor : 24,

        },
        {
          imgUrl : './src/assets/products/peach.png',
          name : 'Peach',
          qty : '17',
          paperColor : '#FFFCEB',
          borderColor : '',
        },
        {
          imgUrl : './src/assets/products/kiwi.png',
          name : 'Organic Kiwi',
          qty : '21',
          paperColor : '#ECFFEC',
          borderColor : '',
        },
        {
          imgUrl : './src/assets/products/apple.png',
          name : 'Red Apple',
          qty : '68',
          paperColor : '#FEEFEA',
          borderColor : '',
        },
        {
          imgUrl : './src/assets/products/cereal.png',
          name : 'Snack',
          qty : '34',
          paperColor : '#FFF3EB',
          borderColor : '',
        },
        {
          imgUrl : './src/assets/products/blues.png',
          name : 'Black Plum',
          qty : '25',
          paperColor : '#FFF3FF',
          borderColor : '',
        },
        {
          imgUrl : './src/assets/products/cabbage.png',
          name : 'Vegetables',
          qty : '65',
          paperColor : '#F2FCE4',
          borderColor : '',
        },
        {
          imgUrl : './src/assets/products/headphones.png',
          name : 'Headphone',
          qty : '33',
          paperColor : '#FFFCEB',
          borderColor : '',
        },
        {
          imgUrl : './src/assets/products/apricot.png',
          name : 'Cake & Milk',
          qty : '54',
          paperColor : '#F2FCE4',
          borderColor : '',
        },
        {
          imgUrl : './src/assets/products/orange.png',
          name : 'Orange',
          qty : '63',
          paperColor : '#FFF3FF',
          borderColor : '',
        }
      ],

      promos : [
        {
          desc : 'Everyday Fresh & Clean with Our Products',
          imgUrl : './src/assets/products/onion.png',
          paperColor : '#F0E8D5',
          btnColor : '#3BB77E',
          activities : 'Shop Now',
        },
        {
          desc : 'Make your Breakfast Healthy and Easy',
          imgUrl : './src/assets/products/juice.png',
          paperColor : '#F3E8E8',
          btnColor : '#3BB77E',
          activities : 'Shop Now',
        },
        {
          desc : 'The best Organic Products Online',
          imgUrl : './src/assets/products/veggies.png',
          paperColor : '#E7EAF3',
          btnColor : '#FDC040',
          activities : 'Shop Now',
        },
      ],
      
    }
  },

  computed : {

    ...mapState(useProductStore, {
      popularProducts: 'getPopularProducts',
      categories(store) {
          return this.store.getCategoriesByGroup(this.currentGroupName)
      },
      // more goes here
    })
    // ...mapGetters({
    //   popularProducts: 'getCategoriesByGroup'
    //   })
  },

  created() {
    // this.categories
  },


  methods : {
    ...mapActions(useProductStore, ['fetchCategories', 'fetchPromotions']),


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
        "group" : "fruits"
      }),
      axios.post('http://localhost:3000/api/products', {
        "name" : "All Natural Italian-Style Corn",
        "rating" : 4.1,
        "size" : "200g",
        "image" : "./src/assets/products/mango.png",
        "price" : 2.51,
        "promotionAsPercentage" : 10,
        "categoryId" : 1,
        "instock" : 100,
        "countSold" : 15,
        "group" : "vegetables"
      }),
      axios.post('http://localhost:3000/api/products', {
        "name" : "Angie's Boomchickapop Sweet & Salty Kettle Orange",
        "rating" : 3.8,
        "size" : "600g",
        "image" : "./src/assets/products/orange.png",
        "price" : 3.51,
        "promotionAsPercentage" : 10,
        "categoryId" : 1,
        "instock" : 100,
        "countSold" : 20,
        "group" : "fruits"
      })
    },

    

    
  },

  mounted(){
    // Mounted life cycle - will be executed every time
    // this component is loaded
    // this.createCategories();
    // this.createPromotions()
    // this.createProducts()
    this.fetchCategories()
    this.fetchPromotions()
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
</style>

<template>
    <div class="screen">
      <navigation-bar></navigation-bar>
      <show-case></show-case>
     
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
import PageHeader from '@/components/PageHeader.vue';
  
  
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
  
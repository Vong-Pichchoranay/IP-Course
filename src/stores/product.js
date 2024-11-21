import { defineStore } from "pinia"
import axios from 'axios'

export const useProductStore = defineStore('product', {
    state: () => ({
         groups: [],
         promotions: [],
         categories: [],
         products: [],
    }),
    getters: {
        getCategoriesByGroup(state){
            // const groupName = "fruits"
            return (groupName) => state.categories.find((category) => category.group === groupName)
        },
        
        getProductsByGroup: (state) => {

        },

        getProductsByCategory: (state) => {

        },

        getPopularProducts: (state) => {

        }
    },
    actions: {
        fetchCategories(){
            axios.get('http://localhost:3000/api/categories')
            .then(response => { 
              // this.categories = response.data;
              this.categories  = response.data
              console.log(this.categories)
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
              this.promotions = response.data
              console.log(this.promotions)
            })
            .catch(error => {
              console.error('Error fetching data: ', error);
            })
          }
    },
  })    
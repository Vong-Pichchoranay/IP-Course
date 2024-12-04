import { defineStore } from "pinia"

export const useProductStore = defineStore('product', {
    state: () => ({
         groups: [],
         promotions: [],
         categories: [],
         products: [],
    }),
    getters: {
        getCategoriesByGroup(state){
            return (groupName) => state.categories.filter((category) => category.group === groupName)
            // return (groupName) => state.categories.find((category) => category.group === groupName)
        },
        
        getProductsByGroup: (state) => {
            return (groupName) => state.products.filter((product) => product.group === groupName)
        },

        getProductsByCategory: (state) => {
            return (categId) => state.products.filter((product) => product.categoryId === categId)
        },

        getPopularProducts: (state) => {
            return (prodsGroup) => prodsGroup.filter((product) => product.countSold > 10)
        }
    },
    actions: {
        
    },
  })    
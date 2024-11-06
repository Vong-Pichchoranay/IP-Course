<template>
  <!-- <div>This is my first VueJs Project</div> -->

  <div class="screen">
    <div class='cats'>
    <template v-for="product in products">
      <Category 
      :imgUrl="product.imgUrl" 
      :pname="product.name" 
      :qty="product.qty" 
      :paperColor="product.paperColor" 
      :borderColor="product.borderColor"
      :RedColor="product.RedColor"
      :GreenColor="product.GreenColor"
      :BlueColor="product.BlueColor"
      ></Category>
    </template>
    </div>

    <div class="promoBoard">
      <template v-for="promo in promos">
        <Promotion 
        :desc="promo.desc" 
        :imgUrl="promo.imgUrl" 
        :paperColor="promo.paperColor" 
        :btnColor="promo.btnColor" 
        :activities="promo.activities"></Promotion>
      </template>
    </div>
  </div>
</template>


<script>
import Category from './components/Category.vue';
import Promotion from './components/Promotion.vue';

export default{
  data(){
    return{
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
      ]
    }
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

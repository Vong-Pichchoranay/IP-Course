<template>
    <div class="product">
        <div class="status" 
        v-if="promoPercent > 0">-{{ promoPercent }}%</div>
        <img :src="imgUrl" alt="imgurl" class="pimg">
        <p class="subdesc">Hodo Foods</p>
        <p>{{ name }}</p>
        <p>({{ rating }})</p>
        <p class="subdesc">{{ size }} gram</p>
        <div class="price">
            <div class="promoPrice">${{ discountedPrice }}</div>
            <div class="ogPrice">${{ price }}</div>
        </div>
        
    </div>
</template>

<script>
export default{
    props : {
        name: String,
        rating : Number,
        size: String,
        imgUrl: String,
        price: Number,
        promoPercent : Number,
        categoryId : Number,
        instock : Number,
        countSold : Number,
        group: String
    },
    computed : {
        discountedPrice(){
            return (this.price * (1-(this.promoPercent/100))).toFixed(2)
        }
    }
}

</script>

<style>
@font-face {
    font-family: 'QuickSand';
    src: url('../assets/fonts/Quicksand/Quicksand-VariableFont_wght.ttf');
}
@font-face {
    font-family: 'Lato';
    src: url('../assets/fonts/Lato/Lato-Regular.ttf');
}
.product{
    width: 298px;
    height: 402px;
    border: solid 1px #E5E5E5;
    border-radius: 10px;
    position: relative;
    margin-right: 20px;
    margin-top: 20px;
    font-family: 'Quicksand';
    padding: 20px;
}
.pimg{
    width: 202px;
    height: 145px;
}
.status{
    position: absolute;
    top: 20px;
    left: 0px;
    width: 58px;
    height: 32px;
}
.subdesc{
    font-size: small;
    color:#7E7E7E;
}
.price{
    display: flex;
    flex-direction: row;
    align-items: center;
}
.promoPrice{
    color: #3BB77E;
    font-size: large;
    font-weight:700;
    margin-right: 10px;
}
.ogPrice{
    text-decoration: line-through;
}
</style>
<template>
    <section>
        <div class="status">In Stock</div>
        <div class="productName">Fish smoked with lemon</div>
        <div class="rating">★★★★☆(4.2)</div>
        <div class="price">
            <span id="currentPricee">$38</span>
            <span id="prevPrice">$42</span>
        </div>

        <div class="desc">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aperiam quasi id et fugit tempore reprehenderit dolore pariatur placeat iure, eius odio in recusandae accusamus temporibus, ipsum, reiciendis illum sapiente voluptates!
        </div>

        <div class="customize">
            <div class="qty">
                <div class="amount">1</div>
                <div class="arrow">
                    <img src="../assets/arrow-up-s-line.svg" alt="uparrow">
                    <img src="../assets/arrow-down-s-line.svg" alt="uparrow">
                </div>
            </div>

            <div class="cart">
                <img src="../assets/shopping-cart-white.svg" alt="cart">
                <div>Add To Cart</div>
            </div>

            <div class="action">
                <img src="../assets/heart-line.svg" alt="">
            </div>

            <div class="action">
                <img src="../assets/share-line.svg" alt="">
            </div>
        </div>

        <div class="text">
            <span>Vendor:</span>
            <span>NestMart</span>
        </div>

        <div class="text">
            <span>SKU:</span>
            <span>FWM15VKT</span>
        </div>
    </section>
</template>

<script>
export default{

}
</script>

<style scoped>
@font-face {
    font-family: 'QuickSand';
    src: url('../assets/fonts/Quicksand/Quicksand-VariableFont_wght.ttf');
}
@font-face {
    font-family: 'Lato';
    src: url('../assets/fonts/Lato/Lato-Regular.ttf');
}
.status{
    width: 100px;
    height: 30px;
    background-color: #DEF9EC;
    border-radius: 4px;
    color:#3BB77E;
    font-family: 'QuickSand';
    font-size: 14px;
    font-weight: bolder;
    display: flex;
    justify-content: center;
    align-items: center;
}
.productName{
    color: #253D4E;
    font-family: 'QuickSand';
    font-size: 40px;
    font-weight: bolder;
}
#currentPricee{
    color: #3BB77E;
    font-family: 'QuickSand';
    font-size: 72px;
    font-weight: bolder;
}
.rating{
    margin: 15px 0 15px 0;
}
#prevPrice{
    color: #B6B6B6;
    font-family: 'QuickSand';
    font-size: 40px;
    font-weight: bolder;
    text-decoration: line-through;
}
.price{
    width: 280px;
    height: 78px;
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    align-items:baseline;
    /* background-color: aqua; */
    margin-bottom: 30px;
}
.desc{
    width: 650px;
    margin: 40px 0 60px 0;
}
.customize{
    width: 424px;
    height: 50px;
    display: flex;
    flex-direction: row;
    justify-content: space-around;
    margin-bottom: 80px;

}
.arrow{
    display: flex;
    flex-direction: column;
    justify-content: space-between;
}
.amount{
    padding: 10px 20px 10px 30px;
    color: #3BB77E;
    font-size: 20px;
    font-weight: bolder;
}
.qty{
    width: 117px;
    height: 50px;
    font-family: 'QuickSand';
    border: 1.75px solid #3BB77E;
    border-radius: 7px;
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: space-between;
    /* background-color: aqua; */

}
.cart{
    width: 176px;
    height: 50px;
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: center;
    color: white;
    background-color: #3BB77E;
    border-radius: 4px;
}
.cart .div{
    margin-left: 5px;
    font-family: 'QuickSand';
    font-size: 32px;
    font-weight: bolder;
}
.action{
    width: 50px;
    height: 50px;
    border: 1px solid #F2F3F4;
    border-radius: 5px;
    display: flex;
    justify-content: center;
    align-items: center;
}
.text{
    font-family: 'Lato';
    font-size: 18px;
}
.text >span:nth-child(2){
    color: #B6B6B6;
    margin-left: 20px;
}
</style>

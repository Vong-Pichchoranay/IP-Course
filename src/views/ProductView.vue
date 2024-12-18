<template>
<section>
    <navigation-bar></navigation-bar>
    <div class="productViewPath">
        <div :style="{color:'#7E7E7E'}">Home >  Vegetables &tubers ></div>
        <div :style="{color:'#3BB77E'}">Seeds of Change Organic</div>
    </div>
    <div class="product">
        <product-image></product-image>
        <product-detail></product-detail>
    </div>
    <div class="productDetails">
        <div class="pdheader">
            <div class="detailsBtn">Description</div>
            <div class="detailsBtn">Additional Info</div>
            <div class="detailsBtn">Review(3)</div>
        </div>
        <div class="pdText">
            Uninhibited carnally hired played in whimpered dear gorilla koala depending and much yikes off far quetzal goodness and from for grimaced goodness unaccountably and meadowlark near unblushingly crucial scallop tightly neurotic hungrily some and dear furiously this apart. 
            <br/><br/>
            Spluttered narrowly yikes left moth in yikes bowed this that grizzly much hello on spoon-fed that alas rethought much decently richly and wow against the frequent fluidly at formidable acceptably flapped besides and much circa far over the bucolically hey precarious goldfinch mastodon goodness gnashed a jellyfish and one however because.
        </div>
    </div>
</section>
</template>

<script>
</script>

<style scoped>
.product{
    display: flex;
    flex-direction: row;
    align-items: center;
}
.productViewPath{
    display:flex;
    flex-direction:row;
}
.detailsBtn{
    width: fit-content;
    color: #B6B6B6;
    padding: 15px 30px 15px 30px;
    border: 1px solid #B6B6B6;
    border-radius: 30px;
    margin-right: 20px;
}
.detailsBtn:hover{
    color: #3BB77E;
    font-weight: bolder;
}
.productDetails{
    width: 1583px;
    height: 324px;
    border: 1px solid #F2F3F4;
    border-radius: 15px;
    padding: 20px 40px 20px 40px;
}
.pdheader{
    display: flex;
    flex-direction: row;
}
.pdText{
    margin-top: 30px;
}
</style>
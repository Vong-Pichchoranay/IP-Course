<template>
    <section>
        <div class="container">
            <div class="searchBox">
                <img id="search" src="../assets/search-interface-symbol.png" alt="search">
            </div>
            <img id="displayedImg" src="../assets/products/fish.png" alt="cabbage">
        </div>
        <div class="moreImg">
            <div class="arrowbg">
                <img class="arrow" src="../assets/left-arrow.png" alt="leftarrow">
            </div>
            <img class="singleImg" src="../assets/products/apple.png" alt="apple">
            <img class="singleImg" src="../assets/products/apricot.png" alt="apricot">
            <img class="singleImg" src="../assets/products/blues.png" alt="blues">
            <img class="singleImg" src="../assets/products/chili.png" alt="chili">
            
            <div class="arrowbg">
                <img class="arrow" src="../assets/right-arrow.png" alt="leftarrow">
            </div>
        </div>
    </section>
</template>

<script>
export default{

}
</script>

<style scoped>

.container{
    width: 865px;
    height: 696px;
    border: 1px solid #E5E5E5;
    border-radius: 15px;
    margin: 10px 60px 10px 0;
}
#displayedImg, .singleImg{
    width: 100%;
    height: 100%;
    padding: 15px;
}
.moreImg{
    display: flex;
    flex-direction: row;
    align-items: center;

}
.singleImg{
    width: 117px;
    height: 117px;
    border: 1px solid #F2F3F4;
    border-radius: 15px;
    margin: 15px;
}
#search{
    width: 32px;
    height: 32px;
    
}
.searchBox{
    display: flex;
    justify-content: end;
    padding: 20px 10px 0 0;
    float: right;
}
.arrow{
    width: 32px;
    height: 32px;
    
}
.arrowbg{
    width: 64px;
    height: 64px;
    background-color: #F2F3F4;
    border-radius: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
}
.arrowbg:hover{
    background-color: #3BB77E;
    width: 80px;
    border-radius: 25%;
    float:left;
}

</style>
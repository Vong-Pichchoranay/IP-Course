<template>
    <div class="searchbox">
        <div class="categories">
            <p>AllCategories</p>
            <img src="../assets/down-arrow.svg" alt="down-arrow">
            <p style="color:gray">|</p>
            <input type="text" id="searchInput" placeholder="Search for items">
        </div>
        <img src="../assets/search-interface-symbol.png" id="search" alt="search">
    </div>
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
.searchbox{
    width: 900px;
    height: 50px;
    border: 2px solid #BCE3C9;
    display: flex;
    flex-direction: row;
    justify-content:space-between;
    padding: 15px 20px 15px 20px;
    border-radius: 5px;
    width: 700px;
    margin: 0 60px 0 50px;
}
p{
    font-family: 'QuickSand';
    font-weight: bolder;
}
#searchInput{
    font-family: 'Lato';
}
.categories{
    display: flex;
    flex-direction: row;
    /* background-color: aqua; */
}
img{
    margin: 0 10px 0 10px;
}
input{
    border: none;
    padding: 0 0 0 10px;
    color: gray;
}
input[type=text]:focus{
    outline: none;
}
#search{
    width: 20px;
    height: 20px;
}
</style>
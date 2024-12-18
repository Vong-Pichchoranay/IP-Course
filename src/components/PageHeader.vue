<template>
    <div class="pageheader">
        <p id="title">{{ title }}</p>
        <p id="path">Home > Categories > {{ title }}</p>
    </div>
</template>

<script>
export default{
    props : {
        title : String
    }
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
.pageheader{
    width: 1584px;
    height: 235px;
    background-color: #3BB77E33;
    background-image: url("../assets/plantdecor.png");
    border-radius: 20px;
}
#title{
    font-family: 'QuickSand';
    font-weight: bolder;
    font-size: 48px;
    color: #253D4E;
    padding: 50px 0 0 80px;
}
#path{
    color: #7E7E7E;
    font-size: 18px;
    font-weight: 400;
    font-family: 'Lato';
    padding-left: 80px;
}
</style>
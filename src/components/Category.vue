<template>
    <div class="test">
        <img :src="imgUrl" id="foodpic">
        <p id="title"> {{ pname }}</p>
        <p id="amount"> {{ qty }} items</p>
    </div>
</template>

<script>
export default {
    props : {
        imgUrl : String,
        pname : String,
        qty : String,
        paperColor : String,
        borderColor : String,
        RedColor : Number,
        GreenColor: Number,
        BlueColor : Number,
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
.test{
    width:136px;
    height: 177px;
    background-color: v-bind(paperColor);
    color: black;
    border-radius: 10px;
    display: flex;
    flex-direction: column;
    align-items: center;
    margin-right: 20px;
    border: 1px solid v-bind(borderColor);
    box-shadow: 20px 20px 40px rgba(v-bind(RedColor), v-bind(GreenColor), v-bind(BlueColor), 0.07);
}
#foodpic{
    width: 120px;
    height: 120px;
}
#title{
    font-size: 16px;
    font-weight: 700;
    color: #253D4E;
    font-family: 'QuickSand';
    
}
#amount{
    font-size: 12px;
    font-family: 'Lato';
    color: #B6B6B6;
    font-weight: 400;
}
</style>
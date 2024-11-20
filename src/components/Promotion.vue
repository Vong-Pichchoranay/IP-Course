<template>
    <div class="board">
        <img :src="imgUrl" id="promoPic">
        <div class="info">
            <div class="text"> {{ desc }}</div>
            <MyButton 
            :btnColor="btnColor"
            @click="shopNow(desc)"></MyButton>
        </div>
        
    </div>
</template>

<script>
export default {
    props : {
        desc : String,
        imgUrl : String,
        paperColor : String,
        btnColor : String,
    },
    data(){
        return{
            promotion : {
                title : "healthy brf",
            }
        }
    },
    methods :{
        shopNow(props){
            alert("Let's shop: " + this.desc);
        }
    }
}
</script>

<style>
@font-face {
    font-family: 'QuickSand';
    src: url('../assets/fonts/Quicksand/Quicksand-VariableFont_wght.ttf');
}
.board{
    width: 512px;
    height: 300px;
    border-radius: 10px;
    background-color: v-bind(paperColor);
    position: relative;
    overflow: hidden;
    margin-right: 20px;
    display: flex;
}
.info{
    position: absolute;
    width: 271px;
    height: 146px;
    display: flex;
    flex-direction: column;
    justify-content:space-between;
    top: 75px;
    left: 48px;
}
.text{
    font-size:24px;
    font-weight: 700;
    line-height: 32px;
    font-family: 'QuickSand';
}
#promoPic{
    width: 350px;
    height: 300px;
    position: absolute;
    bottom: 0;
    right: 0;
    overflow: hidden;
}

</style>



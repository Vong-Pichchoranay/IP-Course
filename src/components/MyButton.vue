<template>
    <div class="btn">
        <span id="option">{{ activity }}</span>
        <img id="arrow" src="../assets/whrightarrow.png"></img>
    </div>
</template>

<script>
export default{
    props : {
        activity : String,
        btnColor : String,
    }
}
</script>

<style>
@font-face {
    font-family: 'QuickSand';
    src: url('../assets/fonts/Quicksand/Quicksand-VariableFont_wght.ttf');
}
.btn{
    width: 109.83px;
    height: 31px;
    border-radius: 3px;
    padding-top: 8px;
    padding-right: 15px;
    padding-bottom: 8px;
    padding-left: 10px;
    background-color: v-bind(btnColor);
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: center;
    
}
#option{
    color:#FFFFFF;
    font-size: 12px;
    font-weight: 700;
    padding-right: 6px;
    font-family: 'QuickSand';
    line-height: 15px;
}
#arrow{
    width: 10.83px;
    height: 10px;
}
</style>
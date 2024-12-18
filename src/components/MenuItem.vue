<template>
    <div class="menuitem">
        <img v-if="icon" :src="icon" alt="icon">
        <p>{{ title }}</p>
        <img v-if="arrow" :src="arrow" alt="arrow">
    </div>
</template>

<script>
export default{
    props : {
        title : String,
        icon : String,
        arrow : String,
        tcolor: {
            type: String,
            default: '#1B1B1B'
        },
        bcolor: String
    }
}
</script>

<style scoped>
@font-face {
    font-family: 'QuickSand';
    src: url('../assets/fonts/Quicksand/Quicksand-VariableFont_wght.ttf');
}
p{
    font-family: "QuickSand";
    font-weight: bolder;
    color: v-bind(tcolor);
    margin: 0 5px 0 5px;
}
.menuitem{
    padding: 10px 20px 10px 20px;
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: center;
    background-color: v-bind(bcolor);
    margin: 0 5px 0 5px;
    border-radius: 5px;

}
img{
    width: 16px;
    height: 16px;
}
</style>
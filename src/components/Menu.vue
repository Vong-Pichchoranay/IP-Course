<template>
    <section>
        <div class="menu">
            <h1>{{ title }}</h1>
            <div class="categories">
                <div class="category" @click="changeMenu('All')">All</div>
                <div class="category" @click="changeMenu('Milk & Dairies')">Milk & Dairies</div>
                <div class="category" @click="changeMenu('Coffee & Teas')">Coffee & Teas</div>
                <div class="category" @click="changeMenu('Pet Foods')">Pet Foods</div>
                <div class="category" @click="changeMenu('Meats')">Meats</div>
                <div class="category" @click="changeMenu('Vegetables')">Vegetables</div>
                <div class="category" @click="changeMenu('Fruits')">Fruits</div>
            </div>
        </div>
        
    </section>
</template>

<script>
export default{
    props : {
        title: String
    },
    methods : {
        changeMenu(name){
            console.log(name);
            this.$emit('change-menu', name)
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
h1{
    font-family: 'QuickSand';
}
.categories{
    font-family: 'QuickSand';
    display: flex;
    flex-direction: row;
}
.menu{
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 20px;
}
.category{
    margin-right: 10px;
}
</style>
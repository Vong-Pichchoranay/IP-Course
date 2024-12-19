<template>
    <div class="page">

        <Header></Header>

        <div class="content">
            <div class="menu">
                <div class="menuitems">Menu</div>
                <div class="menuitems">Section 1</div>
                <div class="menuitems">Section 2</div>
                <div class="menuitems">Section 3</div>
                <div class="menuitems">Section 4</div>
            </div>
            <div class="subcontent">Welcome to Page 1</div>
        </div>
        <Footer></Footer>

    </div>
    
</template>

<script>

export default{

}
</script>

<style>
.page{

}
.menuitems{
    padding: 10px;
    border-bottom: 1px solid;
    border-right: 1px solid;
}
.content{
    width: 1000px;
    display: flex;
    flex-direction: row;
    border: 1px solid black;

}
.subcontent{
    width: 600px;
    display: flex;
    justify-content: center;
    align-items: center;
    /* background-color: aqua; */
}
</style>
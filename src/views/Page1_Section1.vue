<template>
    <div class="page">

        <Header></Header>

        <div class="content">
            <div class="subcontent">
                <div>Welcome to Page 1</div>
                <div>----------------------------------------------------</div>
                <div>This is Section 1 of Page 1</div>
            </div>
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
.content{
    width: 1000px;
    display: flex;
    flex-direction: row;
    border: 1px solid black;

}
.subcontent{
    width: 600px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    /* background-color: aqua; */
}
.subcontent div{
    margin-bottom: 15px;
}
</style>
<template>
    <section>
        <div class="header">
            <div>Header</div>

            <div class="pages">
                <router-link to="/" active-class="my-active-class">Page 1</router-link>
                <router-link to="/Page2" active-class="my-active-class">Page 2</router-link>
                <router-link to="/Page3" active-class="my-active-class">Page 3</router-link>

            </div>
        </div>
    </section>
</template>

<script>
export default{
    
}
</script>

<style>
.header{
    width: 1000px;
    padding: 50px;
    border: 1px solid black;
}
.pages{
    display: flex;
    flex-direction: row;
}
.my-active-class{
    color: red;
}
</style>
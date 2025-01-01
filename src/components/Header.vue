<template>
    <section>
        <div class="header">
            <div>Header</div>

            <div class="pages">
                <router-link to="/" class="router">Page 1</router-link>
                <router-link to="/Page2" class="router">Page 2</router-link>
                <router-link to="/Page3" class="router">Page 3</router-link>

            </div>
        </div>
    </section>
</template>

<script>
export default{
    
}
</script>

<style scoped>
.header{
    width: 1000px;
    padding: 50px;
    border: 1px solid black;
}
.pages{
    display: flex;
    flex-direction: row;
}
.router-link-active{
    color: red !important;
}
.router{
    color: black;
}

</style>
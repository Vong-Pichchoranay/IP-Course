<template>
    <div class="page">
        <div>----------------------------------------------------</div>
        <div>This is Section 2 of Page 1</div>
        <div>Message from Section 1: {{ this.$store.state.message1 }}</div>
    </div>
    
</template>

<script>

export default{

}
</script>

<style scoped>
.page{
    width: 600px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    /* background-color: aqua; */
}
.page div{
    margin-bottom: 15px;
}
</style>
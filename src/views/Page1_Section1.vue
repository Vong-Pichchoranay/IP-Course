<template>
    <div class="page">
        <div>----------------------------------------------------</div>
        <div>This is Section 1 of Page 1</div>
        <label for="message">Message:</label>
        <input type="text" id="message" placeholder="Enter message" @input="setMessage($event)">
    </div>
    
</template>

<script>

export default{
    methods : {
        setMessage(event){
            this.$store.state.message1 = event.target.value;
        }
    }

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
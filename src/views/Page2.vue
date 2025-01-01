<template>
    <div class="page">

        <Header></Header>

        <div class="content">
            <div class="menu">
                
                <div class="menuitems">Menu</div>
                <router-link to="/Page2/Section1" class="menuitems router-link-active">Section 1</router-link>
                <router-link to="/Page2/Section2" class="menuitems router-link-active">Section 2</router-link>
                <router-link to="/Page2/Section3" class="menuitems router-link-active">Section 3</router-link>
                <router-link to="/Page2/Section4" class="menuitems router-link-active">Section 4</router-link>
              
            </div>
            <div class="sectioncontent">
                <div class="subcontent">Welcome to Page 2</div>
                <div>Message from Page 1: {{ this.$store.state.message }}</div>
                <label for="finalmessage">Message: </label>
                <input type="text" id="finalmessage" placeholder="Enter message" @input="setFinalMessage($event)">
                <router-view></router-view>
            </div>
            
        </div>
        <Footer></Footer>

    </div>
    
</template>

<script>

export default{
    methods : {
        setFinalMessage(event){
            this.$store.state.finalmessage = event.target.value;
        }
    }
}
</script>

<style scoped>
.page{

}
.menu{
    display: flex;
    flex-direction: column;
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
.sectioncontent{
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}
.router-link-active {
  color: black;
}
.router-link-exact-active {
  background-color: rgb(19, 170, 204); /* Change the exact active link color */
}
</style>
<template>
    <div class="header">
        <img id="martIcon" src="../assets/melonMart.png" alt="melonMart">
        <search-box></search-box>

        <div class="personal">
          <menu-item title="Account" icon="/src/assets/user-line.svg"></menu-item>
          <menu-item title="Compare" icon="/src/assets/recycle-line.svg"></menu-item>
          <menu-item title="Wishlist" icon="/src/assets/heart-line.svg"></menu-item>
          <menu-item title="Cart" icon="/src/assets/shopping-cart-line.svg"></menu-item>
        </div>
        
    </div>

    <div class="subheader">
        <menu-item title="Browse All Categories" tcolor="white" bcolor="#3BB77E" icon="/src/assets/microsoft-line.svg" arrow="/src/assets/down-arrow-white.svg"></menu-item>
        <router-link to="/categories/1">
            <menu-item title="Hot Deals" icon="/src/assets/fire-line.svg"></menu-item>
        </router-link>
        <menu-item title="Home"></menu-item>
        <menu-item title="Food" arrow="/src/assets/down-arrow.svg"></menu-item>
        <menu-item title="Vegetables" arrow="/src/assets/down-arrow.svg"></menu-item>
        <menu-item title="Drink"></menu-item>
        <menu-item title="Cookies"></menu-item>
        <menu-item title="Meat & Seafood" arrow="/src/assets/down-arrow.svg"></menu-item>
        <menu-item title="Bakery"></menu-item>

        <div class="customerService">
            <img src="../assets/customer-service-line.svg" alt="customerservice">
            <div class="tel">
                <p>099 777 888</p>
                <p>24/7 Support Center</p>
            </div>
        </div>
    </div>
</template>

<script>
export default{

}
</script>

<style scoped>
.subheader{
      display: flex;
      flex-direction: row;
      margin: 20px 0 20px 0;
      padding: 20px;
      border-top: 1px solid #E5E5E5;
      border-bottom: 1px solid #E5E5E5;
}
#martIcon{
    width: 215px;
    height: 66px;
}
.personal{
    width: 400px;
    height: 28px;
    display: flex;
    flex-direction: row;
    justify-content: space-around;
    
}
.header{
    width: 1500px;
    height: 97px;
    display: flex;
    flex-direction: row;
    justify-content: space-around;
    justify-content: center;
    align-items: center;
}
.customerService{
    font-family: 'QuickSand';
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: center;
}
.customerService p:nth-child(1){
    color: #3BB77E;
    font-weight: bolder;
    font-size: 24px;

}
.customerService p:nth-child(2){
    color: #7E7E7E;
    font-weight: bold;
    font-size: 12px;
}
</style>
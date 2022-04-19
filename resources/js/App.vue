<template>
    <div class="main-content">   
        <MenuComponent> </MenuComponent>            
        <HeaderComponent> </HeaderComponent>   
        <HomeComponent></HomeComponent>
        <FooterComponent> </FooterComponent>
    </div>
</template>

<script>
    import HeaderComponent from './components/HeaderComponent.vue'
    import FooterComponent from './components/FooterComponent.vue'
    import MenuComponent from './components/MenuComponent.vue'
    import HomeComponent from './components/pages/HomeComponent.vue'
    export default {
        components: {          
            HeaderComponent,
            FooterComponent,
            MenuComponent,
            HomeComponent,
        }
    }   
</script>

<style>

</style>
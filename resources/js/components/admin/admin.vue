<template>
    <div id="main-wrapper" data-layout="vertical"
      data-navbarbg="skin5"
      data-sidebartype="full"
      data-sidebar-position="absolute"
      data-header-position="absolute"
      data-boxed-layout="full">
        <HeaderComponent></HeaderComponent>
        <LeftSidebar></LeftSidebar>
        <div class="page-wrapper">
            <Breadcrumb></Breadcrumb>

            <HomeIndex></HomeIndex>
            <!-- <ProductIndex></ProductIndex> -->

        </div>
        <FooterComponent></FooterComponent>        
    </div>
</template>

<script>
    import HeaderComponent from './components/layouts/HeaderComponent.vue'
    import FooterComponent from './components/layouts/FooterComponent.vue'
    import LeftSidebar from './components/layouts/LeftSidebar.vue'    
    import Breadcrumb from './components/layouts/Breadcrumb.vue'

    import HomeIndex from './pages/home/index.vue'
    import ProductIndex from './pages/product/index.vue'

    export default {
        components: {
            HeaderComponent,
            FooterComponent,
            LeftSidebar,
            Breadcrumb,
            HomeIndex,
            ProductIndex,
        }
    }
</script>

<style>

</style>
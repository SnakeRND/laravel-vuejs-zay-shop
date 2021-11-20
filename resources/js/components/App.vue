<template>
    <div>
        <TopNav></TopNav>
        <MainNav></MainNav>
        <ModalSearch></ModalSearch>
        <router-view></router-view>
        <Footer></Footer>
    </div>
</template>

<script>
import TopNav from "./home/TopNav"
import MainNav from "./layout/MainNav"
import ModalSearch from "./layout/ModalSearch"
import Footer from "./layout/Footer"

export default {
    name: "App",
    components: {
        TopNav,
        MainNav,
        ModalSearch,
        Footer,
    }
}
</script>

<style scoped>

</style>

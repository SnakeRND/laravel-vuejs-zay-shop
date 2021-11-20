<template>
    <div>
        <Banner></Banner>
        <Services></Services>
        <Brands></Brands>
    </div>
</template>

<script>
import Banner from "./about/Banner"
import Services from "./about/Services"
import Brands from "./about/Brands"

export default {
    name: "About",
    components: {
        Banner,
        Services,
        Brands
    },
}
</script>

<style scoped>

</style>

<template>
    <div>
        <MainSlider></MainSlider>
        <Categories></Categories>
        <FeaturedProducts></FeaturedProducts>
    </div>
</template>

<script>
import MainSlider from "./home/MainSlider"
import Categories from "./home/Categories"
import FeaturedProducts from "./home/FeaturedProducts"

export default {
    name: "Home",
    components: {
        MainSlider,
        Categories,
        FeaturedProducts,
    },
}
</script>

<style scoped>

</style>

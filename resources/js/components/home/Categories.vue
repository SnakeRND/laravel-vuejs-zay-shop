<template>
    <section class="container py-5">
        <div class="row text-center pt-3">
            <div class="col-lg-6 m-auto">
                <h1 class="h1">Categories of The Month</h1>
                <p>
                    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                    deserunt mollit anim id est laborum.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-4 p-5 mt-3" v-for="category in categories">
                <a href="#"><img :src="category.image_url" class="rounded-circle img-fluid border" alt=""></a>
                <h5 class="text-center mt-3 mb-3">{{category.name}}</h5>
                <p class="text-center"><a class="btn btn-success" :href="'/category/' + category.slug">Go Shop</a></p>
            </div>
        </div>
    </section>
</template>

<script>
export default {
    data() {
        return {
            categories: [],
        }
    },
    mounted() {
        axios.get('api/v1/home/categories')
        .then(r => {
            this.categories = r.data.result
        })
    },
}
</script>

<style scoped>

</style>

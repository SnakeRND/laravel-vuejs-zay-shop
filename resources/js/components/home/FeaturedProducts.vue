<template>
    <section class="bg-light">
        <div class="container py-5">
            <div class="row text-center py-3">
                <div class="col-lg-6 m-auto">
                    <h1 class="h1">Featured Product</h1>
                    <p>
                        Reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                        Excepteur sint occaecat cupidatat non proident.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-4 mb-4" v-for="featuredProduct in featuredProducts">
                    <div class="card h-100">
                        <a href="shop-single.html">
                            <img :src="featuredProduct.image_url" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body">
                            <ul class="list-unstyled d-flex justify-content-between">
                                <li>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-muted fa fa-star"></i>
                                    <i class="text-muted fa fa-star"></i>
                                </li>
                                <li class="text-muted text-right">${{featuredProduct.price}}.00</li>
                            </ul>
                            <a href="shop-single.html" class="h2 text-decoration-none text-dark">{{featuredProduct.title}}</a>
                            <p class="card-text">{{featuredProduct.excerpt}}</p>
                            <p class="text-muted">Reviews (48)</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
export default {
    data() {
        return {
            featuredProducts: [],
        }
    },
    mounted() {
        axios.get('api/v1/home/featured_products')
        .then(r => {
            this.featuredProducts = r.data.result
        })
    },
}
</script>

<style scoped>

</style>

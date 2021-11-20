<template>
    <section class="bg-success py-5">
        <div class="container">
            <div class="row align-items-center py-5">
                <div class="col-md-8 text-white">
                    <h1>{{aboutBanner[0].title}}</h1>
                    <p>{{aboutBanner[0].text}}</p>
                </div>
                <div class="col-md-4">
                    <img :src="aboutBanner[0].image_url" alt="About Hero">
                </div>
            </div>
        </div>
    </section>
</template>

<script>
export default {
    data() {
        return {
            aboutBanner: [],
        }
    },
    mounted() {
        axios.get('api/v1/about/banner')
            .then(r => {
                this.aboutBanner = r.data.result
            })
    },
}
</script>

<style scoped>

</style>

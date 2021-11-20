<template>
    <div>
        <ContactUs></ContactUs>
        <Form></Form>
    </div>
</template>

<script>
import ContactUs from "./contact/ContactUs"
import Form from "./contact/Form"

export default {
    name: "Contact",
    components: {
        ContactUs,
        Form,
    },
}
</script>

<style scoped>

</style>

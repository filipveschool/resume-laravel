<template>
<section>
    <li v-for="service in services">
        {{service.mytitle}}
        {{service.description}}
    </li>
</section>
</template>

<script>
    // import Vue from 'vue';
    export default {
        mounted() {
            console.log('Component mounted.')
        },

        data() {
            return {
                services: [
                    {mytitle: 'Store', description: 'Go to the store'},
                    {mytitle: 'email', description: 'Go to the email',},
                    {mytitle: 'farm', description: 'Go to the farm'},
                    {mytitle: 'work', description: 'Go to work'},
                ]
            };
        }
    }
</script>

<style scoped>

</style>
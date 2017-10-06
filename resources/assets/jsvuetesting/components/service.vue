<template>
    <!-- begin feature -->
    <div class="col-4_sm-6_xs-12 wow bounceInUp"
         data-wow-duration="1s" data-wow-delay="0.4s">
        <div class="feature-1 box-shadow">
            <i class="feature__icon fa fa-4x fa-wordpress"></i>
            <h3 class="feature__title">{{mytitle}}</h3>
            <p class="feature__text">This theme will save you a lot of time. Packed with amazing
                features and super flexible for any business.</p>
        </div>
    </div>
    <!-- end feature -->

</template>

<script>
    // import Vue from 'vue';
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        props: {
            mytitle: {
                type: String,
            }
        }
    }
</script>

<style scoped>

</style>
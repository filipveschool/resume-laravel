<template>

    <li>
        <!-- Slot krijgt de tekst dat wordt getypt tussen de <task></task> component en toont deze tekst op beeld. -->
        <slot>

        </slot>
    </li>

</template>

<script>
    // import Vue from 'vue';
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>

<style scoped>

</style>
<template>
    <div>
        <task v-for="task in tasks">{{ task.description}}</task>
    </div>
</template>

<script>
    // import Vue from 'vue';
    export default {
        mounted() {
            console.log('Component mounted.')
        },

        data() {
            return {
                tasks: [
                    {description: 'Go to the store', complete: true},
                    {description: 'Go to the email', complete: false},
                    {description: 'Go to the farm', complete: true},
                    {description: 'Go to work', complete: false},
                ]
            };
        }
    }
</script>

<style scoped>

</style>
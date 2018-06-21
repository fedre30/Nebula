<template>
    <div class="Timeline">
        <div class="Timeline-container">
            <h3 class="Timeline-title">Title</h3>
        </div>
        <nebu-circle v-for="(circle, index) in circles" :key="circle.title" :title="circle.title" :year="circle.year" :image="circle.image"></nebu-circle>
    </div>
</template>

<script>
    import nebuCircle from "./nebu-circle.vue";

    export default {
        components: {nebuCircle},
        name: 'nebu-timeline',
        data() {
            return {
                circles : [
                    {
                        year: 1972,
                        title: 'Space',
                        image: './assets/img/space.jpg'
                    },
                    {
                        year: 1992,
                        title: 'Space 2',
                        image: './assets/img/space.jpg'
                    },
                    {
                        year: 2000,
                        title: 'Space 3',
                        image: './assets/img/space.jpg'
                    },
                ]
            }
        }
    }
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped lang="sass">
.Timeline
    width: 100%
    height: 100vh
    &-container
        width: 90%
        margin: 0 auto
        text-align: center
        padding-top: 3rem
    &-title
        font-size: 6rem


</style>
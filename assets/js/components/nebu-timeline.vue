<template>
    <div class="Timeline">
        <div class="Timeline-container">
            <h3 class="Timeline-title">idees recues les plus tenaces</h3>
        </div>
        <nebu-circle v-for="(circle, index) in circles" :key="circle.title" :title="circle.title" :year="circle.year" :image="circle.image" :mistake="circle.mistake"></nebu-circle>
        <router-link :to="{name: 'list'}"><div class="Timeline-button">Voir plus</div></router-link>
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
                        title: 'Les gardiens de la Galaxie',
                        image: './assets/img/space.jpg',
                        mistake: 'Le corps gèle dans l’espace'
                    },
                    {
                        year: 1992,
                        title: 'Les gardiens de la Galaxie 2',
                        image: './assets/img/space.jpg',
                        mistake: 'Le corps gèle dans l’espace'
                    },
                    {
                        year: 2000,
                        title: 'Les gardiens de la Galaxie le retour',
                        image: './assets/img/space.jpg',
                        mistake: 'Le corps gèle dans l’espace'
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
    height: 190vh
    font-family: Roboto, sans-serif
    &-container
        width: 80%
        margin: 0 auto
        text-align: center
        padding-top: 3rem
    &-title
        font-size: 6.5rem
        font-family: Airship, sans-serif
        text-transform: uppercase
        margin-bottom: 5rem
        line-height: 9rem
        text-align: left
        color: #1F0D87
        width: 100%
    &-button
        font-size: 3rem
        width: 300px
        height: 200px
        line-height: 3rem
        text-align: center
        margin: 0 auto
        position: relative
        text-transform: uppercase
        display: block
        background: transparent
        color: white
        font-weight: 800


    &-button:before, &-button:after
        width: 290px
        left: 0
        height: 65px
        border: 7px solid white

    &-button:before
        position: absolute
        content: ''
        border-bottom: none
        -webkit-transform: perspective(15px) rotateX(5deg)
        -moz-transform: perspective(15px) rotateX(5deg)
        transform: perspective(15px) rotateX(5deg)
        top: -50px

    &-button:after
        position: absolute
        top: 40px
        content: ''
        border-top: none
        -webkit-transform: perspective(15px) rotateX(-5deg)
        -moz-transform: perspective(15px) rotateX(-5deg)
        transform: perspective(15px) rotateX(-5deg)

a
    text-decoration: none



</style>
<template>
    <div class="Timeline">
        <div class="Timeline-container">
            <h3 class="Timeline-title">{{title}}</h3>
        </div>
        <div class="Circles-container">
        <nebu-circle v-for="(circle, index) in circles" :key="circle.title" :title="circle.title" :year="circle.year" :image="circle.image" :mistake="circle.mistake"></nebu-circle>
        </div>
        <router-link :to="{name: 'list'}"><div class="Timeline-button desktop">Voir plus</div></router-link>
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
        },
        props: {
            title: {
                type: String
            }
        }
    }
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped lang="sass">
.Timeline
    width: 100%
    height: 170vh
    font-family: Roboto, sans-serif
    position: relative
    &-container
        width: 80%
        margin: 0 auto
        text-align: center
    &-title
        font-size: 2rem
        font-family: Airship, sans-serif
        text-transform: uppercase
        margin-bottom: 5rem
        line-height: 3rem
        text-align: left
        color: #1F0D87
        width: 100%
    &-button
        font-size: 1rem
        width: 100px
        height: 50px
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
        width: 100px
        left: 0
        height: 20px
        border: 2px solid white

    &-button:before
        position: absolute
        content: ''
        border-bottom: none
        -webkit-transform: perspective(15px) rotateX(7deg)
        -moz-transform: perspective(15px) rotateX(7deg)
        transform: perspective(15px) rotateX(10deg)
        top: 0

    &-button:after
        position: absolute
        top: 25px
        content: ''
        border-top: none
        -webkit-transform: perspective(15px) rotateX(-7deg)
        -moz-transform: perspective(15px) rotateX(-7deg)
        transform: perspective(15px) rotateX(-10deg)

    .desktop
        display: none



a
    text-decoration: none

@media(min-width: 600px)
    .Timeline
        width: 100%
        height: 170vh
        font-family: Roboto, sans-serif
        position: relative
        &-container
            width: 80%
            margin: 0 auto
            text-align: center
        &-title
            font-size: 4.5rem
            font-family: Airship, sans-serif
            text-transform: uppercase
            margin-bottom: 5rem
            line-height: 3rem
            text-align: left
            color: rgba(255,91,54,0.2)
            width: 100%
            position: absolute
            bottom: 700px
            left: 5vw
        &-button
            font-size: 1rem
            width: 100px
            height: 50px
            line-height: 3rem
            text-align: center
            margin: 0 auto
            position: relative
            text-transform: uppercase
            display: block
            background: transparent
            color: #440BA2
            font-weight: 800
            position: absolute
            bottom: 20vh
            left: 25vw


        &-button:before, &-button:after
            width: 100px
            left: 0
            height: 20px
            border: 2px solid #440BA2

        &-button:before
            position: absolute
            content: ''
            border-bottom: none
            -webkit-transform: perspective(15px) rotateX(7deg)
            -moz-transform: perspective(15px) rotateX(7deg)
            transform: perspective(15px) rotateX(10deg)
            top: 0

        &-button:after
            position: absolute
            top: 25px
            content: ''
            border-top: none
            -webkit-transform: perspective(15px) rotateX(-7deg)
            -moz-transform: perspective(15px) rotateX(-7deg)
            transform: perspective(15px) rotateX(-10deg)

        .Circles-container
            display: flex
            width: 80%
            position: absolute
            bottom: 500px



</style>
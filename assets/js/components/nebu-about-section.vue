<template>
    <div class="AboutSection">
        <div class="AboutSection-container">
            <div class="AboutSection-alien"></div>
            <h3 class="AboutSection-title">qui quoi comment?</h3>
            <p class="AboutSection-text">Si vous voulez en savoir plus sur ce concept lunaire et les personnes brillantes qui l’ont réalisé, c’est par ici  !</p>
            <div class="AboutSection-shape desktop"></div>
            <div class="AboutSection-button">à propos</div>
        </div>
        <a href="#" ><div class="desktop shuttle" v-scroll-to="'#intro'"></div></a>
    </div>
</template>

<script>
    export default {
        name: 'nebu-about',
        data() {
            return {}
        }
    }
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped lang="sass">
.AboutSection
    width: 100%
    height: 100vh
    font-family: Roboto, sans-serif
    position: relative
    &-container
        width: 80%
        height: 100vh
        margin: 0 auto
        position: relative
        padding-top: 40vh
    &-alien
        position: absolute
        width: 150px
        height: 170px
        background: url("./assets/img/alien.png") no-repeat
        background-size: cover
        top: 200px
        left: 100px
    &-title
        font-size: 2.5rem
        font-family: Airship, sans-serif
        text-transform: uppercase
        margin: 5rem 0 1rem 0
        line-height: 9rem
        text-align: left
        color: #1F0D87
    &-text
        font-size: 1rem
        font-weight: 500
        color: white
        text-align: left
        line-height: 2rem
        margin-bottom: 3rem
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

a
    text-decoration: none
    .desktop
        display: none

@media(min-width: 600px)
    .AboutSection
        width: 500px
        height: 500px
        font-family: Roboto, sans-serif
        background: linear-gradient(348deg, rgba(242,56,85,1) 0%, rgba(255,90,66,1) 100%)
        position: absolute
        bottom: 30vh
        left: 20vw
        border-radius: 500px
        &-container
            width: 80%
            height: 100vh
            margin: 0 auto
            position: relative
            padding-top: 40vh
        &-alien
            display: none
        &-title
            font-size: 2.5rem
            font-family: Airship, sans-serif
            text-transform: uppercase
            margin: 5rem 0 1rem 0
            line-height: 9rem
            color: #1F0D87
            position: absolute
            top: 0
            left: 3vw
        &-text
            font-size: 1rem
            font-weight: 500
            color: white
            text-align: left
            line-height: 2rem
            position: absolute
            top: 25vh
            width: 80%
            left: 3vw

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
            display: block
        &-shape
            position: absolute
            top: 20vh
            left: 25vw
            width: 22.5vw
            height: 25vh
            background: url("./assets/img/footer_shape.png") no-repeat
            background-size: cover

        .shuttle
            width: 50px
            height: 70px
            background: url("./assets/img/shuttle.svg") no-repeat
            background-size: cover
            position: absolute
            right: -550px
            bottom: -100px



</style>
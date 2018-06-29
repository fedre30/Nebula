<template>
    <div class="Intro">
        <div class="Intro-container">
            <h1 class="Intro-title">Nebula</h1>
            <h3 class="Intro-subtitle">L’espace vu en <span class="big">grand</span><span class="none">,</span> <br>
                <span class="none">Ou plutôt</span><span class="violet"> sur Grand écran<span class="none">.</span></span></h3>
            <h4 class="Intro-text">Tout ce que vous pensiez savoir sur l’Univers grâce (ou à cause) du Cinéma</h4>
        </div>
        <div class="Intro-astroman"></div>
        <div class="Intro-bigCircle">
            <img class="Intro-pinkCosmo" src="../../img/pinkCosmo.svg" alt="">
        </div>
        <img class="Intro-spaceShape" src="../../img/spaceShape_intro.png" alt="">I
        <img class="Intro-spaceship" src="../../img/spaceship.png" alt="">
    </div>
</template>

<script>
export default {
    components: {},
    name: "nebu-introduction",

    data() {
        return {}
    }
}
</script>

<style scoped lang="sass">
.Intro
    position: relative
    width: 100%
    height: 100vh
    z-index: 3
    &-container
        width: 80%
        margin: 0 auto
        text-align: center
        padding-top: 5rem
    &-title
        font-size: 8rem
        margin-bottom: 2rem
        font-family: Airship, sans-serif
        color: rgb(255, 8, 73)
    &-subtitle
        font-size: 1.5rem
        margin-bottom: 2rem
        font-family: Roboto, sans-serif
        font-weight: bold
        color: white
        text-align: left
        width: 100%
        line-height: 2rem
    &-text
        font-size: 1rem
        font-family: Roboto, sans-serif
        color: white
        text-align: left
        line-height: 2rem
        font-weight: 300
        font-style: italic
        margin-bottom: 8rem
    &-astroman
        width: 75vw
        height: 70vh
        position: absolute
        background: url("./assets/img/cosmonaute.png") no-repeat
        background-size: cover
        right: 0
        bottom: -100px

@media(min-width: 600px)
    .Intro
        position: relative
        width: 100%
        z-index: 0
        &-container
            width: 100%
        &-title
            font-size: 3.6rem
            position: absolute
            left: 80px
            top: 80px
            font-family: Airship, sans-serif
            color: rgb(255, 8, 73)
        &-subtitle
            font-size: 6rem
            margin-bottom: 4rem
            font-family: Airship, sans-serif
            font-weight: 300
            color: black
            width: 100%
            line-height: 6rem
            position: absolute
            top: 266px
            left: 200px
        &-text
            font-size: 2rem
            font-family: Roboto, sans-serif
            color: #1F0D87
            font-weight: 600
            font-style: italic
            margin-top: 415px
            margin-left: 200px

        &-bigCircle
            width: 870px
            height: 870px
            border-radius: 100%
            background: linear-gradient(-180deg, #F13455 0%, #FF5A3D 99%)
            position: absolute
            top: 146px
            right: -62px
            z-index: -9

        &-spaceShape
            position: absolute
            z-index: -7
            top: 585px
            left: 160px

        &-spaceship
            position: absolute
            z-index: -6
            top: 1010px
            left: 100px

        &-pinkCosmo
            position: absolute
            z-index: -8
            top: 100px
            right: 130px

        &-astroman
            display: none

        .big
            font-size: 12rem
            position: absolute
            top: 30px
            font-weight: 300
        .violet
            color: #CDC1E1
            font-family: Futura, sans-serif
            font-size: 4rem
            position: absolute
            top: 73px
            left: 75px
        .none
            display: none




</style>
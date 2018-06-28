<template>
    <div class="Intro">
        <div class="Intro-container">
            <h1 class="Intro-title">Nebula</h1>
            <h3 class="Intro-subtitle">L’espace vu en <span class="big">grand</span><span class="none">,</span> <br>
                <span class="none">Ou plutôt</span><span class="violet"> sur Grand écran<span class="none">.</span></span></h3>
            <h4 class="Intro-text">Tout ce que vous pensiez savoir sur l’Univers grâce (ou à cause) du Cinéma</h4>
        </div>
        <div class="Intro-astroman"></div>
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
        font-size: 7rem
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
        height: 100vh
        z-index: 1
        &-container
            width: 60%
            margin: 0 auto
            text-align: center
        &-title
            font-size: 3rem
            position: absolute
            left: 6rem
            top: 3rem
            font-family: Airship, sans-serif
            color: rgb(255, 8, 73)
        &-subtitle
            font-size: 3.5rem
            margin-bottom: 4rem
            font-family: Airship, sans-serif
            font-weight: 300
            color: black
            text-align: left
            width: 100%
            line-height: 6rem
            position: absolute
            top: 20vh
        &-text
            font-size: 1.3rem
            font-family: Roboto, sans-serif
            color: #1F0D87
            text-align: left
            line-height: 3rem
            font-weight: 300
            font-style: italic
            margin-top: 30vh
        &-astroman
            display: none
        .big
            font-size: 7rem
            position: absolute
            top: 2rem
            font-weight: 300
        .violet
            color: #CDC1E1
            font-family: Roboto, sans-serif
            font-weight: 500
            font-size: 2.5rem
            position: absolute
            top: 4rem
            left: 4rem
        .none
            display: none




</style>
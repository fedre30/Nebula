<template>
    <div class="Footer">
    <p class="Footer-copyright">© Copyright 2018 - Nebula.Tous droits réservés</p>
        <div class="Footer-logo-container">
            <div class="Footer-logo-facebook"></div>
            <div class="Footer-logo-twitter"></div>
        </div>

    </div>
</template>

<script>
    export default {
        name: 'nebu-footer',
        data() {
            return {}
        }
    }
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped lang="sass">
.Footer
    width: 100%
    height: 30vh
    position: absolute
    bottom: 2vh

    &-copyright
        color: white
        font-size: 1.6rem
        font-family: Roboto, sans-serif
        font-weight: 100
        width: 100%
        position: absolute
        bottom: 6vh
    &-logo-container
        width: 35vw
        height: 12vh
        display: flex
        z-index: 200000
        justify-content: space-around
        position: absolute
        left: 55vw
        bottom: 7vh

    &-logo-facebook
        width: 40px
        height: 40px
        background: url("./assets/img/facebook-logo-button.png") no-repeat
        background-size: cover
    &-logo-twitter
        width: 40px
        height: 40px
        background: url("./assets/img/twitter-logo-button.png") no-repeat
        background-size: cover

@media(min-width: 600px)
    .Footer
        width: 100%
        height: 3vh
        position: absolute
        bottom: 33px

        &-copyright
            color: #CDC1E1
            font-size: 1.6rem
            font-family: Roboto, sans-serif
            font-weight: 100
            bottom: 0
            left: 54px

        &-logo-container
            bottom: 0
            right: 54px
            left: auto
            width: 110px
            height: 5vh
            display: flex
            z-index: 200000
            justify-content: space-around
            position: absolute

        &-logo-facebook
            width: 40px
            height: 40px
            background: url("./assets/img/facebook-logo-button.svg") no-repeat
            background-size: cover
        &-logo-twitter
            width: 40px
            height: 40px
            background: url("./assets/img/twitter-logo-button.svg") no-repeat
            background-size: cover

</style>
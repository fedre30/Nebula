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
    height: 10vh
    background: darkgrey
    padding: 6rem
    position: relative

    &-copyright
        color: white
        font-size: 2rem
        font-family: Roboto, sans-serif
        font-weight: 100
        width: 45vw
        line-height: 3rem
    &-logo-container
        width: 30vw
        height: 12vh
        display: flex
        flex-direction: column
        z-index: 200000
        justify-content: space-around
        position: absolute
        right: 10vw
        top: 2vh

    &-logo-facebook
        width: 100px
        height: 100px
        background: url("./assets/img/facebook-logo-button.png") no-repeat
        background-size: cover
    &-logo-twitter
        width: 100px
        height: 100px
        background: url("./assets/img/twitter-logo-button.png") no-repeat
        background-size: cover

</style>
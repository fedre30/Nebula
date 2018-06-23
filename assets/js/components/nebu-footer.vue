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
    padding: 6rem
    position: absolute
    bottom: 2vh

    &-copyright
        color: white
        font-size: 2.5rem
        font-family: Roboto, sans-serif
        font-weight: 100
        width: 100%
        line-height: 3rem
        position: absolute
        bottom: 2vh
    &-logo-container
        width: 35vw
        height: 12vh
        display: flex
        z-index: 200000
        justify-content: space-around
        position: absolute
        left: 55vw
        bottom: 3vh

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
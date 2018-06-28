<template>
    <div class="Input">
        <div class="loupe"></div>
        <input type="search" placeholder="Rechercher">
    </div>
</template>

<script>
    export default {
        name: 'nebu-search',
        data() {
            return {}
        }
    }
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped lang="sass">
.Input
    width: 30vw
    height: 10vh
    position: absolute
    top: 5vh
    left: 15%
    z-index: 3
    .loupe
        background: url("./assets/img/loupe_desktop.svg") no-repeat
        background-size: cover
        width: 30px
        height: 30px
        position: absolute
        left: 15px
        top: 50px
        z-index: 1

    input[type=search]
        width: 40px
        height: 110px
        box-sizing: border-box
        border: 2px solid #CDC1E1
        border-bottom-right-radius: 50px
        border-bottom-left-radius: 50px
        font-size: 16px
        background-color: #CDC1E1
        padding: 12px 20px 12px 3rem
        -webkit-transition: width 0.4s ease-in-out
        transition: all 0.2s ease-in-out



    input[type=search]:focus
        width: 100%
        height: 50px
        border-radius: 30px
        position: absolute
        top: 40px
        left: 0

</style>
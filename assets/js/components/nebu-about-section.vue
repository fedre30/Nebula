<template>
    <div class="AboutSection">
        <div class="AboutSection-container">
            <div class="AboutSection-alien"></div>
            <h3 class="AboutSection-title">qui quoi comment?</h3>
            <p class="AboutSection-text">Si vous voulez en savoir plus sur ce concept lunaire et les personnes brillantes qui l’ont réalisé, c’est par ici  !</p>
            <div class="AboutSection-button">à propos</div>
        </div>

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
    &-container
        width: 80%
        height: 100vh
        margin: 0 auto
        position: relative
        padding-top: 30vh
    &-alien
        position: absolute
        width: 370px
        height: 400px
        background: url("./assets/img/alien.png") no-repeat
        background-size: cover
        top: 90px
        left: 250px
    &-title
        font-size: 6rem
        font-family: Airship, sans-serif
        text-transform: uppercase
        margin: 0 0 5rem 0
        line-height: 9rem
        text-align: left
        color: #1F0D87
    &-text
        font-size: 2.5rem
        font-weight: 500
        color: white
        text-align: left
        line-height: 5rem
        margin-bottom: 2rem
    &-button
        font-size: 3rem
        width: 300px
        height: 200px
        line-height: 3rem
        text-align: center
        margin: 10vh auto
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
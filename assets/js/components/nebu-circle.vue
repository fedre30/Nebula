<template>
    <div class="Circle">
        <router-link :to="{name: 'film'}">
            <h3 class="Circle-mistake">{{mistake}}</h3>
            <h4 class="Circle-title">{{title}}</h4>
            <div class="Circle-container">
            <div class="Circle-year">{{year}}</div>
            <div class="Circle-outer"></div>
                <div class="Circle-inner"></div>
                <div class="Circle-center"></div>
            </div>

        </router-link>
    </div>
</template>

<script>
    export default {
        name: 'nebu-circle',
        props: {
            year: {
                type: Number,
                required: true
            },
            title: {
                type: String,
                required: true
            },
            mistake: {
                type: String,
            },
            image: {
                type: String,
            }
        }
    }
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped lang="sass">

.Circle
    width: 80%
    height: 50vh
    margin: 0 auto
    text-align: center
    z-index: 10000000
    font-family: Roboto, sans-serif
    margin-bottom: 2vh
    &-container
        width: 100%
        height: 600px
        position: relative
        margin-top: 10vh

    &-mistake
        font-size: 3.5rem
        font-weight: 700
        color: white
        text-align: left
        line-height: 5rem
        margin-bottom: 2rem
    &-title
        font-size: 3rem
        font-weight: 300
        color: white
        text-align: left
        line-height: 4rem
        font-style: italic
    &-year
        font-size: 4.5rem
        margin-bottom: 15vh
        position: absolute
        color: white
        font-family: Airship, sans-serif
        left: 0
        top: 100px

    &-inner
        width: 450px
        height: 500px
        background: url("./assets/img/inner_circle.png") no-repeat
        background-size: cover
        position: absolute
        left: 150px
        top: -50px


    &-outer
        width: 600px
        height: 600px
        background: url("./assets/img/outer_circle.png") no-repeat
        background-size: cover
        position: absolute
        left: 100px
        bottom: 100px

    &-center
        width: 400px
        height: 400px
        border-radius: 300px
        margin: 0 auto
        background: url('./assets/img/space.jpg')



a
    text-decoration: none
</style>
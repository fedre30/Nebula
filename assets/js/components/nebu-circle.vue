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
        data(){
            return {
                show: true
            }
        },
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
    &-container
        width: 100%
        height: 600px
        position: relative
        margin-top: 10vh
        z-index: 999999

    &-mistake
        font-size: 1.2rem
        font-weight: 700
        color: white
        text-align: left
        line-height: 3rem
        margin-bottom: 0.5rem
    &-title
        font-size: 1rem
        font-weight: 300
        color: white
        text-align: left
        line-height: 3rem
        font-style: italic
    &-year
        font-size: 1.4rem
        margin-bottom: 15vh
        position: absolute
        color: white
        font-family: Airship, sans-serif
        left: 0
        top: 50px

    &-inner
        width: 180px
        height: 200px
        background: url("./assets/img/inner_circle.png") no-repeat
        background-size: cover
        position: absolute
        left: 60px
        top: -25px

    &-outer
        width: 250px
        height: 250px
        background: url("./assets/img/outer_circle.png") no-repeat
        background-size: cover
        position: absolute
        left: 30px
        top: -50px

    &-center
        width: 150px
        height: 150px
        border-radius: 300px
        margin: 0 auto
        background: url('./assets/img/space.jpg')

@media(min-width: 600px)
    .Circle
        width: 80%
        height: 55vh
        margin: 0 auto
        text-align: center
        z-index: 1
        font-family: Roboto, sans-serif
        position: relative
        &-container
            width: 100%
            height: 500px
            position: relative
            margin-top: 400px
            z-index: 999999

        &-mistake
            font-size: 1.2rem
            font-weight: 700
            color: #440BA2
            text-align: left
            line-height: 3rem
            margin-bottom: 0.5rem
            position: absolute
            bottom: 20vh
            left: 5vw
        &-title
            font-size: 1rem
            font-weight: 300
            color: #F33957
            text-align: left
            line-height: 3rem
            font-style: italic
            position: absolute
            bottom: 15vh
            left: 5vw
        &-year
            font-size: 2rem
            margin-bottom: 15vh
            position: absolute
            color: #F33957
            font-family: Airship, sans-serif
            left: 25px
            top: 30px
            z-index: 99999

        &-inner
            width: 190px
            height: 210px
            background: url("./assets/img/inner_desktop.png") no-repeat
            background-size: cover
            position: absolute
            left: 90px
            top: -30px

        &-outer
            width: 250px
            height: 250px
            background: url("./assets/img/outer_desktop.png") no-repeat
            background-size: cover
            position: absolute
            left: 70px
            top: -55px

        &-center
            width: 150px
            height: 150px
            border-radius: 300px
            position: absolute
            left: 120px
            top: -15
            background: url('./assets/img/space.jpg')
a
    text-decoration: none


@-webkit-keyframes turnRight
    from
        -webkit-transform: rotate(0deg)
        -o-transform: rotate(0deg)
        transform: rotate(0deg)

    to
        -webkit-transform: rotate(360deg)
        -o-transform: rotate(360deg)
        transform: rotate(360deg)

@keyframes turnRight
    0%
        -ms-transform: rotate(0deg)
        -moz-transform: rotate(0deg)
        -webkit-transform: rotate(0deg)
        -o-transform: rotate(0deg)
        transform: rotate(0deg)

    30%
        -ms-transform: rotate(360deg)
        -moz-transform: rotate(360deg)
        -webkit-transform: rotate(360deg)
        -o-transform: rotate(360deg)
        transform: rotate(360deg)
    60%
        -ms-transform: rotate(360deg)
        -moz-transform: rotate(360deg)
        -webkit-transform: rotate(360deg)
        -o-transform: rotate(360deg)
        transform: rotate(360deg)

    90%
        -ms-transform: rotate(0deg)
        -moz-transform: rotate(0deg)
        -webkit-transform: rotate(0deg)
        -o-transform: rotate(0deg)
        transform: rotate(0deg)
    100%
        -ms-transform: rotate(0deg)
        -moz-transform: rotate(0deg)
        -webkit-transform: rotate(0deg)
        -o-transform: rotate(0deg)
        transform: rotate(0deg)

.Circle:hover
    .Circle-inner
        animation: turnRight 3s ease infinite
    .Circle-outer
        animation: turnLeft 3s ease infinite





@-webkit-keyframes turnLeft
    from
        -webkit-transform: rotate(0deg)
        -o-transform: rotate(0deg)
        transform: rotate(0deg)

    to
        -webkit-transform: rotate(-360deg)
        -o-transform: rotate(-360deg)
        transform: rotate(-360deg)

@keyframes turnLeft
    0%
        -ms-transform: rotate(0deg)
        -moz-transform: rotate(0deg)
        -webkit-transform: rotate(0deg)
        -o-transform: rotate(0deg)
        transform: rotate(0deg)

    30%
        -ms-transform: rotate(-360deg)
        -moz-transform: rotate(-360deg)
        -webkit-transform: rotate(-360deg)
        -o-transform: rotate(-360deg)
        transform: rotate(-360deg)
    60%
        -ms-transform: rotate(-360deg)
        -moz-transform: rotate(-360deg)
        -webkit-transform: rotate(-360deg)
        -o-transform: rotate(-360deg)
        transform: rotate(-360deg)

    90%
        -ms-transform: rotate(0deg)
        -moz-transform: rotate(0deg)
        -webkit-transform: rotate(0deg)
        -o-transform: rotate(0deg)
        transform: rotate(0deg)
    100%
        -ms-transform: rotate(0deg)
        -moz-transform: rotate(0deg)
        -webkit-transform: rotate(0deg)
        -o-transform: rotate(0deg)
        transform: rotate(0deg)



</style>
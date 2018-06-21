<template>
    <div class="Question" ref="question">
        <div class="Question-container">
            <h3 class="Question-title">testez vous</h3>
            <p class="Question-text">Le corps humain gèle dans l’espace quand il est sans protection.</p>
            <div class="Question-answers-container">
                <div class="Question-answer">Vrai</div>
                <div class="Question-answer">Faux</div>
            </div>
            <div class="Question-invitation">Trop facile pour vous ? <br> Un quizz complet vous attend !</div>
            <router-link :to="{name: 'homepage'}">
                <div class="Question-button quizz">quizz</div>
            </router-link>
        </div>
    </div>
</template>

<script>
    export default {
        name: 'nebu-question',
        data() {
            return {}
        }
    }
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped lang="sass">
.Question
    width: 100%
    height: 100vh
    padding-top: 6rem
    position: relative
    z-index: 0
    font-family: Roboto, sans-serif
    margin-top: 15vh
    &-container
        width: 80%
        margin: 0 auto
        z-index: 2
        text-align: center

    &-title
        width: 100%
        font-size: 6rem
        margin-bottom: 7rem
        text-transform: uppercase
        font-family: Airship, sans-serif
        color: #1F0D87
        text-align: left

    &-text
        font-size: 3rem
        color: white
        text-align: left
        line-height: 5rem

    &-answers-container
        display: flex
        justify-content: space-between
        margin: 8rem auto
        width: 100%
    &-answer
        width: 300px
        height: 130px
        background-color: white
        font-size: 3rem
        margin-right: 3rem
        line-height: 130px
        color: #1F0D87
        font-weight: 700
        border-radius: 20px
        text-transform: uppercase

    &-invitation
        font-size: 3rem
        margin: 20vh 0 10vh 0
        color: white
        text-align: left
        line-height: 5rem
        font-style: italic
    &-button
        font-size: 3rem
        width: 300px
        height: 200px
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

a:hover
    color: #F13455





</style>
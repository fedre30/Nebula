<template>
    <div class="Answer">
        <h1 class="Nebula-title desktop">Nebula</h1>
        <div class="Answer-background"></div>
        <nebu-menu></nebu-menu>
        <div class="Answer-container">
        <h3 class="Answer-title">quizz</h3>
            <div class="Answer-answerContainer">
            <div class="Answer-question">Un trou noir se forme suite à:</div>
            <div class="Answer-item" v-for="(answer, index) in answers" :key="answer.name" :class="answer.styleClass">{{answer.name}}</div>
            <p class="Answer-text">Mais vous n’avez rien compris !
                Vous devriez relire la fiche qui en parle si vous voulez mon avis.</p>
                <router-link :to="{name: 'results'}"><div class="Answer-button">suivant</div></router-link>
            </div>

        </div>
        <nebu-footer></nebu-footer>
    </div>
</template>

<script>
    import nebuFooter from "../components/nebu-footer.vue";
    import nebuMenu from "../components/nebu-menu.vue";

    export default {
        components: {
            nebuMenu,
            nebuFooter},
        name: 'quiz-answer',
        data() {
            return {
                answers: [
                    {   name: 'L’explosion d’un astéroïde',
                        styleClass: 'wrong'
                    },

                    {
                        name: 'L’explosion d’une étoile',
                        styleClass: ''
                    },
                    {
                        name: 'Une faille dans l’espace',
                        styleClass: 'right'
                    }
                ]
            }
        }
    }
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped lang="sass">
.Answer
    width: 100%
    height: 100vh
    background: url("../assets/img/quiz_background.jpg") no-repeat
    background-size: cover
    position: relative
    font-family: Roboto, sans-serif
    overflow: hidden
    &-container
        width: 80%
        margin: 0 auto
        text-align: center
        padding-top: 2rem
    &-title
        font-size: 2rem
        font-family: Airship, sans-serif
        color: white
        text-align: left
        margin: 2rem 0 5rem 0
        text-transform: uppercase
    &-question
        width: 100%
        font-size: 1.5rem
        text-transform: uppercase
        color: #1F0D87
        font-style: italic
        font-weight: 700
        margin-bottom: 2rem
        text-align: left
        line-height: 3rem
    &-item
        width: 100%
        height: 50px
        font-size: 1rem
        font-weight: 700
        color: #CDC1E1
        margin-top: 0.5rem
        line-height: 50px
    &-text
        font-size: 1rem
        font-family: Roboto, sans-serif
        color: white
        text-align: left
        line-height: 2rem
        font-weight: 300
        font-style: italic
        margin-top: 1rem

    &-button
        width: 150px
        height: 50px
        font-size: 1rem
        line-height: 50px
        background: white
        font-weight: 700
        border-radius: 10px
        text-transform: uppercase
        text-align: center
        margin: 5vh auto
        color: #1F0D87
.wrong
    width: 100%
    height: 50px
    background-color: #CDC1E1
    color: #18165C
    text-align: left
    &:before
        display: inline-block
        content: ""
        background: url("../assets/img/error.svg") no-repeat
        width: 20px
        height: 20px
        background-size: cover
        margin: 0 1rem
        line-height: 50px


.right
    background-color: white
    color: #F13455
    text-align: left
    &:before
        display: inline-block
        content: ""
        background: url("../assets/img/tick.svg") no-repeat
        width: 20px
        height: 20px
        background-size: cover
        margin: 0 1rem
        line-height: 50px

a
    text-decoration: none

@media(min-width: 600px)
    .Answer
        font-family: Roboto, sans-serif
        position: relative
        width: 95vw
        height: 100vh
        background: none
        padding: 3rem
        margin: 0 auto
        overflow: hidden

        &-background
            width: 100%
            height: 50vh
            position: absolute
            bottom: 15vh
            right: 5vw
            background: url("../assets/img/quiz_background_desktop.png") no-repeat
            background-size: 100%
            box-sizing: border-box

        &-container
            width: 100vw
            height: 30vh
            margin: 0 auto
            text-align: center
            padding: 6rem
        &-title
            font-size: 2.5rem
            font-family: Airship, sans-serif
            color: #231189
            text-align: left
            margin: 2rem 0 6rem 0
            text-transform: uppercase
            position: absolute
            transform: rotate(90deg)
            right: 90px
            top: 230px
        &-question
            font-size: 1.5rem
            color: #FE5B3F
            font-style: italic
            font-weight: 900
            margin-bottom: 1rem
            text-transform: none
        &-text
            font-size: 1rem
            font-family: Roboto, sans-serif
            color: black
            text-align: left
            line-height: 2rem
            font-weight: 300
            font-style: italic
            margin-top: 2rem
        &-item
            width: 50%
            height: 50px
            font-size: 1rem
            font-weight: 700
            color: black
            margin-top: 0.5rem
            line-height: 50px

        &-button
            width: 150px
            height: 50px
            font-size: 1rem
            line-height: 50px
            background: white
            font-weight: 700
            border-radius: 10px
            border: transparent
            text-transform: uppercase
            text-align: center
            margin: 5vh 1vw
            color: #1F0D87
            box-shadow: 0 2px 4px 0 rgba(0,0,0,0.1)
            right: 3rem
            position: absolute
        &-answerContainer
            width: 70vw
            height: 35vh
            border-width: 15px
            border-style: solid
            border-image: linear-gradient(348deg, rgba(205, 193, 225, 1) 0%, rgba(243, 58, 86, 1) 100%)
            border-image-slice: 1
            padding: 4rem
            position: relative
            margin-top: 10vh
        .Nebula-title
            font-size: 3rem
            position: absolute
            left: 6rem
            top: 3rem
            font-family: Airship, sans-serif
            color: #F33A56
.wrong
    height: 50px
    background-color: #CDC1E1
    color: white
    text-align: left
    &:before
        display: inline-block
        content: ""
        background: url("../assets/img/cross_desktop.svg") no-repeat
        width: 20px
        height: 20px
        background-size: cover
        margin: 0 1rem
        line-height: 50px


.right
    background-color: #F13455
    color: white
    text-align: left
    &:before
        display: inline-block
        content: ""
        background: url("../assets/img/tick_desktop.svg") no-repeat
        width: 20px
        height: 20px
        background-size: cover
        margin: 0 1rem
        line-height: 50px



</style>
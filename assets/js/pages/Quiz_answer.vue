<template>
    <div class="Answer">
        <h1 class="Nebula-title desktop">Nebula</h1>
        <div class="Answer-background"></div>


        <div class="Answer-container">
            <h3 class="Answer-title">quizz</h3>
            <div class="Answer-question">{{answers[$route.params.count].Question}}</div>
            <div class="Answer-list">
                <div class="Answer-item wrong" :class="{'right': answers[$route.params.count].firstAnswerCorrection }"
                     v-if="answers[0]">{{answers[$route.params.count].firstAnswer}}
                </div>
                <div class="Answer-item wrong" :class="{'right': answers[$route.params.count].secondAnswerCorrection }"
                     v-if="answers[0]">{{answers[$route.params.count].secondAnswer}}
                </div>
                <div class="Answer-item wrong" :class="{'right': answers[$route.params.count].thirdAnswerCorrection}"
                     v-if="answers[0]">{{answers[$route.params.count].thirdAnswer}}
                </div>
            </div>
            <div class="Answer-bottom">
                <p class="Answer-text" :class="{'inactive' : isRightAnswer}">Mais vous n’avez rien compris ! <br/>
                    Vous devriez relire <router-link :to="{path: `/film/${parseInt($route.params.count)}`}"><span class="underline">la fiche</span></router-link> qui en parle si vous voulez mon avis.</p>
                <div class="Answer-button" v-on:click="test">suivant</div>
            </div>
        </div>
        <nebu-footer></nebu-footer>
        <nebu-menu></nebu-menu>
    </div>
</template>

<script>
    import ElementUI from 'element-ui'
    import nebuFooter from "../components/nebu-footer.vue";
    import nebuMenu from "../components/nebu-menu.vue";
    import DataStore from "../store.js";

    import axios from 'axios';

    export default {
        components: {
            nebuMenu,
            nebuFooter
        },
        name: 'quiz-answer',
        data() {
            return {
                answers: {},
                isRightAnswer: DataStore.isRightAnswer
            }
        },
        mounted() {
            axios
                .get('http://localhost:8000/api/quizz')
                .then(response => (this.answers = response.data))
        },
        methods: {
            test() {
                this.$router.replace(`/question/${parseInt(this.$route.params.count) + 4}`);
                if (this.answers[this.$route.params.count] === this.answers.length - 1) {
                    this.$router.replace('/results')
                }

            }
        }
    }
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped lang="sass">
    .inactive
        display: none
    .underline
        text-decoration: underline
        color: #fff
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
        &-title
            font-size: 3.6rem
            font-family: Airship, sans-serif
            color: white
            text-align: left
            margin: 5rem 0 0 0
            text-transform: uppercase
        &-question
            width: 100%
            font-size: 2.0rem
            text-transform: uppercase
            color: #1F0D87
            font-style: italic
            font-weight: 700
            margin-top: 10rem
            margin-bottom: 3rem
            text-align: left
            line-height: 2.4rem
        &-item
            width: 100%
            height: 50px
            font-size: 1.8rem
            font-weight: 700
            color: #CDC1E1
            margin-top: 0.5rem
            line-height: 50px
        &-text
            font-size: 1.8rem
            font-family: Roboto, sans-serif
            color: white
            text-align: left
            line-height: 2.7rem
            font-weight: 300
            font-style: italic
            margin-top: 1rem
        &-button
            width: 150px
            height: 50px
            font-size: 1.8rem
            line-height: 50px
            background: white
            font-weight: 700
            border-radius: 10px
            text-transform: uppercase
            text-align: center
            margin: 5vh auto
            color: #1F0D87

    .desktop
        display: none

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
            width: 100%
            height: 100vh
            background: none
            margin: 0 auto
            overflow: hidden

            &-background
                width: 100%
                height: 50vh
                position: absolute
                right: 54px
                bottom: 110px
                background: url("../assets/img/quiz_background_desktop.png") no-repeat
                background-size: 100%
                box-sizing: border-box

            &-container
                width: 100vw
                height: 30vh
                margin: 0 auto
                text-align: center
                padding-top: 0
            &-title
                font-size: 6rem
                font-family: Airship, sans-serif
                color: #231189
                text-align: left
                text-transform: uppercase
                position: absolute
                transform: rotate(90deg)
                right: 0
                margin: 0
                top: 180px
            &-question
                font-size: 3.2rem
                color: #FE5B3F
                font-style: italic
                font-weight: 900
                margin-bottom: 1rem
                text-transform: none
            &-text
                font-size: 2.1rem
                font-family: Roboto, sans-serif
                color: black
                text-align: left
                line-height: 3.3rem
                font-weight: 300
                font-style: italic
                margin-top: 2rem
            &-list
                margin: 49px 0
            &-item
                width: 38%
                height: 50px
                font-size: 2rem
                font-weight: 700
                color: black
                margin-top: 0.5rem
                line-height: 50px

            &-button
                width: 150px
                height: 50px
                font-size: 2rem
                line-height: 50px
                background: white
                font-weight: 700
                border-radius: 10px
                border: transparent
                text-transform: uppercase
                text-align: center
                color: #1F0D87
                box-shadow: 0 2px 4px 0 rgba(0,0,0,0.1)
                cursor: pointer
                z-index: 1
            &-answerContainer
                width: 78%
                height: 45vh
                border-width: 15px
                border-style: solid
                border-image: linear-gradient(348deg, rgba(205, 193, 225, 1) 0%, rgba(243, 58, 86, 1) 100%)
                border-image-slice: 1
                padding: 4rem
                position: relative
                margin: 165px auto
            .Nebula-title
                font-size: 3rem
                position: absolute
                left: 6rem
                top: 3rem
                font-family: Airship, sans-serif
                color: #F33A56
                z-index: 2
            .desktop
                display: block
            &-bottom
                display: flex
                justify-content: space-between

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
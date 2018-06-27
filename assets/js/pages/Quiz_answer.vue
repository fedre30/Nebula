<template>
    <div class="Answer">
        <nebu-menu></nebu-menu>
        <div class="Answer-container">
        <h3 class="Answer-title">quizz</h3>
            <div class="Answer-question" v-on:click="test"> un trou noir se forme suite à:</div>
            <div class="Answer-item wrong"   :class="{'right': answers[$route.params.count].firstAnswerCorrection }">{{answers[$route.params.count].firstAnswer}}</div>
            <div class="Answer-item wrong" :class="{'right': answers[$route.params.count].secondAnswerCorrection }" >{{answers[$route.params.count].secondAnswer}}</div>
            <div class="Answer-item wrong" :class="{'right': answers[$route.params.count].thirdAnswerCorrection}" >{{answers[$route.params.count].thirdAnswer}}</div>
            <p class="Answer-text" :class="{'inactive' : isRightAnswer}">Mais vous n’avez rien compris !
                Vous devriez relire la fiche qui en parle si vous voulez mon avis.</p>
            <router-link :to="{name: 'results'}"><div class="Answer-button">suivant</div></router-link>
        </div>
        <nebu-footer></nebu-footer>
    </div>
</template>

<script>
    import nebuFooter from "../components/nebu-footer.vue";
    import nebuMenu from "../components/nebu-menu.vue";
    import DataStore from "../store.js";

    import axios from 'axios';

    export default {
        components: {
            nebuMenu,
            nebuFooter},
        name: 'quiz-answer',
        data() {
            return {
                answers: {},
                isRightAnswer: DataStore.isRightAnswer
            }
        },
        mounted () {
            axios
                .get('http://localhost:8000/api/quizz')
                .then(response => (this.answers = response.data))
        }
    }
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped lang="sass">
.inactive
    display: none
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


</style>
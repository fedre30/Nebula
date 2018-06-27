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
        padding-top: 6rem
    &-title
        font-size: 6rem
        font-family: Airship, sans-serif
        color: white
        text-align: left
        padding-top: 4rem
        margin-bottom: 12rem
        text-transform: uppercase
    &-question
        font-size: 3rem
        text-transform: uppercase
        color: #1F0D87
        font-style: italic
        font-weight: 700
        margin-bottom: 5rem
        text-align: left
        width: 80%
        line-height: 5rem
    &-item
        width: 100%
        height: 100px
        font-size: 3rem
        font-weight: 700
        color: #CDC1E1
        margin-top: 2rem
        line-height: 100px
    &-text
        font-size: 2.5rem
        font-family: Roboto, sans-serif
        color: white
        text-align: left
        line-height: 4rem
        font-weight: 300
        font-style: italic
        margin-top: 6rem

    &-button
        width: 300px
        height: 130px
        font-size: 3rem
        line-height: 130px
        background: white
        font-weight: 700
        border-radius: 20px
        text-transform: uppercase
        text-align: center
        margin: 2vh auto
        color: #1F0D87
        z-index: 999999

.wrong
    width: 100%
    height: 100px
    background-color: #CDC1E1
    color: #18165C
    &:before
        display: inline-block
        content: ""
        background: url("../assets/img/error.svg") no-repeat
        width: 45px
        height: 45px
        background-size: cover
        margin-right: 3rem
        line-height: 100px


.right
    background-color: white
    color: #F13455
    &:before
        display: inline-block
        content: ""
        background: url("../assets/img/tick.svg") no-repeat
        width: 45px
        height: 45px
        background-size: cover
        margin-right: 3rem
        line-height: 100px

a
    text-decoration: none


</style>
<template>
    <div class="Quiz">
        <router-link :to="{name: 'home'}"><h1 class="Nebula-title desktop">Nebula</h1></router-link>
        <div class="Quiz-background"></div>
            <nebu-menu></nebu-menu>
            <div class="Quiz-container">
                <h3 class="Quiz-title">quizz</h3>
                <div class="Quiz-questionContainer">
                    <h4 class="Quiz-question">Un trou noir se forme suite à: </h4>
                    <form method="post">
                        <div class="Form-radio">
                            <p-radio class="p-round p-default Quiz-radio" v-for="(answer, index) in answers"
                                     name="radio">{{answer}}
                            </p-radio>
                            <div class="kurk desktop"></div>
                        </div>
                        <router-link :to="{name:'answer'}"><input class="Quiz-button" type="submit" value="valider"/>
                        </router-link>
                    </form>
    <div class="Quiz" >
        <nebu-menu></nebu-menu>
        <div class="Quiz-container">
            <h3 class="Quiz-title">quizz</h3>
        <h4 class="Quiz-question">un trou noir se forme suite à: </h4>
            <form method="post" >
                <div class="Form-radio" v-if="answers[0]" >
                    <p-radio class="p-round p-default Quiz-radio" name="radio" value="0" v-model="value">{{answers[$route.params.count].firstAnswer}}</p-radio>
                    <p-radio class="p-round p-default Quiz-radio" name="radio" value="1" v-model="value">{{answers[$route.params.count].secondAnswer}}</p-radio>
                    <p-radio class="p-round p-default Quiz-radio" name="radio" value="2" v-model="value">{{answers[$route.params.count].thirdAnswer}}</p-radio>
                </div>
                <router-link :to="{path: `/answer/${parseInt($route.params.count)}`}">
                    <input class="Quiz-button" type="submit" value="valider" v-on:click="save"/>
                </router-link>
            </form>
        </div>
        <nebu-footer />
    </div>
</template>

<script>
    import ElementUI from 'element-ui';
    import nebuFooter from "../components/nebu-footer.vue";
    import nebuMenu from "../components/nebu-menu.vue";
    import DataStore from "../store.js"

    import axios from 'axios';
    export default {
        components: {
            nebuMenu,
            nebuFooter
        },
        name: 'quiz-question',
        data () {
            return {
                value: [],
                answers: {}
            };
        },
        mounted () {
            axios
                .get('http://localhost:8000/api/quizz')
                .then(response => (this.answers = response.data))
        },
        methods : {
            save (){
                DataStore.saveAnswer = DataStore.goodAnswers;
            }
        },
        watch: {
            value: function() {

                if (this.value === '0'  && this.answers[0].firstAnswerCorrection ) {
                    DataStore.isRightAnswer = true;
                    DataStore.goodAnswers += 1;
                }else if (this.value === '1'  && this.answers[0].secondAnswerCorrection){
                    DataStore.isRightAnswer = true;
                    DataStore.goodAnswers += 1;
                }else if (this.value === '2'  && this.answers[0].thirdAnswerCorrection){
                    DataStore.isRightAnswer = true;
                    DataStore.goodAnswers += 1;
                }else{
                    DataStore.isRightAnswer = false;
                    DataStore.goodAnswers = DataStore.saveAnswer;
                }
                console.log(DataStore.saveAnswer, DataStore.goodAnswers);
            }
        }
    }
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style lang="sass">
.Quiz
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
        margin: 2rem 0 6rem 0
        text-transform: uppercase
    &-question
        width: 100%
        font-size: 1.5rem
        text-transform: uppercase
        color: #1F0D87
        font-style: italic
        font-weight: 700
        margin-bottom: 5rem
        text-align: left
        line-height: 3rem
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
    &-radio
        width: 100%
        font-size: 1rem
        color: white
        margin-bottom: 3rem
        text-align: left
    .desktop
        display: none

@media(min-width: 600px)
    .Quiz
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
            left: 3rem
            position: absolute

        &-radio
            width: 100%
            font-size: 1rem
            color: black
            margin: 1.5rem 0
            text-align: left
        .desktop
            display: block
        .Nebula-title
            font-size: 3rem
            position: absolute
            left: 6rem
            top: 3rem
            font-family: Airship, sans-serif
            color: #F33A56
        &-questionContainer
            width: 70vw
            height: 35vh
            border-width: 15px
            border-style: solid
            border-image: linear-gradient(348deg, rgba(205, 193, 225, 1) 0%, rgba(243, 58, 86, 1) 100%)
            border-image-slice: 1
            padding: 4rem
            position: relative
            margin-top: 10vh
        .kurk
            width: 350px
            height: 300px
            position: absolute
            bottom: 0
            right: 50px
            background: url("../assets/img/kurk.png") no-repeat
            background-size: cover


</style>
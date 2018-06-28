<template>
    <div class="Question" ref="question">
        <div class="Question-container">
            <h3 class="Question-title">testez-vous</h3>
            <p class="Question-text">{{homeQuestion[0].Question}}</p>
            <div class="Question-answers-container">
                <div class="Question-answer" v-on:click="checkAnswer" :value="true">Vrai</div>
                <div class="Question-answer" v-on:click="checkAnswer" :value="false">Faux</div>
            </div>
            <div class="Question-invitation">Trop facile pour vous ? <br> Un quizz complet vous attend !</div>
            <router-link :to="{path: 'question/0'}"><div class="Question-button quizz">quizz</div></router-link>

        </div>
    </div>
</template>

<script>
    import axios from 'axios';
    export default {
        name: 'nebu-question',
        data() {
            return {
                homeQuestion: {}
            }
        },
        mounted () {
            axios
                .get('http://localhost:8000/api/homeQuestions')
                .then(response => (this.homeQuestion = response.data))
        },
        methods: {
            checkAnswer(){
                if(this.homeQuestion[0].Answer === this.value){
                    this.$router.replace('film/4')
                }
                else{
                    this.$router.replace('film/4')
                }
            }
        }

    }
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped lang="sass">
.Question
    width: 100%
    height: 100vh
    position: relative
    z-index: 0
    font-family: Roboto, sans-serif
    &-container
        width: 80%
        margin: 0 auto
        z-index: 2
        text-align: center

    &-title
        width: 100%
        font-size: 2.3rem
        margin-bottom: 3.5rem
        text-transform: uppercase
        font-family: Airship, sans-serif
        color: #1F0D87
        text-align: left

    &-text
        font-size: 1.2rem
        color: white
        text-align: left
        line-height: 2rem

    &-answers-container
        display: flex
        justify-content: space-between
        margin: 2rem auto
        width: 100%
    &-answer
        width: 300px
        height: 50px
        background-color: white
        font-size: 1rem
        margin-right: 3rem
        line-height: 50px
        color: #1F0D87
        font-weight: 700
        border-radius: 10px
        text-transform: uppercase

    &-invitation
        font-size: 1.2rem
        margin: 20vh 0 3rem 0
        color: white
        text-align: left
        line-height: 2rem
        font-style: italic
    &-button
        font-size: 1rem
        width: 100px
        height: 50px
        line-height: 3rem
        text-align: center
        margin: 0 auto
        position: relative
        text-transform: uppercase
        display: block
        background: transparent
        color: white
        font-weight: 800
        z-index: 999999999


    &-button:before, &-button:after
        width: 100px
        left: 0
        height: 20px
        border: 2px solid white

    &-button:before
        position: absolute
        content: ''
        border-bottom: none
        -webkit-transform: perspective(15px) rotateX(7deg)
        -moz-transform: perspective(15px) rotateX(7deg)
        transform: perspective(15px) rotateX(10deg)
        top: 0

    &-button:after
        position: absolute
        top: 25px
        content: ''
        border-top: none
        -webkit-transform: perspective(15px) rotateX(-7deg)
        -moz-transform: perspective(15px) rotateX(-7deg)
        transform: perspective(15px) rotateX(-10deg)



a
    text-decoration: none

a:hover
    color: #F13455

@media(min-width: 600px)
    .Question
        width: 30vw
        height: 25vw
        border-radius: 1000px
        padding-top: 3rem
        font-family: Roboto, sans-serif
        position: absolute
        top: 70vh
        left: 40vw
        background: white
        &-container
            width: 80%
            margin: 5vh auto
            z-index: 2
            text-align: center


        &-title
            width: 100%
            font-size: 2rem
            margin: 2vh auto
            text-align: center

        &-text
            font-size: 1.2rem
            color: black
            text-align: center
            line-height: 2rem

        &-answers-container
            width: 100%
            margin: 0.5rem auto
            justify-content: center
        &-answer
            width: 120px
            height: 50px
            background: linear-gradient(90deg, rgba(205,193,225,1) 0%, rgba(156,130,198,1) 100%)
            font-size: 1rem
            line-height: 50px
            color: white
            font-weight: 700
            border-radius: 10px
            text-align: center
            margin: 0 auto

        &-invitation
            font-size: 1.2rem
            margin: 30vh 0 10vh 0
            color: white
            text-align: left
            line-height: 2rem
            font-style: italic
        &-button
            font-size: 1.2rem
            padding-left: 1rem
            padding-top: 0.3rem
            width: 100px
            height: 50px
            line-height: 1.2
            text-align: center
            margin: 0 auto
            position: relative
            text-transform: uppercase
            display: block
            background: transparent
            color: white
            font-weight: 800
            z-index: 1


        &-button:before, &-button:after
            width: 130px
            left: 0
            height: 30px
            border: 2px solid white

        &-button:before
            position: absolute
            content: ''
            border-bottom: none
            -webkit-transform: perspective(15px) rotateX(7deg)
            -moz-transform: perspective(15px) rotateX(7deg)
            transform: perspective(15px) rotateX(7deg)
            top: -20px

        &-button:after
            position: absolute
            top: 15px
            content: ''
            border-top: none
            -webkit-transform: perspective(15px) rotateX(-7deg)
            -moz-transform: perspective(15px) rotateX(-7deg)
            transform: perspective(15px) rotateX(-7deg)






</style>
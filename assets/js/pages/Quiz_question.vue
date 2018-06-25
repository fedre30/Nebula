<template>
    <div class="Quiz">
        <nebu-menu></nebu-menu>
        <div class="Quiz-container">
            <h3 class="Quiz-title">quizz</h3>
        <h4 class="Quiz-question">un trou noir se forme suite à: </h4>
            <form method="post">
                <div class="Form-radio"><p-radio class="p-round p-default Quiz-radio" v-for="(answer, index) in answers" name="radio">{{answer}}</p-radio></div>
                <router-link :to="{name:'answer'}"><input class="Quiz-button" type="submit" value="valider"/></router-link>
            </form>
        </div>
        <nebu-footer></nebu-footer>
    </div>
</template>

<script>
    import ElementUI from 'element-ui';
    import nebuFooter from "../components/nebu-footer.vue";
    import nebuMenu from "../components/nebu-menu.vue";

    export default {
        components: {
            nebuMenu,
            nebuFooter},
        name: 'quiz-question',
        data: function() {
            return {
                answers: [
                    'L’explosion d’un astéroïde',
                    'L’explosion d’une étoile',
                    'Une faille dans l’espace'
                ]
            };
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
        padding-top: 6rem
    &-title
        font-size: 6rem
        font-family: Airship, sans-serif
        color: white
        text-align: left
        padding-top: 4rem
        margin-bottom: 14rem
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
        margin: 5vh auto
        color: #1F0D87
    &-radio
        width: 100%
        font-size: 2.5rem
        color: white
        margin-bottom: 3rem
        text-align: left







</style>
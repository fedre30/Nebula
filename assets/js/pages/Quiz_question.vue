<template>
    <div class="Quiz">
        <div class="Quiz-container">
            <h3 class="Quiz-title">quizz</h3>
        <h4 class="Quiz-question">un trou noir se forme suite à: </h4>
            <form method="post">
            <el-radio-group>
                <el-radio class="el-radio" v-for="(answer, index) in answers" :label="answer"></el-radio>
            </el-radio-group>
            </form>
        </div>
        <nebu-footer></nebu-footer>
    </div>
</template>

<script>
    import ElementUI from 'element-ui';
    import nebuFooter from "../components/nebu-footer.vue";
    import ElRadioGroup from "../../../node_modules/element-ui/packages/radio/src/radio-group.vue";
    import ElRadio from "../../../node_modules/element-ui/packages/radio/src/radio-button.vue";

    export default {
        components: {
            ElRadioGroup,
            ElRadio,
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







</style>
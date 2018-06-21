<template>
    <div class="Question" ref="question">
        <div class="Question-container">
            <h3 class="Question-title">Question title</h3>
            <p class="Question-text">Lorem ipsum</p>
            <div class="Question-answers-container">
                <div class="Question-answer">Vrai</div>
                <div class="Question-answer">Faux</div>
            </div>
            <div class="Question-invitation">Testez notre quiz</div>
            <a href="#">
                <div class="Question-button">Quiz</div>
            </a>
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
    height: 150vh
    padding-top: 6rem
    position: relative
    z-index: 0
    &-container
        width: 90%
        margin: 0 auto
        text-align: center
        z-index: 2
        position: absolute

    &-title
        font-size: 6rem
        margin-bottom: 7rem
    &-text
        font-size: 4rem
    &-answers-container
        display: flex
        justify-content: center
        margin: 8rem auto
    &-answer
        width: 250px
        height: 100px
        background-color: #1cb1f2
        font-size: 3rem
        margin-right: 3rem
        line-height: 100px
    &-invitation
        font-size: 3rem
        margin-bottom: 6rem
    &-button
        font-size: 2rem
        width: 150px
        height: 150px
        border-radius: 200px
        background-color: #1cb1f2
        line-height: 150px
        margin: 0 auto




</style>
<template>
    <div class="Results">
        <nebu-menu></nebu-menu>
        <div class="Results-container">
            <h3 class="Results-title">quizz</h3>
            <h4 class="Results-subtitle">résultats</h4>
            <p class="Results-text">Waou trop balèze !  Vous avez bien répondu à <span class="bold">{{goodAnswers}} questions sur 20.</span></p>
            <p class="Results-text">Seulement  <span class="bold">{{rate}}%</span> des utilisateurs ont réussi un tel exploit. </p>
            <router-link :to="{name: 'question'}"><div class="Results-button">réssayer</div></router-link>
        </div>
        <nebu-footer></nebu-footer>
    </div>
</template>

<script>
    import nebuMenu from "../components/nebu-menu.vue";
    import nebuFooter from "../components/nebu-footer.vue";

    export default {
        components: {
            nebuFooter,
            nebuMenu},
        name: 'quiz-results',
        data() {
            return {
                goodAnswers: 18,
                rate: 4
            }
        }
    }
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped lang="sass">
.Results
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
    &-subtitle
        font-size: 3rem
        text-transform: uppercase
        color: #1F0D87
        font-style: italic
        font-weight: 700
        margin-bottom: 5rem
        text-align: left
        width: 80%
        line-height: 5rem
    &-text
        font-size: 2.5rem
        font-family: Roboto, sans-serif
        color: white
        text-align: left
        line-height: 4rem
        font-weight: 500
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
        margin: 5vh auto
        color: #1F0D87

    .bold
        font-weight: 700px
        color: #CDC1E1

a
    text-decoration: none
</style>
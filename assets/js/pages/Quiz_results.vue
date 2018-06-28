<template>
    <div class="Results">
        <nebu-menu></nebu-menu>
        <div class="Results-container">
            <h3 class="Results-title">quizz</h3>
            <h4 class="Results-subtitle">résultats</h4>
            <p class="Results-text">Waou trop balèze !  Vous avez bien répondu à <span class="bold">{{goodAnswers}} questions sur 10.</span></p>
            <p class="Results-text">Seulement  <span class="bold">{{rate}}%</span> des utilisateurs ont réussi un tel exploit. </p>
            <router-link :to="{name: 'question'}"><div class="Results-button">réssayer</div></router-link>
        </div>
        <nebu-footer></nebu-footer>
    </div>
</template>

<script>
    import nebuMenu from "../components/nebu-menu.vue";
    import nebuFooter from "../components/nebu-footer.vue";
    import DataStore from "../store.js";

    export default {
        components: {
            nebuFooter,
            nebuMenu},
        name: 'quiz-results',
        data() {
            return {
                goodAnswers: DataStore.goodAnswers,
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
        padding-top: 4rem
    &-title
        font-size: 2rem
        font-family: Airship, sans-serif
        color: white
        text-align: left
        margin: 2rem 0 3rem 0
        text-transform: uppercase
    &-subtitle
        width: 100%
        font-size: 1.5rem
        text-transform: uppercase
        color: #1F0D87
        font-style: italic
        font-weight: 700
        margin-bottom: 5rem
        text-align: left
        line-height: 3rem
    &-text
        font-size: 1rem
        font-family: Roboto, sans-serif
        color: white
        text-align: left
        line-height: 2rem
        font-weight: 500
        margin-top: 2rem
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

    .bold
        font-weight: 700px
        color: #CDC1E1

a
    text-decoration: none
</style>
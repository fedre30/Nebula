<template>
    <div class="Results">
        <router-link :to="{name: 'home'}"><h1 class="Nebula-title desktop">Nebula</h1></router-link>
        <div class="Results-background"></div>
        <nebu-menu></nebu-menu>
        <div class="Results-container">
            <h3 class="Results-title">quizz</h3>
            <div class="Results-resultsContainer">
                <h4 class="Results-subtitle">Résultats</h4>
                <p class="Results-text">Waou trop balèze ! <br/>  Vous avez bien répondu à <span class="bold">{{goodAnswers}} questions sur 10.</span></p>
                <p class="Results-text">Seulement  <span class="bold">{{rate}}%</span> des utilisateurs ont réussi un tel exploit. </p>
                <router-link :to="{name: 'question'}">
                    <div class="Results-button">réssayer</div>
                </router-link>
            </div>
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
        margin-bottom: 2rem
        font-weight: 500
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

@media(min-width: 600px)
    .Results
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
            right: 7%
            margin: 0
            top: 180px
        &-subtitle
            font-size: 3.2rem
            color: #FE5B3F
            font-style: italic
            font-weight: 900
            margin-bottom: 51px
            text-transform: none
        &-text
            font-size: 2.1rem
            font-family: Roboto, sans-serif
            color: black
            text-align: left
            line-height: 3.3rem
            font-style: italic
            margin-top: 30px
            font-weight: 500
        &-item
            width: 50%
            height: 50px
            font-size: 1rem
            font-weight: 700
            color: black
            margin-top: 0.5rem
            line-height: 50px

        &-button
            width: 25%
            height: 70px
            font-size: 2rem
            display: flex
            align-items: center
            justify-content: center
            line-height: 50px
            background: white
            font-weight: 700
            border-radius: 10px
            border: transparent
            text-transform: uppercase
            margin: 5vh 1vw
            color: #1F0D87
            box-shadow: 0 2px 4px 0 rgba(0,0,0,0.1)
            right: 3rem
            bottom: 0
            position: absolute
        &-resultsContainer
            width: 65%
            height: 45vh
            border-width: 15px
            border-style: solid
            border-image: linear-gradient(348deg, rgba(205, 193, 225, 1) 0%, rgba(243, 58, 86, 1) 100%)
            border-image-slice: 1
            position: relative
            margin: 165px auto
            padding: 4rem
        .Nebula-title
            font-size: 3rem
            position: absolute
            left: 6rem
            top: 3rem
            font-family: Airship, sans-serif
            color: #F33A56
        .bold
            font-weight: 700
            color: #F33A56

</style>
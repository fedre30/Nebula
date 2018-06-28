<template>
    <div class="Contribution">
        <nebu-menu></nebu-menu>
        <div class="Contribution-container">
            <h3 class="Contribution-title">suggestions</h3>
            <h4 class="Contribution-subtitle">merci de votre contribution !</h4>
            <p class="Contribution-text">Elle nous est précieuse car nous croyons à la valeur ajoutée que peux apporter une communauté active.</p>
            <p class="Contribution-text">Nous allons étudier votre proposition. Si vous voulez être prévenu lorsqu’elle sera publiée, laissez-nous votre mail !</p>
            <input type="text" class="Contribution-inputText" placeholder="email">
            <input class="Contribution-submit" type="submit" value="valider"/>
            <p class="Contribution-text">Si une seule contribution ne vous suffit pas et que vous souhaiter en faire une autre, c’est par ici.</p>
            <router-link :to="{name: 'form'}"><div class="Contribution-button">contribuer</div></router-link>
        </div>
        <nebu-footer></nebu-footer>
    </div>
</template>

<script>
    import nebuFooter from "../components/nebu-footer.vue";
    import nebuMenu from "../components/nebu-menu.vue";

    export default {
        components: {
            nebuMenu,
            nebuFooter},
        name: 'contribution',
        data() {
            return {}
        }
    }
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped lang="sass">
.Contribution
    width: 100%
    height: 130vh
    background: url("../assets/img/contribution_background.jpg") no-repeat
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
    &-text
        font-size: 1rem
        font-family: Roboto, sans-serif
        color: white
        text-align: left
        line-height: 2rem
        font-weight: 300
        font-style: italic
        margin-bottom: 1rem
        margin-top: 1rem
    &-subtitle
        width: 100%
        font-size: 1.2rem
        text-transform: uppercase
        color: #1F0D87
        font-style: italic
        font-weight: 700
        margin-bottom: 5rem
        text-align: left
        line-height: 3rem
    &-submit
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
    &-inputText
        background: transparent
        border: 2px solid #CDC1E1
        width: 70vw
        height: 20px
        font-size: 1rem
        color: #CDC1E1
        margin-bottom: 1rem
        padding: 1rem
    &-button
        font-size: 0.8rem
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
</style>
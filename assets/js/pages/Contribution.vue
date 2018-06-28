<template>
    <div class="Contribution">
        <div class="Contribution-background">
            <router-link :to="{name: 'home'}"><h1 class="Nebula-title desktop">Nebula</h1></router-link>
            <nebu-menu></nebu-menu>
            <div class="Contribution-container">
                <h3 class="Contribution-title none">suggestions</h3>
                <div class="Contribution-thanks">
                    <h4 class="Contribution-subtitle">Merci de votre contribution !</h4>
                    <p class="Contribution-text">
                        Elle nous est précieuse car nous croyons à la valeur ajoutée que peux apporter une communauté active.</p>
                    <p class="Contribution-text">
                        Nous allons étudier votre proposition. Si vous voulez être prévenu lorsqu’elle sera publiée, laissez-nous votre mail !</p>
                    <input type="text" class="Contribution-inputText" placeholder="email">
                    <input class="Contribution-submit" type="submit" value="envoyer"/>
                </div>
                <div class="Contribution-invitation">
                    <div class="Contribution-woman desktop"></div>
                    <div class="Contribution-shape desktop">
                <p class="Contribution-text textShape">
                    Si une seule contribution ne vous suffit pas et que vous souhaiter en faire une autre, c’est par ici.</p>
                <router-link :to="{name: 'form'}">
                    <div class="Contribution-button">contribuer</div>
                </router-link>
                    </div>
                </div>
            </div>
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
            nebuFooter
        },
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
        .desktop
            display: none

    a
        text-decoration: none

    @media(min-width: 600px)
        .Contribution
            font-family: Roboto, sans-serif
            position: relative
            width: 95vw
            height: 160vh
            background: none
            padding: 3rem
            margin: 0 auto
            overflow: hidden

            &-background
                width: 100%
                height: 150vh
                background: url("../assets/img/contribution_background_desktop.png") no-repeat
                background-size: 100%
                box-sizing: border-box

            &-container
                width: 100vw
                height: 30vh
                margin: 0 auto
                text-align: center
                padding: 6rem
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
                margin: 0 auto
                width: 60%

            &-subtitle
                width: 100%
                font-size: 1.5rem
                text-transform: none
                color: black
                font-style: italic
                font-weight: 700
                margin: 3rem 0 2rem 0
                text-align: center
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
                width: 50%
                height: 10px
                font-size: 1rem
                color: #CDC1E1
                margin: 1rem auto
                padding: 0.5rem
                border-radius: 4px
                display: block
            &-button
                font-size: 0.8rem
                width: 100px
                height: 50px
                line-height: 3rem
                text-align: center
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
            .Nebula-title
                font-size: 3rem
                position: absolute
                left: 6rem
                top: 6rem
                font-family: Airship, sans-serif
                color: #F33A56
            .desktop
                display: block
            .none
                display: none
            &-thanks
                width: 600px
                height: 600px
                font-family: Roboto, sans-serif
                background: linear-gradient(348deg, rgba(242,56,85,1) 0%, rgba(255,90,66,1) 100%)
                position: absolute
                top: 15vh
                left: 20vw
                border-radius: 500px
                padding: 1rem
            &-invitation
                width: 490px
                height: 400px
                padding: 7rem
            &-shape
                width: 550px
                height: 450px
                background: url('../assets/img/shape_contribution.png') no-repeat
                background-size: cover
                position: absolute
                bottom: 550px
                right: 350px
            .textShape
                margin-top: 6rem
                margin-bottom: 3rem
            &-woman
                width: 300px
                height: 400px
                background: url('../assets/img/thanks.png') no-repeat
                background-size: cover
                position: absolute
                top: 300px
                right: 400px


</style>
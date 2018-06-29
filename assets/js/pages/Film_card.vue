<template>
    <div class="Film">
        <div class="Film-background">
            <router-link :to="{name: 'home'}"><h1 class="Nebula-title desktop">Nebula</h1></router-link>
            <div class="Film-container">
                <h2 class="Film-title">{{fact.mainTitle}}</h2>
                <section class="Film-intro">
                    <h4 class="Film-subtitle">{{fact.videoDescriptionTitle}}</h4>
                    <p class="Film-text">
                        {{fact.videoDescriptionText}}
                    </p>
                </section>
            </div>

            <div class="Film-video">
                <youtube :video-id="fact.videoSrc" ref="youtube" @playing="playing" :width="width" :height="height"></youtube>
            </div>
            <div class="Film-container">
                <section class="Film-mistake">
                    <h4 class="Film-subtitle">{{fact.explanationTitle}} </h4>
                    <p class="Film-text">
                        {{fact.explanationText}}
                    </p>
                </section>
                <section class="Film-fact">
                    <h4 class="Film-subtitle">{{fact.scientificFactTitle}}</h4>
                    <p class="Film-text">
                        {{fact.scientificFactText}}</p>
                </section>
            </div>
        </div>
        <nebu-menu></nebu-menu>
        <nebu-footer></nebu-footer>
    </div>
</template>

<script>
    import nebuFooter from "../components/nebu-footer.vue";
    import nebuMenu from "../components/nebu-menu.vue";

    import axios from 'axios';


    export default {
        components: {
            nebuMenu,
            nebuFooter},
        name: 'Film_card',
        data() {
            return {
                width: 900,
                height: 700,
                fact: {}
            }
        },
        methods: {
            playVideo() {
                this.player.playVideo()
            },
            playing() {
                console.log('\o/ we are watching!!!')
            }
        },
        computed: {
            player () {
                return this.$refs.youtube.player
            }
        },
        created() {
            this.fetchData()
        },
        mounted () {
            axios
                .get('/api/facts/' + this.$route.params.id + '/')
                .then(response => (this.fact = response.data))
        },
        watch: {
            '$route': 'fetchData'
        }
    }
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped lang="sass">
.Film
    font-family: Roboto, sans-serif
    overflow: hidden
    position: relative
    width: 100vw
    height: 300vh
    background: url("../assets/img/background_film.jpg") no-repeat
    background-size: cover

    &-container
        width: 80%
        margin: 0 auto
        text-align: center
        padding-top: 6rem
    &-title
        font-size: 2rem
        font-family: Airship, sans-serif
        margin: 4rem 0
        color: #CDC1E1
    &-subtitle
        font-size: 1.5rem
        margin: 15vh 0 3rem 0
        text-transform: uppercase
        color: #F13455
        font-style: italic
        text-align: left
        font-weight: 700
    &-text
        font-size: 1rem
        color: #18165C
        line-height: 2rem
        text-align: left
        margin: 3rem 0
    &-video
        width: 100vw
        margin: 5vh auto
        text-align: center
    .desktop
        display: none
@media(min-width: 600px)
    .Film
        font-family: Roboto, sans-serif
        position: relative
        width: 95vw
        height: 355vh
        background: none
        padding: 3rem
        margin: 0 auto
        overflow: hidden

        &-background
            width: 100%
            height: 345vh
            background: url("../assets/img/film_background_desktop.png") no-repeat
            background-size: 100%
            box-sizing: border-box

        &-container
            width: 100vw
            margin-left: 148px
            text-align: center
            padding: 2rem
        &-title
            font-size: 6rem
            line-height: 8.6rem
            font-family: Airship, sans-serif
            margin-bottom: 130px
            color: #231189
            text-align: left
            width: 75%
        &-subtitle
            font-size: 3.2rem
            margin: 15vh 0 3rem 0
            text-transform: uppercase
            color: #FE5B3F
            font-style: italic
            text-align: left
            font-weight: 900
        &-text
            font-size: 2.1rem
            color: #18165C
            line-height: 3.3rem
            text-align: left
            margin: 3rem 0
        &-video
            width: 80%
            text-align: center
        &-intro
            width: 48.6%
        &-mistake
            width: 48.6%
            margin-left: 500px
        &-fact
            margin-top: 20%
            width: 45.8%
        .Nebula-title
            font-size: 3rem
            position: absolute
            left: 6rem
            top: 6rem
            font-family: Airship, sans-serif
            color: white
        .desktop
            display: block
</style>
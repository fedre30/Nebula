<template>
    <div class="Film">
        <div class="Film-container">
            <h2 class="Film-title">{{fact.mainTitle}}</h2>
            <section class="Film-intro">
                <h4 class="Film-subtitle">{{fact.videoDescriptionTitle}}</h4>
                <p class="Film-text">
                    {{fact.videoDescriptionText}}
                </p>
            </section>
        </div>
        <nebu-menu></nebu-menu>
            <div class="Film-video">
                <youtube :video-id="videoId" ref="youtube" @playing="playing" :width="width" :height="height"></youtube>
            </div>
        <div class="Film-container">
            <section class="Film-mistake">
                <h4 class="Film-subtitle">{{fact.explanationTitle}}</h4>
                <p class="Film-text">
                    {{fact.explanationText}}</p>
            </section>
            <section class="Film-fact">
                <h4 class="Film-subtitle">{{fact.scientificFactTitle}}</h4>
                <p class="Film-text">
                    {{fact.scientificFactText}}</p>
            </section>
        </div>
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
                videoId: 'm4JAgWk1PcM',
                width: 1000,
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
                .get('http://localhost:8000/api/facts/' + this.$route.params.id + '/')
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
        font-size: 6rem
        font-family: Airship, sans-serif
        margin: 8rem 0
        color: #CDC1E1
    &-subtitle
        font-size: 3rem
        margin: 15vh 0 3rem 0
        text-transform: uppercase
        color: #F13455
        font-style: italic
        text-align: left
        font-weight: 700
    &-text
        font-size: 2.5rem
        color: #18165C
        line-height: 4rem
        text-align: left
        margin: 3rem 0
        font-weight: 500
    &-video
        width: 100vw
        margin: 5vh auto
        text-align: center
        height: 20vh




</style>
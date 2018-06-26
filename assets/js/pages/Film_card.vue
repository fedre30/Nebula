<template>
    <div class="Film">
        <div class="Film-background">
        <div class="Film-container">
            <h2 class="Film-title"><!--{{fact.mainTitle}}-->LE son dans l’espace</h2>
            <section class="Film-intro">
                <h4 class="Film-subtitle"><!--{{fact.videoDescriptionTitle}}-->Dans Star Wars, La menace fantôme</h4>
                <p class="Film-text">
                    <!--{{fact.videoDescriptionText}}-->
                    Beaucoup d'explosions, des tirs de vaisseaux dans un ciel étoilé.
                    L’espace, dans Star Wars, est d’ailleurs aussi bruyant que sur Terre !
                </p>
            </section>
        </div>
        <nebu-menu></nebu-menu>
            <div class="Film-video">
                <youtube :video-id="fact.videoSrc" ref="youtube" @playing="playing" :width="width" :height="height"></youtube>
            </div>
        <div class="Film-container">
            <section class="Film-mistake">
                <h4 class="Film-subtitle"><!--{{fact.explanationTitle}}-->Le son dans l’espace au cinéma </h4>
                <p class="Film-text">
                    <!--{{fact.explanationText}}-->En effet si la SF tend vers de plus en plus de réalisme, il y a quelque chose qui ne change pas: Les bruitages. Pourtant de nos jours tout le monde sait que le son ne peut se propager dans le vide spatial.  Dans Star Wars comme dans beaucoup de films de science-fiction, l’espace bruyant est souvent plus esthétiques que scientifiques. Et oui, car le son participe autant que l’image à la narration, il nous sert à nous représenter la géographie d’une scène, il créait du hors-champ, pose une ambiance,..
                </p>
            </section>
            <section class="Film-fact">
                <h4 class="Film-subtitle"><!--{{fact.scientificFactTitle}}-->Les faits scientifiques</h4>
                <p class="Film-text">
                    <!--{{fact.scientificFactText}}-->La lumière est « une onde électromagnétique » alors que le son est une onde mécanique. La première peut se propager même dans le vide, alors que la seconde ne le peut pas.

                    Le son qui parvient à nos oreilles est une onde, c’est-à-dire un déplacement d’énergie, sans déplacement de matière, de même que la lumière. Mais, et c’est là que se situe toute la différence, l’onde sonore a besoin d’un « support » pour se propager ; contrairement à la lumière qui se déplace facilement dans le vide, car elle est elle-même une particule : le photon.

                    Le son lui ne peut se déplacer que de molécule à molécule, par proximité. Pour se propager il lui faut réaliser une succession de compressions et de dilatations des corps, du milieu dans lequel il évolue. Il faut donc que ce milieu soit composé de quelque chose, d’une matière qu’elle soit solide, liquide ou gazeuse.

                    Or vous le savez dans l’espace la densité de matière est très faible, beaucoup trop faible pour que la matière puisse être utilisée par le son. Il a en effet mille fois plus de particules par centimètre  cube sur la Terre que dans l’espace.  Ce qui explique le silence absolu. Les explosions dans l’espace se font donc en silence !</p>
            </section>
        </div>
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
        font-weight: 500
    &-video
        width: 100vw
        margin: 5vh auto
        text-align: center
        height: 30vh
@media(min-width: 600px)
    .Film
        font-family: Roboto, sans-serif
        position: relative
        width: 95vw
        height: 390vh
        background: none
        padding: 3rem
        margin: 0 auto
        overflow: hidden

        &-background
            width: 100%
            height: 500vh
            background: url("../assets/img/film_background_desktop.png") no-repeat
            background-size: 100%
            box-sizing: border-box

        &-container
            width: 100vw
            height: 30vh
            margin: 0 auto
            text-align: center
            padding: 6rem
        &-title
            font-size: 4rem
            font-family: Airship, sans-serif
            margin: 4rem 0
            color: #231189
            text-align: left
        &-subtitle
            font-size: 1.5rem
            margin: 15vh 0 3rem 0
            text-transform: uppercase
            color: #FE5B3F
            font-style: italic
            text-align: left
            font-weight: 900
        &-text
            font-size: 1rem
            color: #18165C
            line-height: 2rem
            text-align: left
            margin: 3rem 0
            font-weight: 500
        &-video
            width: 100vw
            margin: 10vh auto 20vh auto
            text-align: center
            height: 30vh
        &-mistake
            width: 50%
            margin: 40vh 30vw
        &-fact
            width: 45%
</style>
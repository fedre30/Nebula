<template>
    <div class="List">
        <div class="List-container">
            <h3 class="List-title">science &amp; cinema</h3>
            <nebu-film v-for="(film, index) in films" :key="film.title" :mistake="film.mistake" :title="film.title" :year="film.year"></nebu-film>
        </div>
        <nebu-footer></nebu-footer>
    </div>
</template>

<script>
    import nebuFilm from "../components/nebu_film.vue";
    import nebuFooter from "../components/nebu_footer.vue";

    export default {
        components: {
            nebuFooter,
            nebuFilm},
        name: 'nebu-films-list',
        data() {
            return {
                films: [
                    {
                        mistake: 'Le corps gèle dans l’espace',
                        title: 'Les Gardiens de la Galaxie',
                        year: '2014'
                    },
                    {
                        mistake: 'Le corps gèle dans l’espace',
                        title: 'Les Gardiens de la Galaxie 2',
                        year: '2014'
                    }
                ]
            }
        }
    }
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped lang="sass">
.List
    position: relative
    width: 100%
    height: 270vh
    background: url("../assets/img/background_list.jpg") no-repeat
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
        margin: 8rem 0 14rem 0
        text-transform: uppercase

</style>
<template>
    <div class="List">
        <nebu-filters></nebu-filters>
        <nebu-menu></nebu-menu>
        <div class="List-container">
            <h3 class="List-title">science <span class="and">&</span> cinema</h3>
            <nebu-film v-for="(movie, index) in movies" :key="movie.title" :title="movie.title"  v-if="index < 7"></nebu-film>
        </div>

        <div class="List-tips">
            <div class="List-alien"></div>
            <h3 class="List-tips-title">suggestions</h3>
            <p class="List-tips-text">Un film manque à l’appel ?  Vous pouvez nous envoyer  vos suggestions lumineuses !</p>
            <div class="List-button">contribuer</div>
        </div>
        <nebu-footer></nebu-footer>
    </div>
</template>

<script>
    import nebuFilm from "../components/nebu-film.vue";
    import nebuFooter from "../components/nebu-footer.vue";
    import nebuMenu from "../components/nebu-menu.vue";
    import nebuFilters from "../components/nebu-filters.vue";

    import axios from 'axios';

    export default {
        components: {
            nebuFilters,
            nebuMenu,
            nebuFooter,
            nebuFilm},
        name: 'nebu-films-list',
        data() {
            return {
                movies: {}
            }
        },

        mounted () {
            axios
                .get('http://localhost:8000/api/movies')
                .then(response => (this.movies = response.data))

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
    font-family: Roboto, sans-serif
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
        margin: 8rem 0 14rem 0
        text-transform: uppercase
    &-tips
        width: 80%
        height: 30vh
        position: absolute
        left: 10%
        bottom: 40vh
    &-alien
        position: absolute
        width: 200px
        height: 500px
        background: url("./assets/img/alien2.png") no-repeat
        background-size: cover
        right: -10vw
        top: -15vh

    &-tips-title
        font-size: 3rem
        text-transform: uppercase
        color: #1F0D87
        font-style: italic
        text-align: left
        font-weight: 700
    &-tips-text
        font-size: 2.7rem
        color: white
        line-height: 4.3rem
        text-align: left
        margin: 3rem 0
        width: 80%

    &-button
        font-size: 2.5rem
        width: 300px
        height: 200px
        line-height: 3rem
        text-align: center
        margin: 10vh auto
        position: relative
        text-transform: uppercase
        display: block
        background: transparent
        color: white
        font-weight: 800


    &-button:before, &-button:after
        width: 290px
        left: 0
        height: 65px
        border: 7px solid white

    &-button:before
        position: absolute
        content: ''
        border-bottom: none
        -webkit-transform: perspective(15px) rotateX(5deg)
        -moz-transform: perspective(15px) rotateX(5deg)
        transform: perspective(15px) rotateX(5deg)
        top: -50px

    &-button:after
        position: absolute
        top: 40px
        content: ''
        border-top: none
        -webkit-transform: perspective(15px) rotateX(-5deg)
        -moz-transform: perspective(15px) rotateX(-5deg)
        transform: perspective(15px) rotateX(-5deg)

a
    text-decoration: none





.and
    font-family: Futura, sans-serif

</style>
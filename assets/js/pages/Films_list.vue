<template>
    <div class="List">
        <div class="List-background">
        <router-link :to="{name: 'home'}"><h1 class="Nebula-title desktop">Nebula</h1></router-link>
        <nebu-filters></nebu-filters>
        <nebu-menu></nebu-menu>
        <div class="List-container">
            <h3 class="List-title">science <span class="and">&</span> cinema</h3>
            <nebu-film v-for="(movie, index) in movies" :key="movie.title" :title="movie.title" :mistake="movie.mistake" :year="movie.year" v-if="index < 7">
                <router-link :to="{name: 'film', params: movie.id}"></router-link>
            </nebu-film>
        </div>

        <div class="List-tips">
            <div class="List-alien mobile"></div>
            <h3 class="List-tips-title">suggestions</h3>
            <p class="List-tips-text">Un film manque à l’appel ?  Vous pouvez nous envoyer  vos suggestions lumineuses !</p>
            <router-link :to="{name: 'form'}"><div class="List-button">contribuer</div></router-link>
        </div>
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
                movies: [
                    {
                        title: 'Gardiens de la galaxie',
                        mistake: 'Lorem ipsum',
                        year: 2014
                    },
                    {
                        title: 'Gardiens de la galaxie 2',
                        mistake: 'Lorem ipsum',
                        year: 2014
                    },
                    {
                        title: 'Gardiens de la galaxie 3',
                        mistake: 'Lorem ipsum',
                        year: 2014
                    },
                ]

            }
        },

        mounted () {
            /*axios
                .get('http://localhost:8000/api/movies')
                .then(response => (this.movies = response.data))
                */
        },

    }
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped lang="sass">
.List
    position: relative
    width: 100%
    height: 270vh
    background: url("../assets/img/background_list.jpg") no-repeat
    background-size: cover
    overflow: hidden
    font-family: Roboto, sans-serif
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
        margin: 2rem 0 8rem 0
        text-transform: uppercase
    &-tips
        width: 80%
        height: 30vh
        position: absolute
        left: 10%
        bottom: 40vh
    &-alien
        position: absolute
        width: 100px
        height: 250px
        background: url("./assets/img/alien2.png") no-repeat
        background-size: cover
        right: -10vw
        top: -15vh

    &-tips-title
        font-size: 1.5rem
        text-transform: uppercase
        color: #1F0D87
        font-style: italic
        text-align: left
        font-weight: 700
    &-tips-text
        font-size: 1rem
        color: white
        line-height: 2rem
        text-align: left
        margin: 3rem 0
        width: 80%
        font-style: italic

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


.and
    font-family: Futura, sans-serif

.desktop
    display: none

@media(min-width: 600px)
    .List
        font-family: Roboto, sans-serif
        position: relative
        width: 98%
        height: 270vh
        background: none
        padding: 3rem 0
        overflow: hidden

        &-background
            width: 100%
            height: 270vh
            background: url("../assets/img/list_background_desktop.png") no-repeat
            background-size: 100%
            box-sizing: border-box

        &-container
            width: 70%
            height: 30vh
            margin: 0 auto
            text-align: center
            padding: 6rem 0
        &-title
            font-size: 4rem
            font-family: Airship, sans-serif
            color: black
            margin: 6rem 0 14rem 0
            text-transform: uppercase
            text-align: left
        &-tips
            width: 80%
            height: 30vh
            position: absolute
            left: 10%
            bottom: 40vh
        &-alien
            position: absolute
            width: 100px
            height: 250px
            background: url("./assets/img/alien2.png") no-repeat
            background-size: cover
            right: -10vw
            top: -15vh

        &-tips-title
            font-size: 1.5rem
            text-transform: uppercase
            color: #1F0D87
            font-style: italic
            text-align: left
            font-weight: 700
        &-tips-text
            font-size: 1rem
            color: white
            line-height: 2rem
            text-align: left
            margin: 3rem 0
            width: 80%
            font-style: italic

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

        .mobile
            display: none
        .desktop
            display: block
        .Nebula-title
            font-size: 3rem
            position: absolute
            left: 6rem
            top: 6rem
            font-family: Airship, sans-serif
            color: #F33A56


</style>
<template>
    <div class="Search">
        <nebu-menu></nebu-menu>
        <input type="search" class="Search-input" placeholder="Rechercher un film, un fait scientifique …"
               v-model="search">
        <div class="Search-results">
            <ul>
                <li v-for="movies in getResults" :key="movies.title">{{movies.title}}</li>
            </ul>
        </div>
    </div>
</template>

<script>

    import nebuMenu from "../components/nebu-menu.vue";
    import axios from 'axios';

    export default {
        components: {nebuMenu},
        name: 'search',
        data() {
            return {
                search: "",
                results: [],
                movies: {}
            }
        },
       computed : {
            getResults(){
                return this.results.filter((movie) => movie.data.title.match(this.search))
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
.Search
    width: 100%
    height: 100vh
    position: relative
    background: url("../assets/img/starsBg.jpg") no-repeat
    background-size: cover
    font-family: Roboto, sans-serif
    overflow: hidden
    &-input
        width: 100%
        height: 5vh
        background-color: #CDC1E1
        color: #440BA2
        font-size: 2.5rem
        padding-left: 2rem
    &-results
        color: white
        font-size: 2.5rem
        padding: 2rem 2rem
        li
            margin-bottom: 2rem


</style>
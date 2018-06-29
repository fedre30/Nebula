<template>
    <div class="Search">
        <nebu-menu></nebu-menu>
        <input type="search" class="Search-input" placeholder="Rechercher un film, un fait scientifique …"
               v-model="search">
        <div class="Input-results" v-if="show">
            <ul>
                <li v-for="facts in getResults" :key="facts.videoDescriptionTitle" ><router-link :to="{path: `/film/${parseInt(facts.id)}`}">{{facts.videoDescriptionTitle}}</router-link></li>
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
            facts: []
        }
    },
    computed : {
        getResults(){
            return this.facts.filter((fact) => fact.videoDescriptionTitle.match(this.search))
        }
    },
    mounted () {
        axios
            .get('/api/facts')
            .then(response => (this.facts = response.data))
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
        font-size: 1rem
        padding-left: 2rem
    &-results
        color: white
        font-size: 2.5rem
        padding: 2rem 2rem
        li
            margin-bottom: 2rem
    .desktop
        display: none


</style>
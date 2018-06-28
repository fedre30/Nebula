<template>
    <div class="Input">
        <div class="loupe"></div>
        <input type="search" placeholder="Rechercher" @focus="show=!show" v-model="search">
        <div class="Input-results" v-if="show">
            <ul>
                <li v-for="facts in getResults" :key="facts.videoDescriptionTitle" ><router-link :to="{path: `/film/${parseInt(facts.id)}`}">{{facts.videoDescriptionTitle}}</router-link></li>
            </ul>
        </div>
    </div>
</template>

<script>
    import axios from 'axios';
    export default {
        name: 'nebu-search',
        data() {
            return {
                search: "",
                show: false,
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
                .get('http://localhost:8000/api/facts')
                .then(response => (this.facts = response.data))
        }
    }
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped lang="sass">
.Input
    width: 30vw
    height: 20vh
    position: absolute
    top: 5vh
    left: 20vw
    z-index: 3
    font-family: Roboto, sans-serif
    .loupe
        background: url("./assets/img/loupe_desktop.svg") no-repeat
        background-size: cover
        width: 30px
        height: 30px
        position: absolute
        left: 15px
        top: 50px
        z-index: 1

    input[type=search]
        width: 40px
        height: 110px
        box-sizing: border-box
        border: 2px solid #CDC1E1
        border-bottom-right-radius: 50px
        border-bottom-left-radius: 50px
        font-size: 16px
        background-color: #CDC1E1
        padding: 12px 20px 12px 3rem
        -webkit-transition: width 0.4s ease-in-out
        transition: all 0.2s ease-in-out



    input[type=search]:focus
        width: 100%
        height: 50px
        border-radius: 30px
        position: absolute
        top: 40px
        left: 0
        border: none
    &-results
        width: 30vw
        height: auto
        background-color: white
        position: absolute
        top: 10vh
        li
            color: #F13455
            margin: 1rem 1rem
            border-bottom: 1px solid lightgrey
    a
        text-decoration: none
        color: #F13455

</style>
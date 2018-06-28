<template>
    <div class="Input">
        <div class="loupe"></div>
        <input type="search" placeholder="Rechercher">
        <div class="Input-results">
            <ul>
                <li v-for="facts in getResults" :key="facts.mainTitle">{{facts.mainTitle}}</li>
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
                facts: []
            }
        },
        computed : {
            getResults(){
                return this.facts.filter((fact) => fact.mainTitle.match(this.search))
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
    height: 10vh
    position: absolute
    top: 5vh
    left: 15%
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
    &-results
        width: 30vw
        height: auto
        background-color: white
        li
            color: #F13455

</style>
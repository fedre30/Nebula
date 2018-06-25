<template>
    <div class="Search">
        <input type="search" class="Search-input" placeholder="Rechercher un film, un fait scientifique …"
               v-model="search">
        <div class="Search-results">
            <ul>
                <li v-for="test in getResults" :key="test.name">{{test.name}}</li>
            </ul>
        </div>
    </div>
</template>

<script>

    export default {
        components: {},
        name: 'search',
        data() {
            return {
                tests: [
                    {name: 'coucou'},
                    {name: 'salut'},
                    {name: 'test'}
                ],
                search: ""
            }
        },
       computed : {
            getResults(){
                return this.tests.filter((test) => test.name.match(this.search))
            }
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
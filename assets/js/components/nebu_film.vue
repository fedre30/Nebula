<template>
    <div class="Item">
        <div class="Item-container">
            <div class="Item-image"></div>
            <div class="Item-text">
                <h3 class="Item-mistake">{{mistake}}</h3>
                <h4 class="Item-title">{{title}}</h4>
                <p class="Item-year">{{year}}</p>
            </div>
        </div>

    </div>
</template>

<script>
    export default {
        name: 'nebu-film',
        props: {
            mistake: {
                type: String,
                required: true
            },
            title: {
                type: String,
                required: true
            },
            year: {
                type: String
            }
        }

    }
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped lang="sass">
.Item
    width: 100%
    height: 20vh
    margin: 2vh 0
    font-family: Roboto, sans-serif
    &-container
        display: flex
        width: 100%
        margin: 0 auto
    &-image
        width: 200px
        height: 15vh
        background: url("./assets/img/space.jpg") no-repeat
        background-size: cover
        margin-right: 10vw
    &-mistake
        color: #1F0D87
        font-weight: 700
        font-size: 2.5rem
        text-align: left
        line-height: 3.5rem
    &-title, &-year
        color: white
        font-size: 2rem
        text-align: left
        margin-top: 1.5rem
</style>
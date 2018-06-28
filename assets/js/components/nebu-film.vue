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
        font-size: 1rem
        text-align: left
        line-height: 2rem
    &-title, &-year
        color: white
        font-size: 0.8rem
        text-align: left
        margin-top: 1rem
        line-height: 2
@media(min-width: 600px)
    .Item
        width: 100%
        height: 20vh
        margin: 5vh 2vw
        font-family: Roboto, sans-serif
        z-index: 999999
        &-text
            background-color: white
            height: 20vh
            width: 100%
            padding: 1rem 3rem
        &-container
            display: flex
            width: 100%
            margin: 0 auto
        &-image
            width: 200px
            height: 23vh
            background: url("./assets/img/space.jpg") no-repeat
            background-size: cover
            margin-right: 5vw
        &-mistake
            color: #440BA2
            font-weight: 700
            font-size: 1.5rem
            text-align: left
            line-height: 3.5rem
        &-title, &-year
            color: #FF5A3D
            font-style: italic
            font-size: 1rem
            text-align: left
            margin-top: 1.5rem
</style>
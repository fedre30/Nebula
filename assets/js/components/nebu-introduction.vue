<template>
    <div class="Intro">
        <div class="Intro-container">
            <h1 class="Intro-title">Nebula</h1>
            <h3 class="Intro-subtitle">Lorem ipsum</h3>
            <h4 class="Intro-text">Lorem ipsum</h4>
        </div>
    </div>
</template>

<script>
export default {
    components: {},
    name: "nebu-introduction",

    data() {
        return {}
    }
}
</script>

<style scoped lang="sass">
.Intro
    position: relative
    width: 100%
    height: 100vh
    z-index: 3
    &-container
        width: 90%
        margin: 0 auto
        text-align: center
        padding-top: 6rem
    &-title
        font-size: 12rem
        margin-bottom: 5rem
        font-family: Airship, sans-serif
    &-subtitle
        font-size: 4rem
        margin-bottom: 1rem
        font-family: Roboto, sans-serif
    &-text
        font-size: 3rem
        font-family: Roboto, sans-serif


</style>
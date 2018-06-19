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
        name: "nebu-introduction"
    }
</script>

<style scoped lang="sass">
.Intro
    position: relative
    width: 100%
    height: 100vh
    background-color: rgba(184, 184, 184, 1)
    &-container
        width: 90%
        margin: 0 auto
        text-align: center
    &-title
        font-size: 6rem
    &-subtitle
        font-size: 3rem
        margin: 0
    &-text
        font-size: 2rem


</style>
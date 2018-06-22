<template>
    <div class="Menu">
        <div class="Menu-container">
            <router-link :to="{name: 'homepage'}"><div class="Menu-item-home"></div></router-link>
            <router-link :to="{name: 'homepage'}"><div class="Menu-item-quiz"></div></router-link>
            <router-link :to="{name: 'film'}"><div class="Menu-item-film"></div></router-link>
            <router-link :to="{name: 'homepage'}"><div class="Menu-item-search"></div></router-link>
        </div>
    </div>
</template>

<script>
export default {
    name: 'nebu-menu',
    data() {
        return {
            active: false,
        }
    },
    methods: {
        toggleActive() {
            this.active = !this.active;
            this.isOpen = !this.isOpen;
        }
    }
    }
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped lang="sass">
.Menu
    width: 100%
    height: 150px
    background-color: white
    position: fixed
    bottom: 0
    z-index: 9999999

    &-container
        padding: 2rem
        width: 80%
        height: 150px
        margin: 0 auto
        text-align: center
        display: flex
        justify-content: space-between

    &-item-home
        width: 85px
        height: 50%
        background: url("./assets/img/home.svg") no-repeat
        background-size: cover
    &-item-quiz
        width: 55px
        height: 50%
        background: url("./assets/img/question_mark.svg") no-repeat
        background-size: cover
    &-item-film
        width: 72px
        height: 50%
        background: url("./assets/img/camera.svg") no-repeat
        background-size: cover
    &-item-search
        width: 70px
        height: 50%
        background: url("./assets/img/loupe.svg") no-repeat
        background-size: cover




</style>
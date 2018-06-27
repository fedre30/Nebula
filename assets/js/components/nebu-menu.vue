<template>
    <div class="Menu" :class="{'scrolled': scrolled}">
        <div class="Menu-container">
            <router-link :to="{name: 'home'}">
                <div class="Menu-item-home"></div>
            </router-link>
            <router-link :to="{path:`question/0`}">
                <div class="Menu-item-quiz"></div>
            </router-link>
            <router-link :to="{name: 'list'}">
                <div class="Menu-item-film"></div>
            </router-link>
            <router-link :to="{name: 'search'}">
                <div class="Menu-item-search"></div>
            </router-link>
        </div>
    </div>
</template>

<script>
    let lastScrollTop;
    export default {
        name: 'nebu-menu',
        data() {
            return {
                active: false,
                scrolled: false
            }
        },
        methods: {
            handleScroll() {
                const scrollDirection = window.pageYOffset || document.documentElement.scrollTop;
                scrollDirection < lastScrollTop ? this.scrolled = !this.scrolled : lastScrollTop;
                lastScrollTop = scrollDirection <= 0 ? 0 : scrollDirection;
            }
        },
        created() {
            window.addEventListener('scroll', this.handleScroll);
        },
        destroyed() {
            window.removeEventListener('scroll', this.handleScroll);
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
    opacity: 1
    transition: all .2s ease

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
        height: 55%
        background: url("./assets/img/question_mark.svg") no-repeat
        background-size: cover
    &-item-film
        width: 70px
        height: 50%
        background: url("./assets/img/camera.svg") no-repeat
        background-size: cover
    &-item-search
        width: 70px
        height: 50%
        background: url("./assets/img/loupe.svg") no-repeat
        background-size: cover

.scrolled
    opacity: 1
    transition: all .2s ease


</style>
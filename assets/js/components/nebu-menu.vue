<template>
    <div class="Menu" :class="{'scrolled': scrolled}">
        <div class="Menu-burger"></div>
        <div class="Menu-container">
            <router-link :to="{name: 'home'}">
                <div class="Menu-item-home"></div>
            </router-link>
            <router-link :to="{name: 'question'}">
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
    height: 70px
    background-color: white
    position: fixed
    bottom: 0
    z-index: 9999999
    opacity: 1
    transition: all .2s ease
    &-burger
        display: none

    &-container
        padding-top: 0.7rem
        width: 80%
        height: 150px
        margin: 0 auto
        text-align: center
        display: flex
        justify-content: space-between

    &-item-home
        width: 43px
        height: 25%
        background: url("./assets/img/home.svg") no-repeat
        background-size: cover
    &-item-quiz
        width: 30px
        height: 30%
        background: url("./assets/img/question_mark.svg") no-repeat
        background-size: cover
    &-item-film
        width: 37px
        height: 25%
        background: url("./assets/img/camera.svg") no-repeat
        background-size: cover
    &-item-search
        width: 35px
        height: 25%
        background: url("./assets/img/loupe.svg") no-repeat
        background-size: cover

.scrolled
    opacity: 1
    transition: all .2s ease

@media(min-width: 600px)
    .Menu
        width: 100px
        height: 100px
        position: fixed
        top: 0
        right: 0
        opacity: 1
        transition: all .2s
        background: transparent
        &-burger
            display: block
            width: 50px
            height: 50px
            border: 2px solid transparent
            border-radius: 1000px
            position: absolute
            top: 4rem
            right: 4rem
            background: url("./assets/img/burger.svg") no-repeat
            background-size: cover


        &-container
            padding: 2rem
            width: 80%
            height: 150px
            margin: 0 auto
            text-align: center
            display: none
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


</style>
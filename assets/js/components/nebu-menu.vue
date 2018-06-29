<template>
    <div>
        <div class="Menu mobile" :class="{'scrolled': scrolled}">
            <div class="Menu-burger"></div>
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
        <div class="Menu desktop">
            <svg class="Menu-burger" v-on:click="show = !show" :class="{'active': active}" width="44px" height="44px" viewBox="0 0 44 44" version="1.1" xmlns="http://www.w3.org/2000/svg">
                <defs>
                    <linearGradient x1="13.0279634%" y1="-15.1097413%" x2="100%" y2="115.679923%" id="linearGradient-1">
                        <stop stop-color="#9C82C6" offset="0%"></stop>
                        <stop stop-color="#F33A56" offset="100%"></stop>
                    </linearGradient>
                </defs>
                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g id="Home" transform="translate(-1318.000000, -78.000000)" stroke-width="3" stroke="url(#linearGradient-1)">
                        <circle id="Oval" cx="1340" cy="100" r="20"></circle>
                    </g>
                </g>
            </svg>
                <div class="Menu-container" :show="show" :class="{'opened': show}">
                    <div class="Menu-circle"></div>
                    <div class="Menu-itemsContainer" >
                        <router-link :to="{name: 'home'}">
                            <div class="Menu-item">Home</div>
                        </router-link>
                        <router-link :to="{path:`list`}">
                            <div class="Menu-item">Espace <span class="and">&</span> cinema</div>
                        </router-link>
                        <router-link :to="{path: 'question/0'}">
                            <div class="Menu-item">Quizz</div>
                        </router-link>
                        <router-link :to="{name: 'form'}">
                            <div class="Menu-item">Suggestions</div>
                        </router-link>
                        <router-link :to="{name: 'team'}">
                            <div class="Menu-item">A propos</div>
                        </router-link>
                    </div>
                </div>
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
                scrolled: false,
                show: false
            }
        },
        methods: {
            handleScroll() {
                const scrollDirection = window.pageYOffset || document.documentElement.scrollTop;
                scrollDirection < lastScrollTop ? this.scrolled = !this.scrolled : lastScrollTop;
                lastScrollTop = scrollDirection <= 0 ? 0 : scrollDirection;
            },

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
        height: 52px
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
            width: 10px
            height: 20px
            background: url("./assets/img/home.svg") no-repeat
            background-size: cover
        &-item-quiz
            width: 30px
            height: 30px
            background: url("./assets/img/question_mark.svg") no-repeat
            background-size: cover
        &-item-film
            width: 37px
            height: 20px
            background: url("./assets/img/camera.svg") no-repeat
            background-size: cover
        &-item-search
            width: 35px
            height: 20px
            background: url("./assets/img/loupe.svg") no-repeat
            background-size: cover

    .scrolled
        opacity: 1
        transition: all .2s ease
    .mobile
        display: block
    .desktop
        display: none

    @media(min-width: 600px)
        .Menu
            width: 100px
            height: 100px
            position: fixed
            top: 0
            right: 0
            opacity: 1
            background: transparent
            transition: all .2s
            z-index: 1
            &-burger
                display: block
                top: 80px
                right: 80px
                z-index: 4
                cursor: pointer
                position: absolute

            &-container
                padding: 2rem
                width: 0
                height: 0
                position: fixed
                top: 0
                left: 0
                margin: 0 auto
                text-align: center
                background: url("./assets/img/menu_bg.jpg") no-repeat
                background-size: cover
                z-index: 0
                opacity: 0
                transition: all .2s ease
            &-itemsContainer
                width: 100%
                height: 60vh
                position: absolute
                left: 60vw
                top: 15vh
                display: flex
                flex-direction: column
            &-item
                font-size: 2.5rem
                font-family: Airship, sans-serif
                color: white
                text-align: left
                margin: 1rem 0 5rem 0
                text-transform: uppercase
            &-item:hover
                color: #ED3A5E
            &-item-home, &-item-search, &-item-film, &-item-quiz
                background: none
            //&-circle
                width: 600px
                height: 600px
                background: linear-gradient(348deg, rgba(177,147,223,1) 0%, rgba(251,32,70,1) 100%)
                position: absolute
                top: 15vh
                left: 5vw
                border-radius: 600px

        .mobile
            display: none
        .desktop
            display: block
        .opened
            width: 100vw
            height: 100vh
            opacity: 1
            transition: all .2s ease
        .active
            background: url('./assets/img/menu_open.svg') no-repeat

        a
            text-decoration: none
        .and
            font-family: Futura, sans-serif

</style>
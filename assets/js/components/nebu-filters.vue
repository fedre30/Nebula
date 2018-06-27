<template>
    <div>
    <div class="Filters mobile" >
        <div class="Filters-container mobile"  :class="{'opened': active}" :style="'--height: ' + height">
            <div class="Filters-item mobile" v-for="(filter, index) in filters" :key="filters.name">{{filter.name}}</div>
        </div>
        <div class="Filters-link mobile" v-on:click="toggleActive" :active="active" :class="{'active': active}">Trier par</div>
    </div>
    <div class="Filters desktop" >
        <div class="Filters-link desktop" v-on:click="show = !show" :active="active" :class="{'active': active}">Trier par</div>
        <transition name="fade">
        <div class="Filters-container desktop"  v-if="show">
            <div class="Filters-item desktop" v-for="(filter, index) in filters" :key="filters.name">{{filter.name}}</div>
        </div>
        </transition>

    </div>
    </div>
</template>

<script>
    export default {
        name: 'nebu-filters',
        data() {
            return {
                show: false,
                active: false,
                filters: [
                    {
                        name: 'Par défaut'
                    },
                    {
                        name: 'Date de sortie'
                    },
                    {
                        name: 'Cohérences'
                    },
                    {
                        name: 'Incohérences'
                    },

                ]
            }
        },
        computed: {
            height() {
                return this.filters.length * 66
            }
        },

        methods: {
            toggleActive() {
                this.active = !this.active
            },
            onClick() {
                this.$emit('click')
            }
        },
    }
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped lang="sass">
.Filters
    width: 100%
    position: fixed
    bottom: 70px
    background-color: white
    z-index: 99999999
    overflow: hidden
    font-family: Roboto, sans-serif

    &-link
        color: #7169AD
        font-weight: 800
        font-size: 1rem
        line-height: 50px
        width: 100%
        height: 50px
        z-index: 999999999
        background-color: white
        padding-left: 2rem
        box-shadow: 0 1px 3px 0 rgba(0,0,0,6)

    &-container
        width: 100%
        max-height: 0
        background-color: white
        transition: all 0.2s ease
        z-index: 0


    &-item
        width: 100%
        height: calc(50px + 1rem)
        margin: 0
        font-size: 1rem
        color: #F13455
        line-height: calc(50px + 1rem)
        z-index: 0
        box-shadow: 0 1px 3px 0 rgba(0,0,0,6)
        padding: 0.5rem 2rem
        font-weight: 500
    &-item:first-child
        padding-top: 1.6rem

    .opened
        height: auto
        max-height: 600px
        transition: all 0.2s ease
        opacity: 1
        padding-top: 0
    .active
        background-color: #7169AD
        color: white

    .mobile
        display: block
    .desktop
        display: none
@media(min-width:600px)
    .Filters
        width: 200px
        height: 700px
        position: absolute
        top: 15vh
        right: 20vw
        background-color: transparent
        font-family: Roboto, sans-serif
        &-link
            color: white
            font-weight: 800
            font-size: 1rem
            line-height: 50px
            width: 100%
            height: 50px
            z-index: 999999999
            background: linear-gradient(348deg, rgba(253,89,63,1) 0%, rgba(241,52,107,1) 100%)
            padding-left: 2rem
            box-shadow: 0 1px 3px 0 rgba(0,0,0,6)

        &-container
            width: 100%
            height: 400px
            background-color: white
            transition: all 0.2s ease
            z-index: 0
            position: absolute
            top: 50px


        &-item
            width: 200px
            height: calc(10px + 1rem)
            margin: 0
            font-size: 1rem
            color: #F13455
            line-height: calc(10px + 1rem)
            z-index: 0
            box-shadow: 0 1px 3px 0 rgba(0,0,0,6)
            padding: 0.5rem 2rem
            font-weight: 500
            background-color: white
        &-item:first-child
            padding-top: 1.6rem

        .fade-enter-active, .fade-leave-active
            transition: opacity .5s

        .fade-enter, .fade-leave-to
          opacity: 0

        .active
            background-color: #7169AD
            color: white
        .mobile
            display: none
        .desktop
            display: block




</style>
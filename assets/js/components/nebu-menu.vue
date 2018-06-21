<template>
    <div class="burger-menu">
        <div class="burger" ref="burger" v-on:click="toggleActive" :active="active" :class="{'active': active}">
            <div class="line-1"></div>
            <div class="line-2"></div>
        </div>
    </div>
</template>

<script>
export default {
    name: 'nebu-hamburger',
    data() {
        return {
            active: false,
            isOpen: false
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

.burger-menu
    position: relative

.burger
    width: 130px
    height: 130px
    background-color: #0A246A
    border-radius: 200px
    position: fixed
    bottom: 25vh
    left: 45vw
    z-index: 100000

.line-1, .line-2
    width: 60px
    height: 10px
    background-color: #1cb1f2
    position: absolute
    transition: all .2s ease

.line-1
    top: 50px
    left: 35px

.line-2
    top: 70px
    left: 35px


</style>
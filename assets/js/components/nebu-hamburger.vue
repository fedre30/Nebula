<template>
    <div class="burger"  v-on:click="toggleActive" :active="active" :class="{'active': active, 'scroll': scrolled}">
        <div class="line-1"></div>
        <div class="line-2"></div>
    </div>
</template>

<script>
    export default {
        name: 'nebu-hamburger',
        data() {
            return {
                active : false,
                scrolled : false
            }
        },
        methods: {
            toggleActive(){
                this.active = !this.active
            },

            handleScroll(){
            const questionSection = this.$refs.question;
            if(questionSection.getBoundingClientRect().top < burger.offsetHeight){
                this.scrolled = !this.scrolled;
            }
            }
        },
        created () {
            window.addEventListener('scroll', this.handleScroll);
        },
        destroyed () {
            window.removeEventListener('scroll', this.handleScroll);
        },
    }
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped lang="sass">
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

.active
    .line-1, .line-2
        transform-origin: 30% 40%
        transition: all .2s ease
    .line-1
        transform: rotate(45deg)
    .line-2
        transform: rotate(-45deg)

.before-enter
    opacity: 0;


.enter
    transition: opacity 2s ease;



</style>
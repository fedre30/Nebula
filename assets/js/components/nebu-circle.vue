<template>
    <router-link :to="{name: 'film'}">
    <div class="Circle">
        <p class="Circle-year">{{year}}</p>

            <div class="Circle-outer">
                <div class="Circle-inner">
                    <div class="Circle-center"></div>
                </div>
            </div>
    </div>
    </router-link>
</template>

<script>
    export default {
        name: 'nebu-circle',
        props: {
            year: {
                type: Number,
                required: true
            },
            title: {
                type: String,
                required: true
            },
            image: {
                type: String,
            }
        }
    }
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped lang="sass">

.Circle
    width: 500px
    height: 500px
    margin: 4rem auto
    text-align: center
    z-index: 10000000
    &-year
        font-size: 3rem

    &-center
        width: 300px
        height: 300px
        border-radius: 300px
        margin: 0 auto
        background: url('./assets/img/space.jpg')


</style>
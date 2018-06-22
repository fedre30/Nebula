<template>
    <div class="List">
        <div class="List-container">
            <h3 class="List-title">science &amp; cinema</h3>
        </div>

    </div>
</template>

<script>
    export default {
        name: 'nebu-films-list',
        data() {
            return {}
        }
    }
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped lang="sass">
.List
    position: relative
    width: 100%
    height: 270vh
    background: url("../assets/img/background_list.jpg") no-repeat
    &-container
        width: 80%
        margin: 0 auto
        text-align: center
        padding-top: 6rem
    &-title
        font-size: 6rem
        font-family: Airship, sans-serif
        color: white
        margin-top: 8rem
        text-transform: uppercase

</style>
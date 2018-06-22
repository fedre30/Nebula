<template>
    <div class="Homepage">
        <div class="Homepage-background">
            <nebu-introduction></nebu-introduction>
            <nebu-menu></nebu-menu>
            <nebu-question></nebu-question>
            <nebu-timeline></nebu-timeline>
            <nebu-footer></nebu-footer>
        </div>
    </div>
</template>

<script>
    import nebuIntroduction from '../components/nebu-introduction'
    import nebuQuestion from "../components/nebu-question.vue";
    import nebuTimeline from "../components/nebu-timeline.vue";
    import nebuFooter from "../components/nebu_footer.vue";
    import nebuMenu from "../components/nebu-menu.vue";
    export default {
        name: 'homepage',
        components: {
            nebuMenu,
            nebuFooter,
            nebuTimeline,
            nebuQuestion,
            nebuIntroduction},
        data() {
            return {}
        }
    }
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style lang="sass">
.Homepage
    width: 100%
    height: 450vh
    overflow: hidden
    position: relative
    &-background
        width: 100%
        height: 450vh
        background: url("../assets/img/full_background.jpg") no-repeat
        background-size: cover

</style>
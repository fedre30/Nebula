<template>
    <div class="Homepage">
        <div class="Homepage-background">
            <nebu-introduction></nebu-introduction>
            <nebu-menu></nebu-menu>
            <nebu-question></nebu-question>
            <nebu-timeline></nebu-timeline>
            <nebu-about></nebu-about>
            <nebu-footer></nebu-footer>
        </div>
    </div>
</template>

<script>
    import nebuIntroduction from '../components/nebu-introduction'
    import nebuQuestion from "../components/nebu-question.vue";
    import nebuTimeline from "../components/nebu-timeline.vue";
    import nebuFooter from "../components/nebu-footer.vue";
    import nebuMenu from "../components/nebu-menu.vue";
    import nebuAbout from "../components/nebu-about-section.vue";
    export default {
        name: 'homepage',
        components: {
            nebuMenu,
            nebuFooter,
            nebuTimeline,
            nebuQuestion,
            nebuIntroduction,
        nebuAbout},
        data() {
            return {}
        }
    }
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style lang="sass">
.Homepage
    width: 100%
    height: 500vh
    overflow: hidden
    position: relative
    &-background
        width: 100%
        height: 300vh
        background: url("../assets/img/full_background.jpg") no-repeat
        background-size: cover
@media(min-width: 600px)
    .Homepage
        width: 100%
        height: 300vh
        &-background
            width: 100%
            height: 300vh
            background: url("../assets/img/background_home_desktop.png") no-repeat
            background-size: 100%
            margin-top: 10vh

</style>
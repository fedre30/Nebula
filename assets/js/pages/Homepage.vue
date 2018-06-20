<template>
    <div>
        <nebu-introduction></nebu-introduction>
        <nebu-hamburger></nebu-hamburger>
        <nebu-question></nebu-question>
        <nebu-timeline></nebu-timeline>
        <nebu-footer></nebu-footer>
    </div>
</template>

<script>
    import nebuIntroduction from '../components/nebu-introduction'
    import nebuHamburger from "../components/nebu-menu.vue";
    import nebuQuestion from "../components/nebu-question.vue";
    import nebuTimeline from "../components/nebu-timeline.vue";
    import nebuFooter from "../components/nebu_footer.vue";
    export default {
        name: 'homepage',
        components: {
            nebuFooter,
            nebuTimeline,
            nebuQuestion,
            nebuHamburger,
            nebuIntroduction},
        data() {
            return {}
        }
    }
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style lang="sass">

</style>
<template>
    <div>
        <nebu-introduction></nebu-introduction>
        <nebu-hamburger></nebu-hamburger>
        <nebu-question></nebu-question>


    </div>
</template>

<script>
    import nebuIntroduction from '../components/nebu-introduction'
    import nebuHamburger from "../components/nebu-hamburger.vue";
    import nebuQuestion from "../components/nebu-question.vue";
    export default {
        name: 'homepage',
        components: {
            nebuQuestion,
            nebuHamburger,
            nebuIntroduction},
        data() {
            return {}
        }
    }
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped lang="sass">

</style>
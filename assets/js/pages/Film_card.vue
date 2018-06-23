<template>
    <div class="Film">
        <div class="Film-container">
            <h2 class="Film-title">Les trous noirs</h2>
            <section class="Film-intro">
                <h4 class="Film-subtitle">dans star trek</h4>
                <p class="Film-text">
                    Analyse concurrentielle des sites dont le coeur de cible est le voyage d’affaire (plus particulièrement leur stratégie sur les réseaux sociaux):
                    https://www.similarweb.com/fr/website/voyages-d-affaires.com#similarSites
                    https://app.rivaliq.com/companies</p>
            </section>
        </div>
        <nebu-menu></nebu-menu>
            <div class="Film-video"></div>
        <div class="Film-container">
            <section class="Film-mistake">
                <h4 class="Film-subtitle">les trous noir du cinéma</h4>
                <p class="Film-text">
                    Analyse concurrentielle des sites dont le coeur de cible est le voyage d’affaire (plus particulièrement leur stratégie sur les réseaux sociaux):
                    https://www.similarweb.com/fr/website/voyages-d-affaires.com#similarSites
                    https://app.rivaliq.com/companies</p>
            </section>
            <section class="Film-fact">
                <h4 class="Film-subtitle">en réalité</h4>
                <p class="Film-text">
                    Analyse concurrentielle des sites dont le coeur de cible est le voyage d’affaire (plus particulièrement leur stratégie sur les réseaux sociaux):
                    https://www.similarweb.com/fr/website/voyages-d-affaires.com#similarSites
                    https://app.rivaliq.com/companies</p>
            </section>
        </div>
        <nebu-footer></nebu-footer>
    </div>
</template>

<script>
    import nebuFooter from "../components/nebu-footer.vue";
    import nebuMenu from "../components/nebu-menu.vue";

    export default {
        components: {
            nebuMenu,
            nebuFooter},
        name: 'Film_card',
        data() {
            return {}
        }
    }
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped lang="sass">
.Film
    font-family: Roboto, sans-serif
    overflow: hidden
    position: relative
    width: 100vw
    height: 250vh
    background: url("../assets/img/background_film.jpg") no-repeat
    background-size: cover

    &-container
        width: 80%
        margin: 0 auto
        text-align: center
        padding-top: 6rem
    &-title
        font-size: 6rem
        font-family: Airship, sans-serif
        margin: 8rem 0
        color: white
    &-subtitle
        font-size: 3rem
        margin: 15vh 0 3rem 0
        text-transform: uppercase
        color: #1F0D87
        font-style: italic
        text-align: left
        font-weight: 700
    &-text
        font-size: 2.5rem
        color: white
        line-height: 4rem
        text-align: left
        margin: 3rem 0
    &-video
        width: 100vw
        margin: 10vh auto
        text-align: center
        height: 30vh
        background: url("../assets/img/space.jpg") no-repeat




</style>
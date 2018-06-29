<template>
    <div class="Homepage">
            <svg class="purpleBg" width="1340px" height="2037px" viewBox="0 0 1340 2037" version="1.1" xmlns="http://www.w3.org/2000/svg"><desc>Created with Sketch.</desc>
                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" fill-opacity="0.268455616">
                    <g id="Home" transform="translate(-50.000000, -50.000000)" fill="#CDC1E1">
                        <polygon id="Rectangle-4-Copy" points="50 50 1390 50 1390 1602.47227 962.853793 1176.24223 50 2087"></polygon>
                    </g>
                </g>
            </svg>
            <nebu-introduction id="intro"></nebu-introduction>
            <nebu-search class="desktop"></nebu-search>
            <nebu-menu></nebu-menu>
            <nebu-question></nebu-question>
            <nebu-timeline title="idees recues les plus tenaces"></nebu-timeline>
            <div class="desktop timeline"><nebu-timeline title="les meilleurs eleves"></nebu-timeline></div>
            <nebu-about></nebu-about>
            <nebu-footer></nebu-footer>
    </div>
</template>

<script>
    import nebuIntroduction from '../components/nebu-introduction'
    import nebuQuestion from "../components/nebu-question.vue";
    import nebuTimeline from "../components/nebu-timeline.vue";
    import nebuFooter from "../components/nebu-footer.vue";
    import nebuMenu from "../components/nebu-menu.vue";
    import nebuAbout from "../components/nebu-about-section.vue";
    import nebuSearch from "../components/nebu-search.vue";

    export default {
        name: 'homepage',
        components: {
            nebuSearch,
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
    .purpleBg
        position: absolute
        top: 50px
        left: 3.5%
        z-index: -10
    .desktop
        display: none
@media(min-width: 600px)
    .Homepage
        width: 100%
        height: 500vh
        .desktop
            display: block
        .timeline
            width: 100%
            position: absolute
            top: 190vh
            left: 20vw

</style>
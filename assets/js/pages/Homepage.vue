<template>
    <div class="Homepage">
            <svg class="purpleBg desktop" width="1340px" height="2037px" viewBox="0 0 1340 2037" version="1.1" xmlns="http://www.w3.org/2000/svg"><desc>Created with Sketch.</desc>
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
            <router-link :to="{name: 'list'}"><div class="Timeline-button desktop">Voir plus de films</div></router-link>
            <nebu-about></nebu-about>

            <svg class="purpleBgBot desktop" width="1340px" height="1353px" viewBox="0 0 1340 1353" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <!-- Generator: Sketch 47.1 (45422) - http://www.bohemiancoding.com/sketch -->
                <desc>Created with Sketch.</desc>
                <defs>
                    <polygon id="path-1" points="0 485.733572 429.505864 913.228851 1340 0.0288220115 1340 1353 2.32452946e-15 1353"></polygon>
                </defs>
                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g id="Home" transform="translate(-50.000000, -2869.000000)">
                        <g id="last-section" transform="translate(50.000000, 2869.000000)">
                            <g id="monstre+bg">
                                <mask id="mask-2" fill="white">
                                    <use xlink:href="#path-1"></use>
                                </mask>
                                <use id="Mask" fill-opacity="0.268455616" fill="#CDC1E1" xlink:href="#path-1"></use>
                            </g>
                        </g>
                    </g>
                </g>
            </svg>
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
    background: url("../assets/img/background_home.jpg") no-repeat
    background-size: cover
    height: 500vh
    overflow: hidden
    position: relative
    .desktop
        display: none
.purpleBg
    display: none
.purpleBgBot
    display: none

@media(min-width: 600px)
    .Homepage
        width: 100%
        height: 500vh
        background: none
        .purpleBg
            display: block
            position: absolute
            top: 50px
            left: 3.5%
            z-index: -10
        .purpleBgBot
            display: block
            position: absolute
            bottom: 0
            left: 3.5%
            z-index: -10
        .desktop
            display: block
        .timeline
            display: block
            width: 100%
            position: absolute
            top: 0
            left: 0
    .Timeline

        &-button
            font-family: Roboto, sans-serif
            position: absolute
            font-size: 1.7rem
            padding-top: 0.3rem
            width: 200px
            height: 60px
            line-height: 6rem
            text-align: center
            margin: 0 auto
            text-transform: uppercase
            display: block
            background: transparent
            bottom: 800px
            left: 574px
            font-weight: 700

        &-button:before, &-button:after
            border: 2px solid #440BA2
            width: 200px
            left: 0
            height: 27px
            z-index: -1

        &-button:hover:before, &-button:hover:after
            background: #440ba2

        &-button:hover
            color: #fff

        &-button:before
            position: absolute
            content: ''
            border-bottom: none
            transform: perspective(15px) rotateX(5deg)

        &-button:after
            position: absolute
            top: 32px
            content: ''
            border-top: none
            transform: perspective(15px) rotateX(-5deg)

</style>
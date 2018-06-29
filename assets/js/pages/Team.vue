<template>
    <div class="Team">
        <div class="Team-container">
            <h3 class="Team-title">Equipe</h3>
            <div class="Team-matesContainer">
                <div class="Team-mate">
                    <div class="laure"></div>
                    <h3 class="Team-mateName">Laure</h3>
                    <h4 class="Team-mateNickname">La majeusteuse</h4>
                </div>
                <div class="Team-mate">
                    <div class="clara"></div>
                    <h3 class="Team-mateName">Clara</h3>
                    <h4 class="Team-mateNickname">La mélancolique</h4>
                </div>
                <div class="Team-mate">
                    <div class="aymeline"></div>
                    <h3 class="Team-mateName">Aymeline</h3>
                    <h4 class="Team-mateNickname">La téméraire</h4>
                </div>
                <div class="Team-mate">
                    <div class="enzo"></div>
                    <h3 class="Team-mateName">Enzo</h3>
                    <h4 class="Team-mateNickname">Le caractériel</h4>
                </div>
                <div class="Team-mate">
                    <div class="corentin"></div>
                    <h3 class="Team-mateName">Corentin</h3>
                    <h4 class="Team-mateNickname">Le robophile</h4>
                </div>
                <div class="Team-mate">
                    <div class="federica"></div>
                    <h3 class="Team-mateName">Federica</h3>
                    <h4 class="Team-mateNickname">L’alchimiste</h4>
                </div>
            </div>
        </div>
        <nebu-menu></nebu-menu>
        <nebu-footer></nebu-footer>
    </div>
</template>

<script>
    import NebuFooter from "../components/nebu-footer.vue";
    import NebuMenu from "../components/nebu-menu.vue";

    export default {
        components: {
            NebuMenu,
            NebuFooter},
        name: 'team',
        data() {
            return {}
        }
    }
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped lang="sass">
    .Team
        font-family: Roboto, sans-serif
        overflow: hidden
        position: relative
        width: 100vw
        height: 500vh
        background: url("../assets/img/starsBg.jpg") no-repeat
        background-size: 100% 100%
        &-title
            font-size: 2rem
            font-family: Airship, sans-serif
            margin: 4rem 0
            color: #CDC1E1
            text-align: left
        &-container
            width: 80%
            margin: 0 auto
            text-align: center
        &-mate
            width: 80%
            height: 60vh
            margin: 10vh auto
            border-width: 15px
            border-style: solid
            border-image: linear-gradient(348deg, rgba(205, 193, 225, 1) 0%, rgba(243, 58, 86, 1) 100%)
            border-image-slice: 1
            padding: 1rem
        &-mateName
            color: white
            font-weight: 700
            margin: 2vh 0
        &-mateNickname
            color: white
            font-weight: 500
            font-style: italic
        .laure
            width: 100%
            height: 60%
            background: url("../assets/img/Laure.svg") no-repeat
            background-size: cover
        .aymeline
            width: 100%
            height: 60%
            background: url("../assets/img/aymeline.svg") no-repeat
            background-size: cover
        .federica
            width: 100%
            height: 60%
            background: url("../assets/img/federica.svg") no-repeat
            background-size: cover
        .corentin
            width: 100%
            height: 60%
            background: url("../assets/img/corentin.svg") no-repeat
            background-size: cover
        .enzo
            width: 100%
            height: 60%
            background: url("../assets/img/enzo.svg") no-repeat
            background-size: cover
        .clara
            width: 100%
            height: 60%
            background: url("../assets/img/clara.svg") no-repeat
            background-size: cover

    .desktop
        display: none
    .mobile
        display: block

    @media(min-width: 600px)
        .Team
            font-family: Roboto, sans-serif
            overflow: hidden
            position: relative
            width: 100vw
            height: 105vh
            background: url("../assets/img/starsBg.jpg") no-repeat
            background-size: cover
            &-title
                font-size: 5rem
                font-family: Airship, sans-serif
                margin: 2rem 0
                color: white
                text-align: left
            &-container
                width: 90%
                margin: 0 auto
                text-align: center
            &-mate
                width: 100%
                height: 60vh
                margin-right: 1rem
                border-width: 15px
                border-style: solid
                border-image: linear-gradient(348deg, rgba(205, 193, 225, 1) 0%, rgba(243, 58, 86, 1) 100%)
                border-image-slice: 1
                padding: 1rem
            &-matesContainer
                width: 100%
                display: flex
                justify-content: space-between
            &-mateName
                color: white
                font-weight: 700
                margin: 2vh 0
            &-mateNickname
                color: white
                font-weight: 500
                font-style: italic
            .laure
                width: 100%
                height: 60%
                background: url("../assets/img/Laure.svg") no-repeat
                background-size: cover
            .aymeline
                width: 100%
                height: 60%
                background: url("../assets/img/aymeline.svg") no-repeat
                background-size: cover
            .federica
                width: 100%
                height: 60%
                background: url("../assets/img/federica.svg") no-repeat
                background-size: cover
            .corentin
                width: 100%
                height: 60%
                background: url("../assets/img/corentin.svg") no-repeat
                background-size: cover
            .enzo
                width: 100%
                height: 60%
                background: url("../assets/img/enzo.svg") no-repeat
                background-size: cover
            .clara
                width: 100%
                height: 60%
                background: url("../assets/img/clara.svg") no-repeat
                background-size: cover
        .desktop
            display: block
        .mobile
            display: none

</style>
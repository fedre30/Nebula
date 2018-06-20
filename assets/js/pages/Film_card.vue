<template>
    <div class="Film">
        <div class="Film-container">
            <h2 class="Film-title">Les trous noirs</h2>
            <section class="Film-intro">
                <h4 class="Film-subtitle">Lorem ipsum</h4>
                <p class="Film-text">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi dolor dolore doloribus eius esse, eum fuga minus, molestiae molestias mollitia nam quasi, reiciendis rem. Consequuntur eius est ipsum maiores mollitia.</p>
            </section>
            <div class="Film-video"></div>
            <section class="Film-mistake">
                <h4 class="Film-subtitle">Lorem ipsum</h4>
                <p class="Film-text">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aliquam cumque cupiditate eligendi esse ex hic quis voluptatibus? Doloremque ea earum expedita illum labore nostrum quaerat ratione tempora voluptate voluptatem.</p>
            </section>
            <section class="Film-fact">
                <h4 class="Film-subtitle">Lorem ipsum</h4>
                <p class="Film-text">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur at exercitationem ipsum magnam nemo non, officia porro provident quaerat temporibus! Accusamus aperiam corporis delectus doloremque hic omnis reiciendis, tenetur voluptatem!</p>
            </section>
        </div>
        <nebu-footer></nebu-footer>
    </div>
</template>

<script>
    import nebuFooter from "../components/nebu_footer.vue";

    export default {
        components: {nebuFooter},
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
        &-container
            width: 90%
            margin: 0 auto
            text-align: center
            padding-top: 6rem
        &-title
            font-size: 6rem
            font-family: Airship, sans-serif
            margin: 6rem 0
        &-subtitle
            font-size: 4rem
            margin: 3rem 0
        &-text
            line-height: 3rem
            text-align: left
            margin: 3rem 0
        &-video
            width: 100%
            height: 30vh
            background: url("../assets/img/space.jpg") no-repeat




</style>
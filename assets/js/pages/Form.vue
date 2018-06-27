<template>
    <div class="Form">
        <nebu-menu></nebu-menu>
        <div class="Form-container">
            <h2 class="Form-title">suggestions</h2>
           <form @submit="postPost" action="#" method="post">
                <div class="Form-steps-container">
                    <!--&lt;!&ndash; STEP 1 &ndash;&gt;-->
                    <section class="Form-step 1">
                        <h3 class="Form-subtitle">1.	GENERAL</h3>
                        <p class="Form-text">
                            Vous proposez un extrait de film cohérent ou incohérent avec ce qu’on sait de l’espace aujourd’hui ?</p>
                        <div class="Form-radio">
                        <p-radio class="p-round p-default" name="radio" color="info-o">Incohérence</p-radio>
                        <p-radio class="p-round p-default" name="radio" color="info-o">Cohérence</p-radio>
                        </div>
                        <p class="Form-text">Quel est le nom de cette cohérence / incohérence ?</p>
                        <input class="Form-inputText" type="text" name="name" placeholder="Nom" v-model="tab_title">
                    </section>
                    <!--&lt;!&ndash; STEP 2 &ndash;&gt;-->
                    <section class="Form-step 2">
                        <h3 class="Form-subtitle">2.	EXTRAIT</h3>
                        <p class="Form-text">
                            Faites une courte description de l’extrait qui illustre la cohérence choisie.</p>
                        <textarea class="Form-textarea" placeholder="Description" name="video-description" v-model="video_description_text"></textarea>
                        <p class="Form-text">Pour lancer la vidéo, on a besoin de l’url.</p>
                        <input class="Form-inputText" type="text" name="name" placeholder="video-link">
                    </section>

                    <!--&lt;!&ndash; STEP 3 &ndash;&gt;-->
                    <section class="Form-step 3">
                        <h3 class="Form-subtitle">3.	AU CINÉMA</h3>
                        <p class="Form-text">
                            Un petit récap du pourquoi, du comment ceci est utilisé au cinéma (ex: parler du film précurseur)</p>
                        <textarea class="Form-textarea" placeholder="Description" name="film_fact" v-model="explanation_text"></textarea>
                    </section>
                    <!--&lt;!&ndash; STEP 4 &ndash;&gt;-->
                    <section class="Form-step 4">
                        <h3 class="Form-subtitle">4.	EN RÉALITÉ</h3>
                        <p class="Form-text">
                            Et pour finir, lâchez-vous sur les faits scientifiques,  les équations à triple inconnu, c’est du sérieux ici.</p>
                        <textarea class="Form-textarea" placeholder="Description" name="scientific_fact" v-model="scientific_fact_text"></textarea>
                    </section>
                    <input class="Form-button" type="submit" value="envoyer">
                </div>
            </form>

        </div>
        <nebu-footer></nebu-footer>
    </div>
</template>

<script>
    import nebuFooter from "../components/nebu-footer.vue";
    import nebuMenu from "../components/nebu-menu.vue";
    import axios from 'axios';


    export default {
        components: {
            nebuMenu,
            nebuFooter},
        name: 'tips-form',
        data() {
            return {
                posts: []
            }
        },



        methods: {
            checkForm: function (e) {
                e.preventDefault();
            },

            postPost() {
                axios.post(`http://localhost:8000/api/facts`, {
                    "tab_title": this.tab_title,
                    "category": 'oijn',
                    "main_title": this.tab_title,
                    "video_description_title": 'dfonk',
                    "video_description_text": this.video_description_text,
                    "video_src": 'kjnjon',
                    "video_alt": 'lkfndlk',
                    "explanation_title": 'klnko',
                    "explanation_text": this.explanation_text,
                    "scientific_fact_title": 'ofdno',
                    "scientific_fact_text": this.scientific_fact_text
                }, {
                    headers: {
                        'Content-type': 'application/json',
                    }
                }).then(response => {})

            }
        }
    }
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped lang="sass">
.Form
    width: 100%
    height: 320vh
    position: relative
    background: url("../assets/img/background_suggestion.jpg") no-repeat
    background-size: cover
    font-family: Roboto, sans-serif
    overflow: hidden
    font-size: 1rem
    &-container
        width: 80%
        margin: 0 auto
        padding-top: 4rem
    &-title
        font-size: 3rem
        font-family: Airship, sans-serif
        color: #CDC1E1
        text-align: left
        margin: 2rem 0 6rem 1rem
        text-transform: uppercase
    &-subtitle
        font-size: 2rem
        text-transform: uppercase
        color: #1F0D87
        font-style: italic
        font-weight: 700
        margin-bottom: 1rem
    &-text
        font-size: 1rem
        font-family: Roboto, sans-serif
        color: black
        text-align: left
        line-height: 2rem
        font-weight: 300
        font-style: italic
        margin-bottom: 1rem
        margin-top: 2rem


    label
        font-size: 1rem
        color: black
    &-inputText
        background: transparent
        border: 2px solid #CDC1E1
        width: 70vw
        height: 20px
        font-size: 1rem
        color: #CDC1E1
        margin-bottom: 1rem
        padding: 1rem
    &-textarea
        background: transparent
        border: 2px solid #CDC1E1
        width: 70vw
        max-width: 70vw
        height: 300px
        max-height: 400px
        font-size: 1rem
        color: #CDC1E1
        margin-bottom: 1rem
        padding: 1rem
    &-button
        width: 120px
        height: 70px
        font-size: 1rem
        line-height: 50px
        background: linear-gradient(90deg, rgba(255,54,103,1) 0%, rgba(246,80,75,1) 100%)
        font-weight: 700
        border-radius: 10px
        text-transform: uppercase
        text-align: center
        margin: 0 auto
        color: white
    &-step
        width: 100%
        margin-top: 10vh



</style>
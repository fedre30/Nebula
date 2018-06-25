// assets/js/app.js
import Vue from 'vue';
import Homepage from './pages/Homepage.vue';
import router from './router';
import VueYoutube from 'vue-youtube'
import PrettyCheckbox from 'pretty-checkbox-vue';

Vue.use(PrettyCheckbox);

Vue.use(VueYoutube);

Vue.config.productionTip = false

new Vue({
    el: '#app',
    router,
    components: {Homepage},
});






// assets/js/app.js
import Vue from 'vue';
import Homepage from './pages/Homepage.vue';
import router from './router';
import VueYoutube from 'vue-youtube'
import PrettyCheckbox from 'pretty-checkbox-vue';
import VueScrollTo from 'vue-scrollto';
Vue.use(PrettyCheckbox);

Vue.use(VueYoutube);

Vue.use(VueScrollTo);

Vue.use(VueScrollTo, {
    container: "body",
    duration: 2000,
    easing: "ease",
    offset: 0,
    cancelable: true,
    onStart: false,
    onDone: false,
    onCancel: false,
    x: false,
    y: true
});

Vue.config.productionTip = false;

new Vue({
    el: '#app',
    router,
    components: {Homepage},
});






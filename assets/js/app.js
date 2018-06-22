// assets/js/app.js
import Vue from 'vue';
import Homepage from './pages/Homepage.vue';
import router from './router';

Vue.config.productionTip = false

new Vue({
    el: '#app',
    router,
    components: {Homepage},
});






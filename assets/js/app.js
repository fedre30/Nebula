// assets/js/app.js
import Vue from 'vue';
import Homepage from './pages/Homepage.vue';
//import Film_card from './pages/Film_card.vue'
import router from './router';

/**
 * Create a fresh Vue Application instance
 */

new Vue({
    el: '#app',
    router,
    components: {Homepage},
});






import Vue from 'vue'
import Router from 'vue-router'
import Homepage from '../pages/Homepage.vue'
import Film_card from '../pages/Film_card.vue'

Vue.use(Router);
Vue.use(Film_card);


export default new Router({
    routes: [
        {
            path: '/',
            name: 'home',
            component: Homepage
        },
        {
            path: '/film',
            name: 'film',
            component: Film_card,
        }
    ]
})


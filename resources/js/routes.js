import Vue from 'vue'
import Router from 'vue-router'

Vue.use(Router)


//

import dashboard from './components/dashboard.vue'
import profile from './components/profile.vue'

// Breadcrumb Route
Vue.component('profilebreadcrumb', require('./components/breadcrumb/profile_breadcrumb.vue').default);

const routes = [
    {
        path: '/home',
        component: dashboard
    },
    {
        path: '/profile',
        component: profile
    }
]


export default new Router(
    {
        mode: 'history',
        routes
    }
)

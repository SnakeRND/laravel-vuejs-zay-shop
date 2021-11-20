require('./bootstrap')

import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

import App from './components/App'
import Home from './components/Home'
import Shop from './components/Shop'
import About from './components/About'
import Contact from './components/Contact'

const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/',
            name: 'home',
            component: Home,
        },
        {
            path: '/about',
            name: 'about',
            component: About,
        },
        {
            path: '/shop',
            name: 'shop',
            component: Shop,
        },
        {
            path: '/contact',
            name: 'contact',
            component: Contact,
        },
    ]
})

const app = new Vue({
    el: '#app',
    components: {App},
    router
})

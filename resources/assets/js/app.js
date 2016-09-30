/**
 * First we will load all of this project's JavaScript dependencies which
 * include Vue and Vue Resource. This gives a great starting point for
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

Vue.use(VueRouter)

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the body of the page. From here, you may begin adding components to
 * the application, or feel free to tweak this setup for your needs.
 */

Vue.component('example', require('./views/components/Example.vue'))
const Index = Vue.component('index', require('./views/Index.vue'))
const Cerita = Vue.component('cerita', require('./views/Cerita.vue'))

const router = new VueRouter({
    mode: 'history',
    base: __dirname,
    routes: [
        { path: '/', component: Index },
        { path: 'cerita', component: Cerita },
    ],
})

const app = new Vue({
    el: '#app',
    router: router,
})

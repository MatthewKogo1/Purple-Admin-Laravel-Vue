/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

 
import VueRouter from 'vue-router' 
 
    //Routes
import { routes } from './routes';

Vue.prototype.$globalValue = 'Global Scope!';
/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('top-nav', require('./components/includes/TopNav.vue').default);
Vue.component('side-nav', require('./components/includes/SideNav.vue').default);
Vue.component('dashboard-component', require('./components/pages/DashboardComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

//Register Routes
const router = new VueRouter({
    routes,
    mode: 'hash',

})

const app = new Vue({
    el: '#app',
    router
});
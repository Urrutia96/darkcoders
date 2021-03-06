
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

import Vuetify from 'vuetify';
import 'vuetify/dist/vuetify.min.css';
import VeeValidate from 'vee-validate';
import attrEs from 'vee-validate/dist/locale/es.js'
//import axios from 'axios';


Vue.use(Vuetify);
Vue.use(VeeValidate,{
    locale:'es',
    dictionary:{
        es: attrEs
    }
});
//Vue.use(axios);
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
Vue.component('dashboard', require('./components/layouts/DashboardComponent.vue'))
Vue.component('home-dash',require('./components/admin/HomeComponent.vue'));
Vue.component('users-dash',require('./components/admin/UsersComponent.vue'));
Vue.component('cursos-dash',require('./components/admin/CursosComponent.vue'));
Vue.component('mostrar-curso-dash',require('./components/admin/MostrarCursosComponent.vue'));
Vue.component('registro',require('./components/RegistroComponent.vue'));

const app = new Vue({
    el: '#app'
});

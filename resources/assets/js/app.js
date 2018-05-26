
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
// window.bulmaCalendar = require('bulma-extensions/bulma-calendar/dist/bulma-calendar.min.js');
// import bulmaCalendar from 'bulma-extensions/bulma-calendar/dist/bulma-calendar.min.js';

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('quest-admin', require('./components/QuestAdmin.vue'));

const app = new Vue({
    el: '#app'
});

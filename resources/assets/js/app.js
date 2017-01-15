
/**
 * First we will load all of this project's JavaScript dependencies which
 * include Vue and Vue Resource. This gives a great starting point for
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

require('./Core/Classes');

Vue.component('m4y-mentor', require('./components/Mentorlist/M4y-mentor.vue'));
Vue.component('m4y-mentorlist', require('./components/Mentorlist/M4y-mentorlist.vue'));


const app = new Vue({
    el: '#app'
});
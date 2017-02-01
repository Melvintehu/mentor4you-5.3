window.Vue = require('vue');
require('./Core/Classes');

Vue.component('m4y-mentor', require('./components/Mentorlist/M4y-mentor.vue'));
Vue.component('m4y-mentorlist', require('./components/Mentorlist/M4y-mentorlist.vue'));

const app = new Vue({
    el: '#app'
});
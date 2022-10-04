require('./bootstrap');

import vue from 'vue'
window.Vue = vue;

import App from './components/App.vue';

const app = new Vue({
    el: '#app',
    render: h => h(App),
});

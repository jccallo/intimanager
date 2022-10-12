require('./bootstrap');

// import vue
import vue from 'vue'
window.Vue = vue;

// import axios & vue-axios
import axios from 'axios'
import VueAxios from 'vue-axios'
Vue.use(VueAxios, axios) // se usara de forma global

// import router
import router from './router';

// import components
import App from './modules/App.vue';

// vue instance
const app = new Vue({
    el: '#app',
    router,
    render: h => h(App),
});

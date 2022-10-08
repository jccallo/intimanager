require('./bootstrap');

// import vue
import vue from 'vue'
window.Vue = vue;

// import router
import router from './router';

// import components
import App from './components/App.vue';

// vue instance 
const app = new Vue({
    el: '#app',
    router,
    render: h => h(App),
});

// vue
import Vue from 'vue';

// import vue-router
import VueRouter from 'vue-router';

// vue-router loaded for the application
Vue.use(VueRouter);

// components
import Auth from "./components/auth/Index.vue";
import Dashboard from './components/dashboard/Dashboard.vue';
import UserIndex from './components/user/Index.vue';
    
// routes
const routes = [
    {
        path: '/',
        name: 'auth',
        component: Auth
    },
    {
        path: '/dashboard',
        component: Dashboard,
        children: [
            {
                path: 'user',
                name: 'user-index',
                component: UserIndex,
            },
            {
                path: '',
                redirect: { name: 'user-index' }
            },
            {
                path: '*',
                redirect: { name: 'user-index' }
            }
        ]    
    },
    // component: () => import(/* webpackChunkName: "about" */ '../views/AboutView.vue')
];

// router instance
const router = new VueRouter({
    mode: 'history',
    routes,
});

// export router instance
export default router;
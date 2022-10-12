// vue
import Vue from 'vue';

// import vue-router
import VueRouter from 'vue-router';

// vue-router loaded for the application
Vue.use(VueRouter);

// modules
import Auth from "./modules/auth/Index.vue";
import Dashboard from './modules/dashboard/Dashboard.vue';
import DashboardIndex from './modules/dashboard/pages/Index.vue';

// user
import UserIndex from './modules/user/Index.vue';
import UserCreate from "./modules/user/Create.vue";
import UserEdit from "./modules/user/Edit.vue";
import UserShow from "./modules/user/Show.vue";

import FriendIndex from './modules/friend/Index.vue'

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
            // user
            {
                path: 'user',
                name: 'user-index',
                component: UserIndex,
            },
            {
                path: 'user/create',
                name: 'user-create',
                component: UserCreate,
            },
            {
                path: 'user/:id',
                name: 'user-show',
                component: UserShow,
            },
            {
                path: 'user/:id/edit',
                name: 'user-edit',
                component: UserEdit,
            },

            //  friend
            {
                path: 'friend',
                name: 'friend-index',
                component: FriendIndex,
            },
            {
                path: '',
                name: 'dashboard-index',
                component: DashboardIndex,
            },
            {
                path: '*',
                redirect: { name: 'dashboard-index' }
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

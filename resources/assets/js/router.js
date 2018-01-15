import Vue from 'vue';
import VueRouter from 'vue-router';

import Example from './pages/homes/example.vue';
Vue.component('Example',Example);
Vue.use(VueRouter);
const router=new VueRouter({
  mode: 'hash',
    routes: [
        { path: '/',name:'home', component: Example },
    ]
});

export default router

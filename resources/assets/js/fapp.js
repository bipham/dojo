import Vue from 'vue';
import bComponent from 'b-components';
import VueRouter from 'vue-router';

import HomeRouter from './pages/homes/home_router';
import ProductRouter from './pages/products/product_router';
import CheckoutRouter from './pages/checkouts/checkout_router';
import CartRouter from './pages/carts/cart_router';
import MyAccountRouter from './pages/myaccounts/myaccount_router';

import Header from './components/partials/header.vue';
import Footer from './components/partials/footer.vue';
import App from './App.vue';
Vue.use(VueRouter);

require('./mixins');

const router=new VueRouter({
  mode:'hash',
  routes:[
    ...HomeRouter,
    ...ProductRouter,
    ...CheckoutRouter,
    ...CartRouter,
    ...MyAccountRouter
  ]
});

Vue.component('Header',Header);
Vue.component('Footer',Footer);
const app = new Vue({
    el: '#app',
    router,
    template:'<App/>',
    components:{App}
});

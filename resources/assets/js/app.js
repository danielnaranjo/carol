
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

//require('./bootstrap');
import Element from 'element-ui'
import locale from 'element-ui/lib/locale/lang/en'
import 'element-ui/lib/theme-default/index.css'

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// Services
Vue.use(Element, { locale })

Vue.component('TotalCost', require('./components/TotalCost.vue'));
Vue.component('ProductList', require('./components/ProductList.vue'));
Vue.component('ShoppingCart', require('./components/ShoppingCart.vue'));

// Filters
Vue.filter('dolares', function (value) {
    return 'USD $' + parseFloat(value).toFixed(2);
});
Vue.filter('pesos', function (value) {
    return 'ARS $' + parseFloat(value * 23).toFixed(2);
});

const app = new Vue({
    el: '#app'
});

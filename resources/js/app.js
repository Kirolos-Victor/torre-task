import Vue from "vue";

require('./bootstrap');

window.Vue = require('vue').default;
import Store from './store';

Vue.component('quote-component', require('./components/QuoteComponent.vue').default);
//user
Vue.component('user-index', require('./components/users/index.vue').default);


const app = new Vue({
    //so important to add store with small s letter
    store: Store,
    el: '#app',
});

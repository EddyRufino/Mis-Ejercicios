require('./bootstrap');

window.Vue = require('vue');

import store from './store'

Vue.component('brawl', require('./components/brawls/Brawl.vue').default);
Vue.component('brawl-color-selected', require('./components/brawls/BrawlColorSelected.vue').default);

const app = new Vue({
    el: '#app',
    store
});

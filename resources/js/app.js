require('./bootstrap');

window.Vue = require('vue');

import store from './store'
import auth from './mixins/auth';

Vue.mixin(auth);

Vue.component('brawl', require('./components/brawls/Brawl.vue').default);
Vue.component('brawl-color-selected', require('./components/brawls/BrawlColorSelected.vue').default);

const app = new Vue({
    el: '#app',
    store
});

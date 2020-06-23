require('./bootstrap');

window.Vue = require('vue');
window.EventBus = new Vue();

import store from './store'
import auth from './mixins/auth';

Vue.mixin(auth);

Vue.component('brawl', require('./components/brawls/Brawl.vue').default);
Vue.component('choose-image-color', require('./components/brawls/ChooseImageColor.vue').default);
Vue.component('brawl-color-selected', require('./components/brawls/BrawlColorSelected.vue').default);
Vue.component('brawl-image-selected', require('./components/brawls/BrawlImageSelected.vue').default);

const app = new Vue({
    el: '#app',
    store
});

import Vue from 'vue';
import Vuex from 'vuex';

Vue.use(Vuex);

export default new Vuex.Store({
  state: {
      color: '#e55934',
  },
  mutations: {
    CHANGE_COLOR(state, color) {
      state.color = color
    }
  },
  actions: {},
  getters: {}
});
import Vue from 'vue';
import Vuex from 'vuex';

Vue.use(Vuex);

// export const ADD_USERS = 'ADD_USERS';

export default new Vuex.Store({
  state: {
    color: null,
    image: '/img/default.png',
  },
  mutations: {
    USER_COLOR(state, brawl) {
      state.color = brawl.color;
    },
    USER_IMAGE(state, brawl) {
      state.image = brawl.image;
    },
  },
  actions: {
    // login({ dispatch }) {
    //   return dispatch("getUser");
    // },
    // getUser({ commit }, brawl) {
      // axios.get('/users').then(res => {
        // commit('SET_USER', brawl);
        // state.user = res.data;
      // })      
    // }
  }
});
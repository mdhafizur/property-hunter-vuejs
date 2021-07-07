import Vuex from 'vuex';
import Vue from 'vue';
import axios from 'axios';

import NewsStore from '../modules/news/store/store';

Vue.use(Vuex);

export default new Vuex.Store({
  modules: {
    news: NewsStore,
  },

  state: {
    // data
    user: {
      //   id: null,
      //   email: null,
      //   contact_no: null,
      //   subscription: null,
      //   email_verified_at: null,
      //   isVerified: null,
    },
    errors: null,
  },
  getters: {
    // computed properties
    getUserInfo(state) {
      return state.user;
    },

    getErrors(state) {
      return state.errors;
    },

    ifAuthenticated(state) {
      return state.user.id !== null;
    },
  },

  actions: {
    // methods
    signUp({ commit }, authData) {
      return new Promise((resolve, reject) => {
        axios
          .post('http://127.0.0.1:8000/api/register/', {
            user: {
              email: authData.email,
              password: authData.password,
              password_confirmation: authData.password,
              contact_no: authData.contact_no,
            },
          })
          .then((res) => {
            // console.log('store', res);
            if (res.status == 201) {
              resolve(res);

              commit(
                'setUser',
                res.data.data
                //     {
                // id: res.data.data.id,
                // email: res.data.data.email,
                // contact_no: res.data.data.contact_no,
                // subscription: res.data.data.subscription,
                // email_verified_at: res.data.data.email_verified_at,
                // isVerified: res.data.data.isVerified,
                //     }
              );
            }
          })
          .catch((error) => {
            if (error.response) {
              reject(error.response.data.errors);
              //   commit('setErrors', error.response.data.errors);
            }
          });
      });
    },

    logIn({ commit }, data) {
      return new Promise((resolve, reject) => {
        axios
          .post('http://127.0.0.1:8000/api/login/', {
            email: data.email,
            password: data.password,
          })
          .then((response) => {
            resolve(response);
          })
          .catch((error) => {
            if (error.response) {
              reject(error.response.data.errors);
              //   commit('setErrors', error.response.data.errors);
            }
          });
      });
    },

    // logout

    logout({ commit }) {
      return new Promise((resolve, reject) => {
        axios
          .post('http://127.0.0.1:8000/api/logout/', {})
          .then((res) => {
            console.log(res);
            resolve(res);
            if (res.status === 204) {
              commit('clearAuth');
            }
          })
          .catch((err) => {
            reject(err);
            console.log(err);
          });
      });
    },

    // auto login user
    AutoLogin({ commit }) {
      const token = localStorage.getItem('userId');
      //   if (!token) {
      //     return;
      //   }
      const userId = localStorage.getItem('userId');
      //   const token = localStorage.getItem('token');
      commit('setUser', {
        id: userId,
      });
    },
  },

  mutations: {
    // update states

    setUser(state, user) {
      //   state.user.id = user.id;
      //   state.user.email = user.email;
      //   state.user.subscription = user.subscription;
      state.user = user;
    },

    setErrors(state, errors) {
      state.errors = errors;
    },

    clearAuth(state) {
      state.user.id = null;
      localStorage.clear();
    },
  },
});

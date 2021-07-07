import Vue from 'vue';
import Router from 'vue-router';

import Register from '../views/auth/Register.vue';

import Dashboard from '../views/Dashboard.vue';
import Main from '../layout/MainLayout.vue';
import store from '../store/store';



import NewsRoutes from '../modules/news/router/router';

Vue.use(Router);

export default new Router({
  linkExactActiveClass: 'active-link-class',
  mode: 'history',
  base: process.env.BASE_URL,
  routes: [
    {
      path: '/',
      name: 'Main',
      component: Main,
    },
    {
      path: '/register',
      name: 'Register',
      component: Register,
    },
    {
      path: '/dashboard',
      name: 'Dashboard',
      component: Dashboard,
      beforeEnter(to, from, next) {
        if (store.state.user.id) {
          next();
        } else {
          next('/');
        }
      },
    },

    {
      path: '/verification/email',
      name: 'VerifyEmail',
      component: () =>
        import(
          /* webpackChunkName: "VerifyEmail" */ '../components/verification/VerifyEmail.vue'
        ),
    },
    {
      path: '/verification/OTP',
      name: 'VerifyOTP',
      component: () =>
        import(
          /* webpackChunkName: "VerifyOTP" */ '../components/verification/VerifyOTP.vue'
        ),
    },
    {
      path: '/verification/confirm-account',
      name: 'ConfirmAccount',
      component: () =>
        import(
          /* webpackChunkName: "ConfirmAccount" */ '../components/verification/ConfirmAccount.vue'
        ),
    },
    {
      path: '/password/reset',
      name: 'ResetPassword',
      component: () =>
        import(
          /* webpackChunkName: "ResetPassword" */ '../components/auth/ResetPassword.vue'
        ),
    },

    ...NewsRoutes,
  ],

  scrollBehavior: function(to) {
    if (to.hash) {
      return {
        selector: to.hash,
      };
    }
  },
});

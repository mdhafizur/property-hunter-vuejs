/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

// window.Vue = require('vue').default;

import Vue from 'vue'
import App from './vue/App.vue'
import router from './vue/router'
import store from './vue/store'
import './vue/plugins/base'
import './vue/plugins/chartist'
import './vue/plugins/vee-validate'
import vuetify from './vue/plugins/vuetify'

import i18n from './vue/i18n'

Vue.config.productionTip = false

new Vue({
    router,
    store,
    vuetify,
    i18n,
    render: h => h(App),
}).$mount('#app')



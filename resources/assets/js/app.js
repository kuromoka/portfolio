
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
import VueI18n from 'vue-i18n';
import '@fortawesome/fontawesome-free/css/all.css';
import Vuetify from 'vuetify';
import colors from 'vuetify/es5/util/colors'
import 'vuetify/dist/vuetify.min.css';
import Locale from './vue-i18n-locales.generated';

window.Vue.use(VueI18n);
const i18n = new VueI18n({
    locale: 'en',
    messages: Locale,
    silentTranslationWarn: true,
});

window.Vue.use(Vuetify, {
    theme: {
        primary: colors.teal.darken1,
        secondary: colors.indigo.darken1,
    }
});

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('app-component', require('./components/AppComponent.vue').default);

const app = new Vue({
    el: '#app',
    i18n: i18n,
    iconfont: 'fa',
});

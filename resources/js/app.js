/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

import "./bootstrap.js";
import Vue from "vue";
import VueAWN from "vue-awesome-notifications";
import NotificationsUser from "./components/NotificationsUser.vue";
import ButtonsMag from "./components/ButtonsMag.vue";
import NewsletterField from "./components/Newsletter.vue";
const options = {
    position: "bottom-left",
    maxNotifications: 5
};
/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))
// Vue.component('Notification', require('./components/ExampleComponent.vue').default);
Vue.use(VueAWN, options);
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

new Vue({
    components: {
        NotificationsUser,
        ButtonsMag,
        NewsletterField
    },
    el: "#panel"
});

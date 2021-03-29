import "./bootstrap.js";
import Vue from "vue";
import VueCompositionAPI from '@vue/composition-api'
import VueAWN from "vue-awesome-notifications";
import NotificationsUser from "./components/NotificationsUser.vue";
import ButtonsMag from "./components/ButtonsMag.vue";
import NewsletterField from "./components/Newsletter.vue";
Vue.use(VueCompositionAPI)

new Vue({
    components: {
        NotificationsUser,
        ButtonsMag,
        NewsletterField
    },
    el: "#panel"
});

/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require("./bootstrap");

window.Vue = require("vue");

import VueRouter from "vue-router";

Vue.use(VueRouter);

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

let routes = [
    {
        path: "/user-home",
        component: require("./components/backend/user-home.vue").default
    },
    {
        path: "/user-bookings",
        component: require("./components/backend/user-bookings.vue").default
    },
    {
        path: "/user-reviews",
        component: require("./components/backend/user-reviews.vue").default
    },
    {
        path: "/user-likes",
        component: require("./components/backend/user-likes.vue").default
    },
    {
        path: "/user-profile",
        component: require("./components/backend/user-profile.vue").default
    }
];

const router = new VueRouter({
    routes // short for `routes: routes`
});

Vue.component(
    "user-sidemenu",
    require("./components/backend/user-sidemenu.vue").default
);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: "#app",
    data: {
        isActive: false
    },
    router
});

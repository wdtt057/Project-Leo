require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('landing-page', require('./components/landingpage.vue').default);
Vue.component('navbar', require('./components/navbar.vue').default);
Vue.component('login', require('./components/login.vue').default);
Vue.component('course', require('./components/course.vue').default);
Vue.component('signup', require('./components/signup.vue').default);
Vue.component('contact-page', require('./components/contactpage.vue').default);
Vue.component('aboutus', require('./components/aboutus.vue').default);


/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});
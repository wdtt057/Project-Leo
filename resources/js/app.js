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

Vue.component('landing-page', require('./components/LandingPage.vue').default);
Vue.component('navbar', require('./components/Navbar.vue').default);
Vue.component('navbardash', require('./components/NavbarDash.vue').default);
Vue.component('aside-menu', require('./components/AsideMenu.vue').default);
Vue.component('login', require('./components/Login.vue').default);
Vue.component('course', require('./components/Course.vue').default);
Vue.component('signup', require('./components/Signup.vue').default);
Vue.component('contact-page', require('./components/ContactPage.vue').default);
Vue.component('aboutus', require('./components/AboutUs.vue').default);

Vue.component('lesson-video', require('./components/LessonVideo.vue').default);
// HTML Lessons
Vue.component('lesson-slides', require('./components/LessonSlides.vue').default);
Vue.component('intro-html-one', require('./components/html/IntroHTML1.vue').default);
Vue.component('html-exercise-1a', require('./components/html/HTMLExercise1A.vue').default);
Vue.component('html-quiz-1a', require('./components/html/HTMLQuiz1A.vue').default);

// CSS Lessons

Vue.component('css-exercise-1a', require('./components/css/CSSExercise1A.vue').default);

//JavaScript Lessons
Vue.component('js-exercise-1a', require('./components/js/JavaScriptExercise1A.vue').default);
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});
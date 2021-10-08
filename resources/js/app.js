require('./bootstrap');

// Uncomment if you need Alpine.js
import Alpine from 'alpinejs'
import collapse from '@alpinejs/collapse'
Alpine.plugin(collapse)
window.Alpine = Alpine
Alpine.start()



// import Swiper JS
import Swiper from 'swiper';

// Uncomment if you need Vue
// window.Vue = require('vue');
// Vue.component('example', require('./components/Example.vue').default);
// new Vue({
//     el: '#app'
// });

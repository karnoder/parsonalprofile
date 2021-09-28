/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */


// DashBoard Js File Start
require('../../public/dashboard/assets/js/popper.min');
require('../../public/dashboard/assets/js/bootstrap.min');

// require('./mask');
require('../../public/dashboard/assets/plugins/slimscroll/jquery.slimscroll.min');
require('../../public/dashboard/assets/plugins/apexchart/apexcharts.min');
require('../../public/dashboard/assets/plugins/apexchart/dsh-apaxcharts');
require('../../public/dashboard/assets/plugins/raphael/raphael.min');

require('../../public/dashboard/assets/js/form-validation');
require('../../public/dashboard/assets/js/jquery.maskedinput.min');
require('../../public/dashboard/assets/js/select2.min');
require('../../public/dashboard/assets/js/script');

// //DashBoard Js File End

window.Vue = require('vue').default;

// IImport Routes File
import router from './routes'



// Vue.component('example-component', require('./components/ExampleComponent.vue').default);

// Id For Content
const app = new Vue({
    el: '#app',
    router,
    data:{}
});

// Id For Nav
const nav = new Vue({
    el: '#nav',
    router,
    data:{}
});




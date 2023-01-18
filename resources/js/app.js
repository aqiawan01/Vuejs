/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

// Route Imported
 import {routes} from './routes';

 // Import User Class
 import User from './Helpers/User';
 window.User = User

import Noty from 'noty';
window.Noty = Noty

// Import User Class
import Notification from './Helpers/Notification';
 window.Notification = Notification

 
 // sweet Alert
import Swal from 'sweetalert2'
window.Swal = Swal;

const Toast = Swal.mixin({
  toast: true,
  position: 'top-end',
  showConfirmButton: false,
  timer: 3000,
  timerProgressBar: true,
  didOpen: (toast) => {
    toast.addEventListener('mouseenter', Swal.stopTimer)
    toast.addEventListener('mouseleave', Swal.resumeTimer)
  }
});

window.Toast = Toast;


// end Sweet alert
window.Reload = new Vue();


const router = new VueRouter({
	routes,
	mode: 'history'
})

// const index = require('./components/index.vue').default;
// const login =  require('./components/auth/login.vue').default;


// const router = new VueRouter({
//   mode: 'history',
//   routes: [
//     { path: '',
//       // a single route can define multiple named components
//       // which will be rendered into <router-view>s with corresponding names.
//       components: {
//         default: login,
//          a: index
        
//       }
//     },
//     {
//       path: '/index',
//       components: {
//         default: index,
//           a: login
//       }
//     }
//   ]
// })

new Vue({
    router, 
  el: '#app'
})




// const app = new Vue({
//     el: '#app',
//     router
// });

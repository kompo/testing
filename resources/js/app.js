import "@babel/polyfill"; //for IE..

require('./bootstrap');

window.Vue = require('vue');

// Vuravel packages
require('vue-kompo')

const app = new Vue({ el: '#app' })
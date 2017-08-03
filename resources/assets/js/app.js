require('jquery.scrollTo');
require('./bootstrap');
require('./main.js');

window.Event = new Vue();

const app = new Vue({
    el: '#app',
});

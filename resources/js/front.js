window.Vue = require('vue');

import App from './App.vue';

const app = new Vue(
    {
        el: '#root',
        render: h => h(App)
    }
);
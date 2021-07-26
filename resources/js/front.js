window.Vue = require('vue').default;

import App from './App.vue';

const app = new Vue(
    {
        el: '#root',
        render: h => h(App)
    }
)
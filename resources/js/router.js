import Vue from 'vue';
import VueRouter from 'vue-router';

Vue.use(VueRouter);

import Home from './pages/Home';
import About from './pages/About';
import Blog from './pages/Blog';
import SinglePost from './pages/SinglePost';

const router = new VueRouter({
    mode: 'history',
    linkExactActiveClass: 'active',
    routes: [
        {
           path: '/',
           name: 'home',
           component: Home 
        },
        {
            path: '/about',
            name: 'about',
            component: About 
         },
         {
            path: '/blog',
            name: 'blog',
            component: Blog 
         },
         {
            path: '/blog/:slug',
            name: 'single-post',
            component: SinglePost
        },
    ]
});

export default router;

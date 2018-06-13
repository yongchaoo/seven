import Vue from 'vue'
import Router from 'vue-router'

Vue.use(Router)


let routeObj  = [

]

let  router = new Router({

    routes: [
        {
            path: '/',
            component: resolve => require(['~/views/layout/App.vue'], resolve),
            meta: {
                title: '首页',
                keepAlive: true
            },
            children: routeObj
        },
        {
            path: '/login',
            name: 'Login',
            meta: {
                title: '登录',
                keepAlive: true
            },
            component: resolve => require(['~/views/login/Login.vue'], resolve),
        }
    ]
});

export {routeObj, router}
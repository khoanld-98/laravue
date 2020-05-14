
import Vue from 'vue'
import Router from 'vue-router'
import home from "./components/Pages/Home.vue"

Vue.use(Router)
export default new Router ( {
    routes: [
        {
            name: 'home',
            path: '/',
            component :home
        }
    ]
})

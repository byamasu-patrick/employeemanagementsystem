import Vue from 'vue'
import Router from 'vue-router'
import Login from './components/auth/Login.vue'
import NewEmployee from './components/admin/NewEmployee.vue'
import EmployeeList from './components/admin/EmployeeList.vue'
// Register the router plugin
Vue.use(Router)

const routes = [
    {
        path: '/login',
        component: Login

    },
    {
        path: '/admin/new',
        component: NewEmployee

    },
    {
        path: '/admin/list',
        component: EmployeeList

    },
]

export default new Router({
    mode: 'history',
    routes: routes
});

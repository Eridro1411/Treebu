import Vue from 'vue'
import App from './App.vue'

import VueRouter from 'vue-router'

import GroundsList from '@/components/GroundsList.vue'
import GroundCreate from '@/components/GroundCreate.vue'
import GroundDetail from '@/components/GroundDetail.vue'
import GroundEdit from '@/components/GroundEdit.vue'

Vue.use(VueRouter)

const routes = [
  {
    path: "/list",
    component: GroundsList
  },
  {
    path: "",
    redirect:"/list"
  },
  {
    path: "/create",
    component: GroundCreate
  },
  {
    path: "/detail/:id",
    component: GroundDetail
  },
  {
    path: "/edit/:id",
    component: GroundEdit
  },
]

const router = new VueRouter({
  mode:"history",
  routes
})
Vue.config.productionTip = false

new Vue({
  router,
  render: h => h(App),
}).$mount('#app')

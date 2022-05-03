// The Vue build version to load with the `import` command
// (runtime-only or standalone) has been set in webpack.base.conf with an alias.
import Vue from 'vue'
import App from './App'
import router from './router'

//引入富文本编辑器
import VueQuillEditor from 'vue-quill-editor'
import 'quill/dist/quill.core.css'
import 'quill/dist/quill.snow.css'
import 'quill/dist/quill.bubble.css'
Vue.use(VueQuillEditor)
Vue.config.productionTip = false
/* eslint-disable no-new */

//引入element-ui
import{
  Select,
}from 'element-ui'

Vue.use(Select)

new Vue({
  el: '#app',
  router,
  components: { App },
  template: '<App/>'
})

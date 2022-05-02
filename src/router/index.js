import Vue from 'vue'

// 导入路由
import Router from 'vue-router'
Vue.use(Router)

// 导入VueResource插件
import VueResource from 'vue-resource';
Vue.use(VueResource);

// 入口页
import Entrance from '@/components/Entrance'

// 导航栏
import NavigationBar from '@/components/NavigationBar.vue'

//主页
import Home from '@/components/Home/Home.vue'

// 仓库
import Warehouse from '@/components/WareHouse/WareHouse.vue'

//编辑
import Edit from '@/components/Edit/Edit.vue'
  //Markdown
  import Markdown from '@/components/Edit/views/Markdown.vue'

// 关于我
import AboutMe from '@/components/AboutMe/AboutMe.vue'

export default new Router({
  routes: [

    {
      path: '/navigationBar', component: NavigationBar, children: [
        //  主页 
        { path: '/home', component: Home },

        //  仓库 
        { path: '/warehouse', component: Warehouse },

        //  编辑
        {
          path: '/edit', component: Edit, children: [
            //  Markdown
            { path: '/markdown', component: Markdown },
          ]
        },

        //  关于我
        {path:'/aboutMe',component:AboutMe}
      ]
    },

    /**入口页面 */
    { path: '/entrance', component: Entrance },

    { path: '*', redirect: '/entrance' },//默认跳转路由
  ]
})

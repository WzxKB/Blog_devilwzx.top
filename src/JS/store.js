import  Vue from 'vue'
import Vuex from 'vuex'

Vue.use(Vuex);

//1.state在vuex中存储数据
var state={
   bg:'white',

   artContent:"",
   artHtml:""
}

//mutations 里面放的是方法,方法主要用于改变state里面的数据
var mutations={
    setBg(state,bg){
        state.bg=bg;
    },
    setArtCH(state,content){
        state.artContent=content;
    
    }
}
/*getters的作用是类似于计算属性  ,    改变state里面的count属性的时候会触发 getters里面的方法
获取新的值*/
var getters={

}
 //通过触发里面的方法,来触发mutation里的方法,它允许你异步的执行方法
var actions={
   

}

//vuex 实例化Vuex.store
const store = new Vuex.Store({
    state,
    mutations,
    getters,
    actions
})

export default store
<!--
 * @Author: devilwzx
 * @Date: 2022-04-17 10:11:01
 * @LastEditors: devilwzx
 * @LastEditTime: 2022-04-17 10:11:01
 * @FilePath: \Php-Vue\vue\src\componnets\AboutMe\AboutMe.vue
 * @Description: 
 * 
 * @My website: devilwzx.top
 * Copyright (c) 2022 by devilwzx, All Rights Reserved. 
-->
<template>
  <!--这一行是重点,这里通过 : 绑定了class属性,
     然后呢,就可以通过按钮的触发方法,来改变className的值
     让他是等于dark还是white,这样,就可以来引用不同的css文件了-->

     <!-- 主题文件 -->
  <div :class="className">
    <!-- 图标的连接 -->
    
    <div class="BOX">
      <!-- 头像和旁边的光圈 -->
      <div class="ringContainer">

        <!-- 头像的光点 -->
        <div class="ring"></div>
        <div class="ring"></div>
        <div class="ring"></div>
        <div class="ring"></div>
        <!-- 头像 -->
        <div class="avatar"><img :src="img" /></div>
          
          
        
      </div>
      <!-- 导航栏 -->
      <div class="NavContainer">
          <router-link to="/home" class="Nav" style="--i: 1">
            Home
          </router-link>
          <router-link to="/wareHouse" class="Nav" style="--i: 2">
            WareHouse
          </router-link>
          <router-link to="/edit" class="Nav" style="--i: 3">
            Edit
          </router-link>
          <router-link to="/aboutMe" class="Nav" style="--i: 4">
            AboutMe
          </router-link>               
      </div>
      <!-- 底下的图标 -->
      <div class="iconContainer">
            <div class="icon">
              <div class="iconIn">
                <a href="https://github.com/WzxKB/Blog-devilwzx.top/tree/master">
                  <i class="fa-github" aria-hidden="true"></i>
                </a>
              </div>
              <div class="iconIn">
                  <a href="https://space.bilibili.com/295670011">
                    <i class="fa fa-youtube-play" aria-hidden="true"></i>
                  </a>
              </div>
              <div class="iconIn">
                  <a href="#">
                    <i class="fa fa-qq" aria-hidden="true"></i>
                  </a>
              </div>
              <div class="iconIn">
                  <a href="#">
                    <i class="fa fa-weixin" aria-hidden="true"></i>
                  </a>
              </div>
            </div>
      </div> 
      <!-- 关灯的按钮 -->
      <button class="switchBtn" @click="changeStyle()"></button>
  </div>
</div>
</template>
<script>
import store from '../JS/store.js'
export default {
  data() {
    return {
      className:this.$store.state.bg,
      // 用require引用可以解决图片不显示的问题
      img: require("../assets/img/头像.jpg"),
    };
  },
  store,
  methods: {
    changeStyle() {
      console.log(this.$store.state.bg)
      this.className == "white"
        ? (this.$store.commit('setBg','dark'))
        : (this.$store.commit('setBg','white'));
       this.className=this.$store.state.bg
    },
  },
};
</script>
<style>
 /* 引用主css样式 */
@import "../CSS/Entrance.css"; 
</style>

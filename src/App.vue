<!--
 * @Author: devilwzx
 * @Date: 2022-04-08 18:08:03
 * @LastEditors: devilwzx
 * @LastEditTime: 2022-04-18 17:44:40
 * @FilePath: \vue-php\vue\src\App.vue
 * @Description: 
 * 
 * @My website: devilwzx.top
 * Copyright (c) 2022 by devilwzx, All Rights Reserved. 
-->
<template>
  <div id="app" ref="box">
    <router-link to="/entrance"></router-link>
    <router-view></router-view>
    <div class="square">
      <ul>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
      </ul>
    </div>
    <div class="circle">
      <ul>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
      </ul>
    </div>
  </div>
</template>
<script>
export default {
  data() {
    return {
      msg: "msg",
    };
  },
  methods: {
   
  },

};
</script>
<style>
@import "./CSS/App.css";
</style>
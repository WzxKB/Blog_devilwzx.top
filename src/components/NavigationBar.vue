<!--
 * @Author: devilwzx
 * @Date: 2022-04-17 10:00:21
 * @LastEditors: devilwzx
 * @LastEditTime: 2022-04-18 17:44:49
 * @FilePath: \vue-php\vue\src\componnets\NavigationBar.vue
 * @Description: 
 * 
 * @My website: devilwzx.top
 * Copyright (c) 2022 by devilwzx, All Rights Reserved. 
-->
<template>
  <div :class="BG">
    <div class="NavigationBar" :class="stick">
      <router-link to="/entrance" id="logo">DEVILWZX</router-link>
      <button class="switchBtn2" @click="changeStyle()"></button>
      <div class="ul">
        <div class="li">
          <router-link to="/home">Home</router-link>
        </div>
        <div class="li">
          <router-link to="/warehouse">warehouse</router-link>
        </div>
        <div class="li">
          <router-link to="edit">Edit</router-link>
        </div>
        <div class="li">
          <router-link to="/aboutMe">AboutMe</router-link>
        </div>
      </div>
    </div>
    <div class="Container">
      <router-view></router-view>
    </div>
  </div>
</template>
<script>
import store from '../JS/store.js'
export default {
  data() {
    return {
      stick: "",
      BG: this.$store.state.bg+'2',
    };
  },
  store,
  methods: {
    changeStyle() {
      this.BG == "white2"
        ? (this.$store.commit('setBg','dark'))
        : (this.$store.commit('setBg','white'));
        //这里必须要再设置一下,不然就赋不了值
      this.BG=this.$store.state.bg+'2'
    },
    setWhite(e) {
      if (window.scrollY > 0) {
        this.stick = "stick";
      }
      if (window.scrollY == 0) {
        this.stick = "";
      }
    },
  },
  mounted() {
    window.addEventListener("scroll", this.setWhite, true);
  },
};
</script>
<style>
@import "../CSS/NavigationBar.css";
</style>


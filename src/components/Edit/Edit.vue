<!--
 * @Author: devilwzx
 * @Date: 2022-04-17 10:10:23
 * @LastEditors: devilwzx
 * @LastEditTime: 2022-04-17 10:10:24
 * @FilePath: \Php-Vue\vue\src\componnets\TouchTheFish\TouchTheFish.vue
 * @Description: 
 * 
 * @My website: devilwzx.top
 * Copyright (c) 2022 by devilwzx, All Rights Reserved. 
-->
<template>
  <div id="Edit">
    <nav>
      <router-link to="/markdown">Markdown</router-link>
      <label>|</label>
      <router-link to="/quill">Quill</router-link>
    </nav>
    <blog-form></blog-form>
    <div class="edit-container">
      <router-view></router-view>
    </div>
  </div>
</template>
<script>
import Form from "./views/Form.vue";
import "@/CSS/Edit.css";

export default {
  data() {
    return {};
  },
  components: {
    "blog-form": Form,
  },
};
</script>


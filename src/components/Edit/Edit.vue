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
    <div>
        <h2>我是编辑</h2>
        <router-link to="/markdown">Markdown</router-link>
    <div>
        <router-view></router-view>
    </div>
    </div>
    
</template>
<script>
export default {
    data() {
        return{

        }
    }
}
</script>

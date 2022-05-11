<!--
 * @Author: devilwzx
 * @Date: 2022-04-17 10:10:46
 * @LastEditors: devilwzx
 * @LastEditTime: 2022-04-17 10:10:46
 * @FilePath: \Php-Vue\vue\src\componnets\Home\Home.vue
 * @Description: 
 * 
 * @My website: devilwzx.top
 * Copyright (c) 2022 by devilwzx, All Rights Reserved. 
-->
<template>
    <div>
        <Carousel></Carousel>
        <Information></Information>
        <Music></Music>
        <div id="Home">

        </div>
        <BulletinBoard></BulletinBoard>
        <Search></Search>
    </div>

</template>
<script>
//导入组件
import BulletinBoard from './views/BulletinBoard.vue'
import Information from './views/Information.vue'
import Music from './views/Music.vue'
import Search from './views/Search.vue'
import Carousel from './views/Carousel.vue'
//引入样式
import "@/CSS/Home/Home.css"
export default {
    data() {
        return {
        }
    },
    components: {
        //use组件
        BulletinBoard,
        Information,
        Music,
        Search,
        Carousel,
    }
}
</script>
<style>
</style>

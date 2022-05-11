<template>
    <div id="Carousel">
        <el-carousel indicator-position="outside" interval="4000">
            <el-carousel-item v-for="item in 4" :key="item">
            </el-carousel-item>
        </el-carousel>
    </div>
</template>
<script>
import "@/CSS/Home/Carousel.css"
export default{
    data(){
        return {

        }
}
}
</script>
<style>
</style>
<template>
    <div id="Search">
        <el-input placeholder="请输入内容" v-model="input" class="SearchInput">
            <i slot="prefix" class="el-input__icon el-icon-search"></i>
        </el-input>
        <div class="SearchTags">

        </div>
    </div>
</template>
<script>
import "@/CSS/Home/Search.css"
export default {
    data() {
        return {
            input: ''
        }
    }
}
</script>
<style>
</style>
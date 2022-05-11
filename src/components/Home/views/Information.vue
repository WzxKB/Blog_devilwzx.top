<template>
    <div>
        <el-card id="Information">
            <div slot="header" class="clearfix">
                <span>个人信息</span>
            </div>
            <div v-for="o in 4" :key="o" class="text item">
                {{ '列表内容 ' + o }}
            </div>
        </el-card>

    </div>
</template>
<script>
import "@/CSS/Home/Information.css"
export default {
    data() {
        return {

        }
    }
}
</script>
<style>

</style>
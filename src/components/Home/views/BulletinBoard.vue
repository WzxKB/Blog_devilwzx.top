<template>
    <div>
        <el-card id="BulletinBoard">
            <div slot="header" class="clearfix">
                <span>公告</span>
            </div>
            <div v-for="o in 4" :key="o" class="text item">
                {{ '列表内容 ' + o }}
            </div>
        </el-card>

    </div>
</template>
<script>
import "@/CSS/Home/BulletinBoard.css"
export default {
    data() {
        return {

        }
    }
}
</script>
<style>
</style>
<template>
    <div >
        <el-card id="Music">
            <div slot="header" class="clearfix">
                <span>Music</span>
            </div>
            <div v-for="o in 4" :key="o" class="text item">
                {{ '列表内容 ' + o }}
            </div>
        </el-card>

    </div>
</template>
<script>
import "@/CSS/Home/Music.css"
export default {
    data() {
        return {

        }
    }
}
</script>
<style>

</style>
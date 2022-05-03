<template>
  <div id="markdown">
    < class="container">
      <mavon-editor
        v-model="content"
        ref="md"
        :ishljs="true"
        @imgAdd="$imgAdd"
        @change="change"
        style="min-height: 65vh"

      />
    <!-- 提交信息 -->
  
    <form action="">
    <!-- 姓名 -->
    <p>
      <label for="">Author</label>
      <input type="text">
    </p>
    <!-- 标签 -->
    <p>
      <label for="theLable">标签</label>
      <input type="checkbox" name="theLable" >
      <input type="checkbox" name="theLable" >
      <input type="checkbox" name="theLable" >
      <input type="checkbox" name="theLable" >
    </p>

    <!-- 提交按钮 -->
      <p>
      <button @click="submit" class="markdown_btn">
        <i class="fa fa-paper-plane-o fa-4x"></i>
      </button>
      </p>
     
    </form>
    
      
    </div>
  </div>
</template>

<script>
import { mavonEditor } from "mavon-editor";
import "mavon-editor/dist/css/index.css";
import "@/CSS/Markdown.css";

export default {
  name: "",
  props: [],
  components: {
    mavonEditor,
  },
  data() {
    return {
      content: "",
      html: "",
      configs: {},
    };
  },
  methods: {
    // 将图片上传到服务器，返回地址替换到md中
    $imgAdd(pos, $file) {
      let formdata = new FormData();

      this.$upload
        .post("/上传接口地址", formdata)
        .then((res) => {
          console.log(res.data);
          this.$refs.md.$img2Url(pos, res.data);
        })
        .catch((err) => {
          console.log(err);
        });
    },
    // 所有操作都会被解析重新渲染
    change(value, render) {
      // render 为 markdown 解析后的结果[html]
      this.html = render;
    },
    // 提交
    submit() {
      console.log(this.content);
      console.log(this.html);

      this.$message.success("提交成功，已打印至控制台！");
    },
  },
  mounted() {},
};
</script>
<style >
</style>
  

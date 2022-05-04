<template>
  <div id="markdown">
    <div class="container">
      <mavon-editor
        v-model="artical.content"
        ref="md"
        @imgAdd="$imgAdd"
        @change="change"
        style="min-height: 65vh"
      />
    </div>
    <router-view></router-view>
  </div>
</template>

<script>
import { mavonEditor } from "mavon-editor";
import "mavon-editor/dist/css/index.css";
import "@/CSS/Markdown.css";
import store from "../../../JS/store.js";

export default {
  name: "",
  props: [],
  components: {
    mavonEditor,
  },
  store,
  data() {
    return {
      artical: {
        content: "",
        html: "",
      },
      configs: {},
    };
  },
  watch: {
    artical: {
      handler:function(){
        // console.log(this.art);
         this.$store.commit("setArt", this.artical);
      },
      deep: true,
    },
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
      this.artical.html = render;
    },
  },
};
</script>
  

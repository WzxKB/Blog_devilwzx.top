<template>
  <div id="Quill">
    <quill-editor
      v-model="article.html"
      ref="myQuillEditor"
      :options="editorOption"
      @blur="onEditorBlur($event)"
      @focus="onEditorFocus($event)"
      @change="onEditorChange($event)"
    >
    </quill-editor>

    <!-- 富文本内容 -->
    <div class="text"></div>
  </div>
</template> 
<script>
import "@/CSS/Quill.css";
// import { quillEditor } from "vue-quill-editor";
// import $ from "jquery"; //先安装jquery
export default {
  data() {
    return {
     article: {
        html: "",
        content: "",
      },

      editorOption: {},
    };
  },
  computed: {
    editor() {
      return this.$refs.myQuillEditor.quill;
    },
  },
  methods: {
    onEditorBlur() {
      //失去焦点事件
    },
    onEditorFocus() {
      //获得焦点事件
    },
    onEditorChange() {
      //内容改变事件
      console.log(this.article.html);
      console.log(this.article.content);
      this.$store.commit('setArt',this.article)
      // console.log( $('.text').html(this.blog.html))
    },
    saveHtml(event) {
      //点击保存按钮保存
      alert(this.article.html);
    },
  },
};
</script>   
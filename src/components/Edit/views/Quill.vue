<template>
  <div id="Quill">
    <quill-editor
      v-model="content"
      ref="myQuillEditor"
      :options="editorOption"
      @blur="onEditorBlur($event)"
      @focus="onEditorFocus($event)"
      @change="onEditorChange($event)"
    >
    </quill-editor>
    <!-- 富文本内容 -->
    <div class="text"></div>

    <blog-form></blog-form>
    <router-view></router-view>
  </div>
</template> 
<script>
import Form from "./Form.vue";
import "@/CSS/Quill.css";
import { quillEditor } from "vue-quill-editor";
import $ from "jquery"; //先安装jquery
export default {
  data() {
    return {
      content: null,
      editorOption: {},
    };
  },
  computed: {
    editor() {
      return this.$refs.myQuillEditor.quill;
    },
  },
  components: {
    "blog-form": Form,
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
      //console.log(this.content)
      //$('.text').html(this.content)
    },
    saveHtml(event) {
      //点击保存按钮保存
      alert(this.content);
    },
  },
};
</script>   
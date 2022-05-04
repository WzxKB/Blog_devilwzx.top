<template>
  <div id="Form">
    <!-- 标题 -->
    <span>
      <label>Title:</label>
      <el-input placeholder="Title" v-model="artTitle" clearable> </el-input>
    </span>

    <!-- 作者 -->
    <span>
      <label>Author</label>
      <el-input placeholder="Author" v-model="artAuthor" clearable> </el-input>
    </span>

    <!-- 标签 -->
    <span>
      <label>Tags:</label>
      <br>
      <br>

      <!-- 静态标签 -->
      <el-tag
        :key="tag"
        v-for="tag in dynamicTags"
        closable
        :disable-transitions="false"
        @close="handleClose(tag)"
      >
        {{ tag }}
      </el-tag>

      <!-- 增加标签输入框 -->
      <el-input
        class="input-new-tag"
        v-if="inputVisible"
        v-model="inputValue"
        ref="saveTagInput"
        size="small"
        @keyup.enter.native="handleInputConfirm"
        @blur="handleInputConfirm"
      >
      </el-input>

      <!-- 增加便签的按钮 -->
      <el-button v-else class="button-new-tag" size="small" @click="showInput"
        >+ New Tag</el-button
      >
    </span>

    <!-- 时间 -->
    <span>
      <label>Date:</label>
      <br />
      <el-date-picker v-model="artData" type="date" placeholder="选择日期">
      </el-date-picker>
    </span>

    <!-- 提交按钮 -->
    <button type="submit" @click="submit">
      <i class="fa fa-paper-plane-o fa-3x"></i>
    </button>
  </div>
</template>

<script>
import "@/CSS/Form.css";
import store from "../../../JS/store.js"
export default {
  data() {
    return {
      dynamicTags: ['css','html'],
      inputVisible: false,
      inputValue: "",

      artContent:"",
      artData:'',
      artTitle:'',
      artAuthor:'',

    };
  },
  store,
  methods: {
    handleClose(tag) {
      this.dynamicTags.splice(this.dynamicTags.indexOf(tag), 1);
    },

    showInput() {
      this.inputVisible = true;
      this.$nextTick((_) => {
        this.$refs.saveTagInput.$refs.input.focus();
      });
    },

    handleInputConfirm() {
      let inputValue = this.inputValue;
      if (inputValue) {
        this.dynamicTags.push(inputValue);
      }
      this.inputVisible = false;
      this.inputValue = "";
    },

   submit() {
     this.artContent=this.$store.state.artContent
     console.log(this.artContent)
     console.log(this.dynamicTags)
     console.log(this.artTitle)
     console.log(this.artData)
     console.log(this.artAuthor)
   } 
  },
};
</script>

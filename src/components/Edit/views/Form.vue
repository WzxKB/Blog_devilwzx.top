<template>
  <div id="Form">
    <!-- 标题 -->
    <span>
      <label>Title:</label>
      <el-input placeholder="Title" v-model="blog.artTitle" clearable> </el-input>
    </span>

    <!-- 作者 -->
    <span>
      <label>Author</label>
      <el-input placeholder="Author" v-model="blog.artAuthor" clearable> </el-input>
    </span>

    <!-- 标签 -->
    <span>
      <label>Tags:</label>
      <br />
      <br />

      <!-- 静态标签 -->
      <el-tag
        :key="tag"
        v-for="tag in blog.artTags"
        closable
        :disable-transitions="false"
        @close="handleClose(tag)"
        class="el-tag"
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
      <el-date-picker v-model="blog.artData" type="date" placeholder="选择日期">
      </el-date-picker>
    </span>

    <!-- 提交按钮 -->
    <button type="submit" @click="submit" class="subBtn">
      <i class="fa fa-paper-plane-o fa-3x"></i>
    </button>
  </div>
</template>

<script>
import "@/CSS/Form.css";
import store from "../../../JS/store.js";
export default {
  data() {
    return {
      
      inputVisible: false,
      inputValue: "",

      blog: {
        artTags: ["css", "html"],
        artData: "",
        artTitle: "",
        artAuthor: "",
        artArtical: {},
      },
    };
  },
  store,
  methods: {
    handleClose(tag) {
      this.blog.artTags.splice(this.blog.artTags.indexOf(tag), 1);
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
        this.blog.artTags.push(inputValue);
      }
      this.inputVisible = false;
      this.inputValue = "";
    },
    submit() {
      this.blog.artArtical = this.$store.state.artical;
     

      var api='http://localhost:3000/vue/php/api.php?c=blog&a=getBlogList';
        // var blog2=JSON.stringify(this.blog)
      this.$http.post(api).then((response)=>{
        console.log(response)
            var result=response.data;
            if(result.status==1){
              console.log("成功")
            }else{
              that.$Message.error(result.message)
            }
        },(err)=>{
            console.log(err)
        })
    }
    }, 
};
</script>

<template>
  <div id="Form">
    <span>
      <label>Title:</label>
      <el-input placeholder="artTitle" v-model="artTitle" clearable> </el-input>
    </span>
    <span>
      <label>Author</label>
      <el-input placeholder="artAuthor" v-model="artAuthor" clearable>
      </el-input>
    </span>
    <span>
      <label>Tags:</label>
      <br/>
      <el-select
        v-model="artTags"
        multiple
        filterable
        allow-create
        default-first-option
        placeholder="Tags"
      >
        <el-option
          v-for="item in options"
          :key="item.value"
          :label="item.label"
          :value="item.value"
          
        >
        </el-option>
      </el-select>
    </span>
    <span>
      <label>Date:</label>
      <br />
      <el-date-picker v-model="artData" type="date" placeholder="选择日期">
      </el-date-picker>
    </span>
    <button type="submit">
      <i class="fa fa-paper-plane-o fa-3x"></i>
    </button>
  </div>
</template>

<script>
import "@/CSS/Form.css";
export default {
  data() {
    return {
      artTitle: "",
      artAuthor: "",
      artData: "",
      options: [
        {
          value: "HTML",
          label: "HTML",
        },
        {
          value: "CSS",
          label: "CSS",
        },
        {
          value: "JavaScript",
          label: "JavaScript",
        },
      ],
      artTags: [],
    };
  },
};
</script>


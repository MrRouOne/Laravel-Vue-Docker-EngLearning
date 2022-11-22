<template>
  <h1 v-if="!this.gg">асу</h1>
  <h1 v-else>{{ gg }}</h1>
</template>

<script>
import axios from 'axios'

export default {
  name: "EditData",
  data: () => {
    return {
      gg: ""
    };
  },
  mounted() {
    this.getResult();
  },
  methods: {
    getResult() {
      axios
          .get('http://localhost:81/gg')
          .then(response => {
            console.log(response.data);
            this.gg = response.data;
          });
    }
  }
}

</script>

<style scoped>

</style>

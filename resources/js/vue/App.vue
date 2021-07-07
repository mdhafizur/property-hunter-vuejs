<template>
  <div>
    <Landing />
  </div>
</template>

<script>
import Landing from './views/Home';
export default {
  components: {
    Landing,
  },
  data() {
    return {
      user: {},
    };
  },
  methods: {
    getData() {
      axios
        .get('https://localhost/api/users/search?name=username&value=hafiz')
        .then((response) => {
          if (response.status == 200) {
            console.log(response.data.data[0]);
            this.user = response.data.data[0];
          }
          if (response.status == 204) {
            alert(response.statusText);
          }
        })
        .catch((error) => {
          console.log(error);
        });
    },
  },
  mounted() {},
  // auto login user
  created() {
    this.$store.dispatch('AutoLogin');
  },
};
</script>

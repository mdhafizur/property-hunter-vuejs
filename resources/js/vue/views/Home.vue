<template>
  <div>
    <Navbar />
    <main-layout>

    </main-layout>
    <Footer />
  </div>
</template>

<script>
import Navbar from '../layout/Navbar';
import MainLayout from '../layout/MainLayout';
import Footer from '../layout/Footer';

export default {
  name: 'Home',
  components: {
    Navbar,
    MainLayout,
    Footer,
  },
  data() {
    return {
      user: {},
    };
  },
  methods: {
    getData() {
      axios
        .get('api/users')
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
};
</script>

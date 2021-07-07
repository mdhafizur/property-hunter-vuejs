<template>
  <div>
    <b-container fluid>
      <b-row class="pl-5 pt-4 w-100">
        <h4>Dashboard</h4>
      </b-row>
    </b-container>
  </div>
</template>

<script>
import Navbar from '../layout/Navbar';
import Sidebar from '../layout/Sidebar';
import NewsListing from '../views/news/NewsListing';
import AddNews from '../views/news/AddNews';

export default {
  name: 'Dashboard',
  components: {
    Navbar,
    Sidebar,
    NewsListing,
    AddNews,
  },
  data() {
    return {
      selectedNav: 'dashboard',
    };
  },
  methods: {
    setNav(nav) {
      this.selectedNav = nav;
    },
  },
};
</script>

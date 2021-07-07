<template>
  <div>
    <b-container fluid>
      <b-row class="flex-nowrap">
        <b-col cols="2" class="p-0">
          <Sidebar @selectedNav="selectedNav = $event" />
        </b-col>
        <div class="vl"></div>
        <b-col cols="9">
          <b-row class="pl-5 pt-4 w-100">
              Dashboard
            {{ selectedNav }}
          </b-row>
        </b-col>
      </b-row>
    </b-container>
  </div>
</template>

<script>
import Navbar from '../layout/Navbar';
import Sidebar from '../layout/Sidebar';


export default {
  name: 'Dashboard',
  components: {
    Navbar,
    Sidebar,

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

<style scoped>
.vl {
  border-left: 2px solid lightseagreen;
  height: 100vh;
}
</style>

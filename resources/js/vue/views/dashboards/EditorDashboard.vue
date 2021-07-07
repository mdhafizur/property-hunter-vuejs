<template>
  <div>
    <b-container fluid>
      <b-row class="flex-nowrap">
        <b-col cols="2" class="p-0">
          <Sidebar />
        </b-col>
        <div class="vl"></div>
        <b-col cols="10">
          <b-row class="pl-lg-5 pl-sm-1 pt-4 w-100 m-0">
            <router-view :key="$route.path" />
          </b-row>
        </b-col>
      </b-row>
    </b-container>
  </div>
</template>

<script>
import Sidebar from '../../layout/Sidebar';

export default {
  name: 'EdiitorDashboard',
  components: {
    Sidebar,
  },
  data() {
    return {};
  },
};
</script>

<style scoped>
.vl {
  border-left: 2px solid lightseagreen;
  height: 100vh;
}
</style>

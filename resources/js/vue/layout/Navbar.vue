<template>
  <div>
    <div>
      <b-navbar toggleable="lg" type="light" variant="faded">
        <b-navbar-brand href="#"
          ><router-link :to="{ name: 'Main' }"
            >Home
          </router-link></b-navbar-brand
        >

        <b-navbar-toggle target="nav-collapse"></b-navbar-toggle>

        <b-collapse id="nav-collapse" is-nav>
          <!-- Right aligned nav items -->
          <b-navbar-nav class="ml-auto">
            <b-navbar-nav>
              <b-nav-item>
                <router-link :to="{ name: 'Register' }">Register </router-link>
              </b-nav-item>
              <b-nav-item v-if="auth">
                <router-link :to="{ name: 'Dashboard' }"
                  >Dashboard
                </router-link>
              </b-nav-item>
              <b-nav-item href="#">News</b-nav-item>
              <b-nav-item href="#">Events</b-nav-item>
              <b-nav-item href="#">More</b-nav-item>
            </b-navbar-nav>

            <b-nav-item v-if="!auth" @click="showModal()">Login</b-nav-item>
            <b-nav-item v-if="auth" @click="logout">Logout</b-nav-item>
            <LoginModal ref="modalComponent" />
          </b-navbar-nav>
        </b-collapse>
      </b-navbar>
    </div>

    <div class="text-center" style="background-color:#2ebbba;height:40px;">
      <p class="m-0 p-2">NEWS AND PROPERTY AT ONE PLACE</p>
      {{ auth }}
    </div>
  </div>
</template>

<script>
import LoginModal from '../components/LoginModal';
export default {
  name: 'Navbar',
  components: {
    LoginModal,
  },
  computed: {
    auth() {
      return this.$store.getters.ifAuthenticated;
    },
  },
  methods: {
    showModal() {
      this.$refs.modalComponent.show();
    },
    logout() {
      this.$store.dispatch('logout').then((res) => {
        if (res.status === 204) {
          this.$router.push({ name: 'Main' });
        }
      });
    },
  },
};
</script>

<style scoped>
.active-link-class {
  color: red;
}
</style>

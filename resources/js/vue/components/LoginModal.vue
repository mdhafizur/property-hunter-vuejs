<template
  ><div>
    <b-modal id="modal-lg" ref="loginModal" size="lg" title="BootstrapVue">
      <b-container class="bv-example-row">
        <b-row>
          <b-col class="text-center" cols="4">
            <b-row>
              <div>
                <h4>
                  HELLO! FRIEND
                </h4>
              </div>
            </b-row>
            <b-row>
              <b-button variant="outline-primary"
                ><router-link to="/register">Sign Up </router-link></b-button
              >
            </b-row>
          </b-col>
          <b-col class="text-center" cols="8">
            <h4>
              LOG IN TO PROPERTY HUNTER
            </h4>
            <p>or use your email account</p>
            <b-form @submit="onSubmit">
              <b-form-input
                id="email"
                v-model="form.email"
                placeholder="Email"
                required
              ></b-form-input>
              <b-form-input
                id="password"
                v-model="form.password"
                placeholder="Password"
                required
              ></b-form-input>
              <b-button type="submit" variant="primary">Submit</b-button>
            </b-form>
          </b-col>
        </b-row>
      </b-container>
      <b-card class="mt-3" header="Form Data Result">
        <pre class="m-0">{{ form }}</pre>
      </b-card>
    </b-modal>
  </div>
</template>

<script>
export default {
  name: 'LoginModal',
  data: function() {
    return {
      form: {
        email: 'hafizur.upm@gmail.com',
        password: '12345678',
      },
    };
  },
  methods: {
    onSubmit(event) {
      event.preventDefault();
      alert(JSON.stringify(this.form));
      this.$store
        .dispatch('logIn', {
          email: this.form.email,
          password: this.form.password,
        })
        .then((res) => {
          console.log(res);
          if (res.status === 204 || res.status === 200) {
            this.$store.commit('setUser', res.data.data);
            console.log('work');
            this.$refs.loginModal.hide();
            localStorage.setItem('userId', res.data.data.id);
            this.$router.push({ name: 'Dashboard' });
          } else {
            this.$router.push({ name: '' });
          }
        })
        .catch((errors) => {
          console.log(errors);
        });
    },
    show() {
      this.$refs.loginModal.show();
    },
  },
};
</script>

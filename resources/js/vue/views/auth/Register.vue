<template>
  <div>
    <AlertMessage :message="alertMessage" :variant="variant" v-if="show" />

    <b-container>
      <b-row class="text-center">
        <b-col sm="6" lg="4" class="m-auto">
          <h4>CREATE YOUR ACCOUNT</h4>
          <p>A few more steps and you'll be set to post your first listing!</p>
          <b-form @submit="onSubmit" @reset="onReset">


            <b-form-group id="input-group-1">
              <b-form-input
                id="email"
                name="email"
                v-model="form.user.email"
                type="email"
                placeholder="Email"
                v-validate="{ required: true, email: true }"
                :state="validateState('email')"
                aria-describedby="email-live-feedback"
                data-vv-as="Email"
                required
              ></b-form-input>

              <b-form-invalid-feedback id="email-live-feedback">{{
                veeErrors.first('email')
              }}</b-form-invalid-feedback>
            </b-form-group>

            <b-form-group id="input-group-2">
              <b-form-input
                id="contact_no"
                name="contact_no"
                v-model="form.user.contact_no"
                placeholder="Tel"
                type="tel"
                v-validate="{ required: true, min: 10, max: 15 }"
                :state="validateState('contact_no')"
                aria-describedby="contact_no-live-feedback"
                data-vv-as="Contact No"
                required
              ></b-form-input>
              <b-form-invalid-feedback id="contact_no-live-feedback">{{
                veeErrors.first('contact_no')
              }}</b-form-invalid-feedback>
            </b-form-group>
            <b-form @submit.stop.prevent>
              <b-form-group id="input-group-3">
                <b-form-input
                  id="password"
                  name="password"
                  v-model="form.user.password"
                  placeholder="Password"
                  type="password"
                  v-validate="{ required: true, min: 8, max: 20 }"
                  :state="validateState('password')"
                  aria-describedby="password-live-feedback"
                  ref="form.user.password"
                  required
                ></b-form-input>
                <b-form-invalid-feedback id="password-live-feedback">{{
                  veeErrors.first('password')
                }}</b-form-invalid-feedback>
              </b-form-group>
              <b-form-input
                type="password"
                name="password_confirmation"
                v-model="form.password_confirmation"
                id="password_confirmation"
                placeholder="Re-enter Password"
                v-validate="{
                  required: true,
                  confirmed: form.user.password,
                  min: 8,
                  max: 20,
                }"
                :state="validateState('password_confirmation')"
                aria-describedby="password_confirmation-help-block"
                data-vv-as="Password"
                required
              ></b-form-input>
              <b-form-invalid-feedback
                id="password_confirmation-live-feedback"
                >{{
                  veeErrors.first('password_confirmation')
                }}</b-form-invalid-feedback
              >
              <b-form-text id="password-help-block">
                Your password must be 8-20 characters long, contain letters and
                numbers, and must not contain spaces, special characters, or
                emoji.
              </b-form-text>
            </b-form>
            <b-form-checkbox
              id="checkbox-1"
              v-model="form.status"
              name="checkbox-1"
              value="accepted"
              unchecked-value="not_accepted"
            >
              I agree to Property Hunter Terms of Use and Privacy Policy
            </b-form-checkbox>
            <div>
              State: <strong>{{ form.status }}</strong>
            </div>
            <b-button
              type="submit"
              :disabled="form.status === 'accepted' ? false : true"
              variant="primary"
              >Submit</b-button
            >
            <b-button :disabled="form.user.email.length <= 0 ? true : false" type="reset" variant="danger">Reset</b-button>
          </b-form>
          <p>Already have an account? <a @click="showModal()">Log in</a></p>
          <LoginModal ref="modalComponent" />
          <p><a href="">Forgot your password?</a></p>
        </b-col>
      </b-row>
    </b-container>
    <b-card class="mt-3" header="Form Data Result">
      <pre class="m-0">{{ form }}</pre>
      <pre class="m-0">{{ userInfo }}</pre>
      <pre class="m-0">{{ errors }}</pre>
    </b-card>
  </div>
</template>

<script>
import LoginModal from '../../components/LoginModal';
import AlertMessage from '../../components/AlertMessage';
import Navbar from '../../layout/Navbar';

export default {
  name: 'Register',
  components: {
    LoginModal,
    AlertMessage,
    Navbar,
  },

  mounted() {
    // var userInfo = this.$store.getters.getUserInfo;
    // console.log(userInfo);
  },

  computed: {
    userInfo: function() {
      return this.$store.getters.getUserInfo;
    },
    errors: function() {
      return this.$store.getters.getErrors;
    },

  },

  data() {
    return {
      form: {
        user: {
          email: 'a@gmail.com',
          contact_no: '0168565892',
          password: '12345678',
        },

        password_confirmation: '12345678',
        status: 'not_accepted',
      },

      show: false,
    };
  },
  methods: {
    validateState(ref) {
      if (
        this.veeFields[ref] &&
        (this.veeFields[ref].dirty || this.veeFields[ref].validated)
      ) {
        return !this.veeErrors.has(ref);
      }
      return null;
    },
    mounted(){
        console.log('router',this.$router)
        console.log('store',this.$store)

    },
    makeToast(append = false, variant, message) {
      this.$bvToast.toast(message, {
        title: 'Alert',
        autoHideDelay: 5000,
        variant: variant,
        appendToast: append,
        solid: true,
      });
    },
    // show login modal
    showModal() {
      this.$refs.modalComponent.show();
    },

    // submit register form
    onSubmit(event) {
      event.preventDefault();
       console.log('router',this.$router)
        console.log('store',this.$store)
        console.log('store',this.$store.getters['news/getnews'])

      this.$validator.validateAll().then((result) => {
        if (!result) {
          return;
        }

        alert('Form submitted!');
      });

      if (
        this.form.user.password === this.form.password_confirmation &&
        this.form.status === 'accepted'
      ) {
        // alert(JSON.stringify(obj));

        this.$store
          .dispatch('signUp', this.form.user)
          .then((res) => {
            if (res.status == 201) {
              this.makeToast(true, 'success', res.data.message);
              //   this.$router.push({ name: 'Dashboard' });

              console.log(res.data.data);
            }
          })
          .catch((errors) => {
            console.log(errors);
            for (const key in errors) {
              console.log(`${key}: ${errors[key]}`);
              this.makeToast(true, 'danger', errors[key]);
            }
          });
      }
    },
    onReset(event) {
      event.preventDefault();
      // Reset our form values
      this.form.user.email = '';
      this.form.user.contact_no = '';
      this.form.user.password = null;
      this.form.password_confirmation = null;
      this.form.status = 'not_accepted';

      // Trick to reset/clear native browser form validation state
    //   this.show = false;
      this.$nextTick(() => {
        // this.show = true;
      });
    },
  },
};
</script>

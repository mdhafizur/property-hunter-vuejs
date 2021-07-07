<template>
  <div>
    Reset Password
    <b-container  fluid>
      <b-row class="text-center bg-light mx-2" style="justify-content:center;">
        <b-column sm="6" lg="6" class="m-auto">
          <h6>Reset your password</h6>
          <br />
          <b-row class="text-left m-0">
            <p class="w-100 my-2 pl-2">
              Hello, we received a password reset request, submitted via www.propertyhunter.com.my. If you
               want to change your password click the link below to continue. If
            </p>
          </b-row>

          <b-row class="m-0">
            <b-column lg="6" class="text-left pl-2">
              Email: <br />
              Email: <br />
              Email:<br />
            </b-column>
            <b-column lg="6" class="text-right pl-2">
              steve@maxxmedia.com.my <br />
              steve@maxxmedia.com.my <br />
              steve@maxxmedia.com.my <br />
            </b-column>
          </b-row>
          <b-button class="my-3" type="submit" variant="danger"
            >Confirm your account</b-button
          >
          <b-row class="text-left m-0">
            <p class="w-75 my-2 pl-2">
              Thank you for signing with us. Confirm your account and
              start post your first listing <br /><br />
            </p>
          </b-row>
        </b-column>
      </b-row>
    </b-container>
  </div>
</template>

<script>
export default {
  name: 'ResetPassword',
  components: {},
};
</script>

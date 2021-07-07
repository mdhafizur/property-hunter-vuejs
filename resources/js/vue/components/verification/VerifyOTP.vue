<template>
  <div>
    Verify Email
    <b-container>
      <b-row class="text-center">
        <b-column sm="6" lg="6" class="m-auto">
          <h1>CONFIRMATION</h1>
          <br />

          <p>Enter OTP number to complete sign up.</p>
          <br />
          <b-form-group id="input-group-1">
            <b-form-input
              id="email"
              name="email"
              type="email"
              placeholder="Email"
              required
              disabled
            ></b-form-input>
          </b-form-group>

          <b-form-group id="contact-group-1">
            <b-form-input
              id="contact"
              name="contact"
              type="contact"
              placeholder="Contact No"
              required
            ></b-form-input>
          </b-form-group>

          <b-form-group id="otp-group-1">
            <b-form-input
              id="otp"
              name="otp"
              type="otp"
              placeholder="Enter OTP"
              required
            ></b-form-input>
          </b-form-group>
          <p class="w-75 m-auto">
            Didn't receive OTP?
            <a href="">Resend</a>
          </p>
          <br>
          <b-button type="submit" variant="danger">I'm Set</b-button>
        </b-column>
      </b-row>
    </b-container>
    <br>
  </div>
</template>

<script>
export default {
  name: 'VerifyOTP',
};
</script>

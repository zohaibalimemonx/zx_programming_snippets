// Validate.JS Library Password Validation

jQuery( "#UserRegisterForm" ).validate({
    rules: {
      cpassword: {
        equalTo: "#password"
      }
    }
});
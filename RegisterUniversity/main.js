$(window).scroll(function() {
  $.scrollify({
     section : "section",
     sectionName : "section",
     interstitialSection : "",
     easing: "easeOutExpo",
     scrollSpeed: 1100,
     offset : 0,
     scrollbars: true,
     standardScrollElements: "",
     setHeights: true,
     overflowScroll: true,
     updateHash: true,
     touchScroll:true,
     before:function() {},
     after:function() {},
     afterResize:function() {},
     afterRender:function() {}
   });
});


$(function() {
  $.validator.setDefaults({
  errorClass: 'help-block',
  highlight: function(element) {
    $(element)
      .closest('.form-group')
      .addClass('has-error');
  },
  unhighlight: function(element) {
    $(element)
      .closest('.form-group')
      .removeClass('has-error');
  }
});

var password = document.getElementById("password")
  , confirm_password = document.getElementById("confirm_password");


password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;

$.validator.addMethod("phoneValidate", function(number, element) {
    number = number.replace(/\s+/g, "");
    return this.optional(element) || number.length >= 9 &&
        number.match(/[+]?[0-9]+/);
}, "Please specify a valid phone number");



$("#register-university").validate({
  rules: {
    name: {
      required: true,
      minlength: 2,
      lettersonly: true
    },
    email: {
      required: true,
      email: true
    },
    username: {
      required: true,
      minlength: 2,
      lettersonly: true
    },
    password: {
      required: true
    },
    confirm_password: {
      required: true
    },
    messages: {
      name: {
        required: "Please fill in your name.",
        minlength: "Your name must consist of at least 2 characters."
      },
      email: {
        required: "Please fill in your Email",
        email: "Please enter a valid email"
      },
      contactNo: {
        required: "Please fill in your contact number.",
        contact: "Please enter a valid contact number."
      },
      password: {
        if(password.value != confirm_password.value) {
          confirm_password.setCustomValidity("Passwords Don't Match");
        } else {
          confirm_password.setCustomValidity('');
        }
      }

});

});

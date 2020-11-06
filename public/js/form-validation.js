// Password Visibility Toggle
function toggleVisibility(){
    var x = document.getElementById("password");
    if(x.type === "password"){
        x.type = "text";
    }
    else {
        x.type = "password";
    }
}
//Password Confirm
function samePassword() {
  var password1 = $("#password").val();
  var password2 = $("#password-confirm").val();
  if(password1 == password2) {
    $("#validate-status").text("Passwords Match!");
    $('#submit-button').prop('disabled', false);
    $('#password-confirm').addClass('is-valid');
    $('#password-confirm').removeClass('is-invalid');
  }
  else if(password2 == ''){
    $("#validate-status").text("Password Confirmation Field Empty!");  
    $('#submit-button').prop('disabled', true);
    $('#password-confirm').addClass('is-invalid');
    $('#password-confirm').removeClass('is-valid');
  }
  else {
    $("#validate-status").text("Passwords Do Not Match!");  
    $('#submit-button').prop('disabled', true);
    $('#password-confirm').addClass('is-invalid');
    $('#password-confirm').removeClass('is-valid');
  }
}
//email validation
function validateEmail(email) {
  const regexEmail = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  return regexEmail.test(email);
}

function validateMail() {
  const email = $("#email").val();

  if (validateEmail(email)) {
    $('#email').addClass('is-valid');
    $('#email').removeClass('is-invalid');
  } else {
    $('#email').addClass('is-invalid');
    $('#email').removeClass('is-valid');
  }
  return false;
}

function validateFName(){
  var fname = $("#firstname").val();
  if(fname != ""){
    $('#firstname').addClass('is-valid');
    $('#firstname').removeClass('is-invalid');
  }
  else{
    $('#firstname').addClass('is-invalid');
    $('#firstname').removeClass('is-valid');    
  }
}
function validateLName(){
  var lname = $("#lastname").val();
  if(lname != ""){
    $('#lastname').addClass('is-valid');
    $('#lastname').removeClass('is-invalid');
  }
  else{
    $('#lastname').addClass('is-invalid');
    $('#lastname').removeClass('is-valid');    
  }
}
function validateUName(){
  var username = $("#name").val();
  if(username != ""){
    $('#name').addClass('is-valid');
    $('#name').removeClass('is-invalid');
  }
  else{
    $('#name').addClass('is-invalid');
    $('#name').removeClass('is-valid');    
  }
}
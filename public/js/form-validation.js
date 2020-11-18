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
// Password Strength Meter
const indicator = document.querySelector(".indicator");
const input = document.querySelector("#password");
const weak = document.querySelector(".weak");
const medium = document.querySelector(".medium");
const strong = document.querySelector(".strong");
const text = document.querySelector(".indicator-text");
let regexWeak = /[a-z]/;
let regexMedium = /\d+/;
let regexStrong = /.[!,@,#,$,%,^,&,*,?,_,~,-,(,)]/;
function strengthMeter(){
  document.getElementById('password-confirm').value = '';
  $('#password-confirm').addClass('is-invalid');
  $('#submit-button').prop('disabled', true);
  $("#validate-status").text("Password Confirmation Field Empty!");  
  if(input.value != ""){
      indicator.style.display = "block";
      indicator.style.display = "flex";
      if(input.value.length <= 3 && (input.value.match(regexWeak) || input.value.match(regexMedium) || input.value.match(regexStrong)))no=1;
      if(input.value.length >= 6 && (input.value.match(regexWeak) || input.value.match(regexMedium) || input.value.match(regexStrong)) || (input.value.match(regexWeak) && input.value.match(regexStrong)))no=2;
      if(input.value.length >= 8 && input.value.match(regexWeak) && input.value.match(regexMedium) && input.value.match(regexStrong))no=3;
      if(no == 1){
        weak.classList.add("active");
        text.style.display = "block";
        text.textContent = "Password Strength: Weak"
        text.classList.add("weak");
        input.classList.add("is-invalid");
        input.classList.remove("is-valid")
      }
      if(no == 2){
        input.classList.add("is-valid");
        input.classList.remove("is-invalid")
        medium.classList.add("active");
        text.style.display = "block";
        text.textContent = "Password Strength: Medium"
        text.classList.add("medium");
      }
      else{
        medium.classList.remove("active");
        text.classList.remove("medium");
      }
      if(no == 3){
        medium.classList.add("active");
        strong.classList.add("active");
        text.style.display = "block";
        text.textContent = "Password Strength: Strong"
        text.classList.add("strong");
      }
      else{
        strong.classList.remove("active");
        text.classList.remove("strong");
      }
  }
  else{
      indicator.style.display = "none";
      text.style.display = "none";
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
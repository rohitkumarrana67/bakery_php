function signinChanger() {
  var signup = document.getElementById("signup-changer");
  var login = document.getElementById("login-changer");
  var signup_form = document.getElementById("signup-form");
  var login_form = document.getElementById("login-form");

  signup.style.color = "white";
  signup.style.backgroundColor = "green";
  login.style.color = "black";
  login.style.backgroundColor = "white";
  signup_form.style.display = "block";
  login_form.style.display = "none";
}

function loginChanger() {
  var signup = document.getElementById("signup-changer");
  var login = document.getElementById("login-changer");
  var signup_form = document.getElementById("signup-form");
  var login_form = document.getElementById("login-form");
  login.style.color = "white";
  login.style.backgroundColor = "green";
  signup.style.color = "black";
  signup.style.backgroundColor = "white";
  signup_form.style.display = "none";
  login_form.style.display = "block";
}

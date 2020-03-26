function loginChanger() {
  
  var signup = document.getElementsByClassName("signup");
  var login = document.getElementsByClassName("login");
  var signupSwitcher=document.getElementsByClassName("signup-switcher");
  var loginSwitcher=document.getElementsByClassName("login-switcher");
  signup[0].style.display = "none";
  login[0].style.display="block";
  signupSwitcher[0].style.display="block";
  loginSwitcher[0].style.display="none";
   }
  function signupChanger() {
  
  var signup = document.getElementsByClassName("signup");
  var login = document.getElementsByClassName("login");
  var signupSwitcher=document.getElementsByClassName("signup-switcher");
  var loginSwitcher=document.getElementsByClassName("login-switcher");
  signup[0].style.display = "block";
  login[0].style.display="none";
  signupSwitcher[0].style.display="none";
  loginSwitcher[0].style.display="block";
   }
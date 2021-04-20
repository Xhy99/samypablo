// document.getElementById("boton_login").addEventListener("click, iniciarSesion");
// document.getElementById("boton_register").addEventListener("click, regiiister");

var container_login_register = document.querySelector(".container_login_register");
var caja_trasera_login = document.querySelector(".caja_trasera_login");
var caja_trasera_register = document.querySelector(".caja_trasera_register");
var formu_login = document.querySelector(".formu_login");
var formu_register = document.querySelector(".formu_register");
// var formuu_log = document.getElementById('.formuu_log');
// var formuu_reg = document.getElementById('.formuu_reg');

function iniciarSesion (){

  if(window.innerWidth > 850){
formu_register.style.display = "none";
container_login_register.style.left = "10px";
formu_login.style.display= "block";
caja_trasera_register.style.opacity = "1";
caja_trasera_login.style.opacity = "0";

} else {
  formu_register.style.display = "none";
  container_login_register.style.left = "10px";
  formu_login.style.display="block";
  caja_trasera_register.style.opacity = "1";
  caja_trasera_login.style.opacity = "0";

}
}

function regiiister() {
  formu_register.style.display = "block";
  container_login_register.style.left = "410px";
  formu_login.style.display= "none";
  caja_trasera_register.style.opacity = "0";
  caja_trasera_login.style.opacity = "1";

}

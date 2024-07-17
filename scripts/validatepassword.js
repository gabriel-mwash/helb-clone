var pass1 = document.getElementById("regPassword").addEventListener("keyup", getPassword)
var pass2 = document.getElementById("password_confirmation").addEventListener("keyup", getPasswordConfirmation)



function getPassword() {
   return document.getElementById("regPassword").value;
}


function getPasswordConfirmation() {
   return document.getElementById("password_confirmation").value;
}


console.log(pass1, pass2);

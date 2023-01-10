
    function signUp() {
        if (document.getElementById("password2").value == document.getElementById("cfmpassword2").value) {
            var users = new Object();
            users.username = document.getElementById("username").value;
            users.email = document.getElementById("email").value;
            users.password = document.getElementById("password").value;


            var postUser = new XMLHttpRequest(); 

            postUser.open("POST", "/users", true); 

            postUser.setRequestHeader("Content-Type", "application/json");
            postUser.send(JSON.stringify(users));
            window.location = "../pages/login.html";
         
        }
        else {
            alert("Password column and Confirm Password column doesn't match!")
        }
    }

    var attempt = 3; 
function validate(){
var username = document.getElementById("username").value;
var password = document.getElementById("password").value;
if ( username == "" && password == ""){
alert ("Login successfully");
window.location = "../pages/index.html";
return false;
}
else{
attempt --;
alert("mot de passe incorrect");
if( attempt == 0){
document.getElementById("username").disabled = true;
document.getElementById("password").disabled = true;
document.getElementById("submit").disabled = true;
return false;
}
}
}


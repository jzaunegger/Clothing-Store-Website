function checkInput(){
    var username = document.getElementById("username").value;
    var pass = document.getElementById("password").value

    if(username.length > 0 && pass.length > 0){
        document.getElementById("submit-button").style.visibility = "visible";
    }
}
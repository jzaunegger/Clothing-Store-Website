function validateForm(){

    // If adding user, add functionality to check if username exists
    if(window.location.href == "http:/localhost/473Project/admin/Users/Add-User/addUser.php"){
        checkUsername();
    }

    // Check if email is valid
    var emailStatus = 0;

    var email = document.getElementById("email").value;
    if(email != ""){
        if(email.includes("@", 0) && email.includes(".", 0)){
            emailStatus = 1;
            document.getElementById("email").style.border = "2px solid #00ff00";
        }
        else{
            document.getElementById("email").style.border = "2px solid #ff0000";
        }
    }
    else{
        document.getElementById("email").style.border = "2px solid #ff0000";
    }


    // Check if passwords match
    var pass1 = document.getElementById("pass1").value; 
    var pass2 = document.getElementById("pass2").value;
    
    // 0 = No Match, 1 = They Match
    var passMatch = 0;

    if(pass1 != "" && pass2 != ""){
        if(pass1 == pass2){
            passMatch = 1;
            document.getElementById("pass1").style.border = "2px solid #00ff00";
            document.getElementById("pass2").style.border = "2px solid #00ff00";
        }
        else{
            document.getElementById("pass1").style.border = "2px solid #ff0000";
            document.getElementById("pass2").style.border = "2px solid #ff0000";
        }
    }
    else{
        document.getElementById("pass1").style.border = "2px solid #ff0000";
        document.getElementById("pass2").style.border = "2px solid #ff0000";
    }

    if(emailStatus == 1 && passMatch == 1){
        document.getElementById("submitButton").style.visibility = "visible";
    }
}


function checkUsername(){
    var username = document.getElementById('username').value;
    if(username == ""){
        document.getElementById('username').style.border = "2px solid #ff0000";
    }
    else{
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
               
                // Set box shadow to red if username is not available
                if(this.responseText == "0"){
                    document.getElementById('username').style.border = "2px solid #ff0000";
                }

                // Set username to green to username is available
                if(this.responseText == "1"){
                    document.getElementById('username').style.border = "2px solid #00ff00";
                }
            }
        };
        xhttp.open("GET", "/473Project/admin/Users/checkUsername.php?username="+username, true);
        xhttp.send();
    }
}
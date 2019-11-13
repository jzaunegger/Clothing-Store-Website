function checkNewPasswords(){
    // Clear Box Shadow
    document.getElementById("newPass1").style.boxShadow = "none";
    document.getElementById("newPass2").style.boxShadow = "none";

    // Get Passwords
    pass1 = document.getElementById("newPass1").value;
    pass2 = document.getElementById("newPass2").value;

    // Check if password1 is empty
    if(pass1.length == 0){
        return;
    }

    // Check if password2 is empty
    if(pass2.length == 0){
        return;
    }

    // If passwords match set them to a green color
    if(pass1 == pass2){
        document.getElementById("newPass1").style.boxShadow = "0px 0px 15px rgb(0, 180, 0)";
        document.getElementById("newPass2").style.boxShadow = "0px 0px 15px rgb(0, 180, 0)";
    }
    else{
        document.getElementById("newPass1").style.boxShadow = "0px 0px 15px rgb(180, 0, 0)";
        document.getElementById("newPass2").style.boxShadow = "0px 0px 15px rgb(180, 0, 0)";
    }
}
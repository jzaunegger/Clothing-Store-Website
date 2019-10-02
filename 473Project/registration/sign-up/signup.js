// Check if the passwords match
/************************************************************************************************************************************/
function checkPassword(password1, password2){
    // Clear the shadow colors and initalize variables
    document.getElementById("pass1").style.boxShadow = "none";
    document.getElementById("pass2").style.boxShadow = "none";
    var flag = false;

    // Check if password 1 is empty
    if(password1.length == 0){
        document.getElementById("pass1").style.boxShadow = "0px 0px 15px rgb(180, 0, 0)";
        return flag;
    }

    // Check if password 2 is empty
    if(password2.length == 0){
        document.getElementById("pass2").style.boxShadow = "0px 0px 15px rgb(180, 0, 0)";
        return flag;
    }

    // If passwords match, set both fields to have green shadow
    if(password1 == password2){
        document.getElementById("pass1").style.boxShadow = "0px 0px 15px rgb(0, 180, 0)";
        document.getElementById("pass2").style.boxShadow = "0px 0px 15px rgb(0, 180, 0)";
        flag = true;
    }

    // If passwords match, set pass1 to have green shadow and set pass2 to have red shadow
   if(password2 != password1){
        document.getElementById("pass1").style.boxShadow = "0px 0px 15px rgb(0, 180, 0)";
        document.getElementById("pass2").style.boxShadow = "0px 0px 15px rgb(180, 0, 0)";
   }
   // Return if both passwords are filled but do not match
    return flag;
}

// Convert phone number to be one value
/************************************************************************************************************************************/
function convertPhoneNumber(areaCode, phone1, phone2){
    var phoneNumber = areaCode + "" + phone1 + "" + phone2;
    return phoneNumber;

}

// Check if username is taken. Interacts with getUsers.php
/************************************************************************************************************************************/
function checkUsername(username){
    // Clear box shadow on username, initalize variables
    document.getElementById("username").style.boxShadow = "none";
    var xhttp;
    var flag = false;

    // Check that username is not empty
    if(username.length == 0){
        document.getElementById("username").style.boxShadow = "0px 0px 15px rgb(180, 0, 0)";
        return;
    }

    // Send PHP Request to pull the list of usernames
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){

            // Retrieve array of names as JSON
            var userList = JSON.parse(this.responseText);

            // Iterate through array
            for(i=0; i<userList.length; i++){

                // Check if username is present, change box shadow color
                if(userList[i].substr(1) == username){
                    document.getElementById("username").style.boxShadow = "0px 0px 15px rgb(180, 0, 0)";
                    return flag;
                }

                // If username is not present, change box shadow color
                else{
                    flag = true;
                    document.getElementById("username").style.boxShadow = "0px 0px 15px rgb(0, 180, 0)";
                    return flag;
                }
            }
        }
    };

    xhttp.open("GET", "getUsers.php?q="+username, true);
    xhttp.send();
}

// Main function to validate the input
/************************************************************************************************************************************/
function checkInput(){
    var username = document.getElementById("username").value;
    var validUsername = checkUsername(username);

    var firstName = document.getElementById("firstName").value;
    var lastName = document.getElementById("lastName").value;

    var emailAddress = document.getElementById("emailAddress").value;

    var areaCode = document.getElementById("areaCode").value;
    var phone1 = document.getElementById("phone1").value;
    var phone2 = document.getElementById("phone2").value;
    var phoneNumber = convertPhoneNumber(areaCode, phone1, phone2);

    var password1 = document.getElementById("pass1").value;
    var password2 = document.getElementById("pass2").value;
    var passwordMatches = checkPassword(password1, password2);

    // Show submit button if form information looks good.
    if(passwordMatches == true){
        document.getElementById("submit-button").style.visibility = "visible";
    }

}
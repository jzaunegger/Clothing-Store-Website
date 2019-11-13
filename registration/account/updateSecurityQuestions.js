window.onload = loadSecurityQuestions();

// Make HTTP Request to pull security questions and populate the updateSecurity.php page
function loadSecurityQuestions(){
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){

            // Retrieve data
            var response = JSON.parse(this.responseText); 
            var questions = response.questions;

            // Retrieve SelectBoxes
            var questionBoxes = [document.getElementById("questionSelect1"), document.getElementById("questionSelect2"), document.getElementById("questionSelect3")];

            for(var i=0; i<3; i++){
                for(var j=0; j<questions.length; j++){

                    var newOption = document.createElement("option");
                    newOption.setAttribute("id", "questionSelect" + i + "-" + j);

                    questionBoxes[i].appendChild(newOption);
                    document.getElementById("questionSelect" + i + "-" + j).innerHTML = questions[j];
                }
            }
        }
    }

    xhttp.open("GET", "/473Project/assets/other/securityQuestions.json", true);
    xhttp.send();

    populateQuestionsAndAnswers();
}


// Retrieve questions and answers, if none exist then set placeholder answers
function populateQuestionsAndAnswers(){
    console.log("Populating questions and answers");
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){

            var response = JSON.parse(this.responseText); 

            // Set Question 1 if one exists
            if(response.question1 == "none"){
                document.getElementById("questionSelect1").value = " ";
            }
            else{
                document.getElementById("questionSelect1").value = response.question1;
            }

            // Set Question 2 if one exists
            if(response.question2 == "none"){
                document.getElementById("questionSelect2").value = " ";
            }
            else{
                document.getElementById("questionSelect2").value = response.question2;
            }

            // Set Question 3 if one exists
            if(response.question3 == "none"){
                document.getElementById("questionSelect3").value = " ";
            }
            else{
                document.getElementById("questionSelect3").value = response.question3;
            }

            // Set the first answer if it exists
            if(response.answer1 == "none"){
                document.getElementById("questionAnswer1").placeholder = "Your Answer Here"
            }
            else{
                document.getElementById("questionAnswer1").value = response.answer1;
            }

            // Set the second answer if it exists
            if(response.answer2 == "none"){
                document.getElementById("questionAnswer2").placeholder = "Your Answer Here"
            }
            else{
                document.getElementById("questionAnswer2").value = response.answer2;
            }

            // Set the third answer if it exists
            if(response.answer3 == "none"){
                document.getElementById("questionAnswer3").placeholder = "Your Answer Here"
            }
            else{
                document.getElementById("questionAnswer3").value = response.answer3;
            }
            
        }
    }

    xhttp.open("GET", "loadSecurityQuestions.php", true);
    xhttp.send();
}

function returnToProfile(){
    window.location.href = "/473Project/registration/account/account.php"
}
// Request the securityQuestions.js file and populate the security question boxes.
//////////////////////////////////////////////////////////////////////////////////
function loadSecurityQuestions(){
    var xml = new XMLHttpRequest();
    xml.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            var data = JSON.parse(this.responseText);

            // Grab the first question select box, and populate it
            var quest1 = document.getElementById("question1");

            var option0 = document.createElement("option");
            option0.innerHTML = data.questions[0];
            quest1.append(option0);

            var option1 = document.createElement("option");
            option1.innerHTML = data.questions[1];
            quest1.append(option1);

            var option2 = document.createElement("option");
            option2.innerHTML = data.questions[2];
            quest1.append(option2);

            // Grab the second question select box, and populate it
            var quest2 = document.getElementById("question2");

            var option3 = document.createElement("option");
            option3.innerHTML = data.questions[3];
            quest2.append(option3);

            var option4 = document.createElement("option");
            option4.innerHTML = data.questions[4];
            quest2.append(option4);

            var option5 = document.createElement("option");
            option5.innerHTML = data.questions[5];
            quest2.append(option5);

            // Grab the third question select box, and populate it
            var quest3 = document.getElementById("question3");

            var option6 = document.createElement("option");
            option6.innerHTML = data.questions[6];
            quest3.append(option6);

            var option7 = document.createElement("option");
            option7.innerHTML = data.questions[7];
            quest3.append(option7);

            var option8 = document.createElement("option");
            option8.innerHTML = data.questions[8];
            quest3.append(option8);
        }
    }

    // Make XML HTTP Request
    xml.open("GET", "/473Project/assets/other/securityQuestions.json", true);
    xml.send();
}

window.onload = loadSecurityQuestions();
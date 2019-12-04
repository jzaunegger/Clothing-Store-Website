function validatePath(){
    var path = document.getElementById("folderPath").value;
    document.getElementById("validationReport").innerHTML = "";

    console.log(path);

    if(path == ""){
        document.getElementById("validationReport").innerHTML = "The input field was left blank";
    }
    else{
        console.log("Requesting data.")

        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function(){
            if(this.readyState == 4 && this.status == 200){

                var response = this.responseText;
                console.log(response);

                document.getElementById("validationReport").innerHTML = this.responseText;
            }

        }

        xhttp.open("GET", "checkPath.php?path="+path, true);
        xhttp.send();
    }
}
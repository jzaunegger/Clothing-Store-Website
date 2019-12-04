function validateFolder(){
    // Clear validation notes
    document.getElementById("validationNotes").innerHTML = "";

    // Select the folder path
    var path = document.getElementById("folderPath").value;

    // If path is empty, throw error
    if(path == ""){
        document.getElementById("validationNotes").innerHTML = "There was no folder path given.";
    }
    else{
        console.log("Making request.");
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function(){
            if(this.readyState == 4 && this.status == 200){

                var response = this.responseText;
                console.log(response);

                document.getElementById("validationNotes").innerHTML = this.responseText;
            }

        }

        xhttp.open("GET", "/473Project/admin/Products/checkFolderPath.php?path="+path, true);
        xhttp.send();
    }
}
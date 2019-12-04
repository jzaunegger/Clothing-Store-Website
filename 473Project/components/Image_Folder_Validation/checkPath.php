<?php
    // Retrieve filepath and initalize variables
    $path = $_SERVER['DOCUMENT_ROOT'] . $_GET["path"];    
    $filenames = [];

    // Check if filepath exists
    $exists = is_dir($path);
 
    if($exists == true){
        print("The given filepath is a folder.");
        $files = scandir($path);


        print("The folder contains the following files:");
        print("<ul>");
        // Iterate through the retrived files from the folder
        ########################################################################################################################## Layer 1
        for($i=0; $i<count($files); $i++){
            if($files[$i] != "." && $files[$i]!=".."){
                print("<li>" . $files[$i]  . "</li>");
            }
        }

        print("<ul>");
    }
    else{
        echo("Given filepath is not a folder.");
    }

?>
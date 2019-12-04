<?php
    // Checks if the given folder path is a valid directory, and lists any children of that path
    $path = $_SERVER['DOCUMENT_ROOT'] . $_GET["path"];    
    $filenames = [];

    // Check if filepath exists
    $exists = is_dir($path);
 
    if($exists == true){
        $files = scandir($path);

        $count = 0;
        // Iterate through the retrived files from the folder
        ########################################################################################################################## Layer 1
        for($i=0; $i<count($files); $i++){
            if($files[$i] != "." && $files[$i]!=".."){
                $currentFullPath = $_GET['path'] . "/" .$files[$i];

                if(file_exists( $_SERVER['DOCUMENT_ROOT'] . $currentFullPath)){
                    print("<input type='text' size='75' name='imgPath" . $i . "' value='" . $currentFullPath . " '>");
                    print(" Verified <br>");
                }
                else{
                    print("<input type='text' size='75' name='imgPath" . $i . "' value='" . $currentFullPath . " '>");
                    print(" Unverified <br>");
                }

                $count = $count + 1;
            }
        }
        print($count . " images were detected.");
    }
    else{
        echo("Given filepath is not a folder.");
    }


?>
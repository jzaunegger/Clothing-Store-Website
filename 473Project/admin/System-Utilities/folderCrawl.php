<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Folder Crawl of Images</title>
        
        <link rel="stylesheet" type="text/css" href="/473Project/assets/CSS/nav.css">
        <link rel="stylesheet" type="text/css" href="/473Project/assets/CSS/admin.css">
        <script src="https://kit.fontawesome.com/767c462c99.js"></script>
    </head>

    <body>
        <!----------------------------------- Nav Bar ----------------------------------->
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/473Project/components/navigation.php"; ?>

        <!------------------------------------------------- Page Content ------------------------------------------------->
        <div class="Page-Content">
            <h1 class="Page-Title">Folder Crawl of Images Folder</h1>
            <hr> <br>

            <?php
                // Initalize Variables 
                $server_root = $_SERVER['DOCUMENT_ROOT'];
                $folder_root = $server_root . '/473Project/assets/images/';

                $image_counter = 0;

                // Print base folder thats to be scanned
                print("Scanning folder " . $folder_root);
                print("<br>");
                print("<br>");

                $files = scandir($folder_root);

                // Iterate through the retrived files from the folder
                ########################################################################################################################## Layer 1
                for($i=0; $i<count($files); $i++){
                    if($files[$i] != "." && $files[$i]!=".."){

                        // Check if image is jpg
                        if(strpos($files[$i], ".jpg") !== false){
                            print("<i class='fas fa-image layer1'></i>");
                            $image_counter = $image_counter + 1;
                        }

                        // Check if image is png
                        elseif(strpos($files[$i], ".png") !== false){
                            print("<i class='fas fa-image layer1'></i>");
                            $image_counter = $image_counter + 1;
                        }

                        // Check if item is a file
                        elseif(strpos($files[$i], ".") !== false){
                            print("<i class='fas fa-file layer1'></i>");
                        }

                        // Assume item is a folder
                        else{
                            print("<i class='far fa-folder layer1'></i>");
                        }

                        print("<span class='folder-label'>". $files[$i] ."</span>");
                        print("<br>");

                        ################################################################################################################ Layer 2
                        $layer2Path = $folder_root . $files[$i]; 
                        $files2 = scandir($layer2Path);


                        for($j=0; $j < count($files2); $j++){
                            if($files2[$j] != "." && $files2[$j]!=".."){

                                // Check if image is jpg
                                if(strpos($files2[$j], ".jpg") !== false){
                                    print("<i class='fas fa-image layer2'></i>");
                                    $image_counter = $image_counter + 1;
                                }

                                // Check if image is png
                                elseif(strpos($files2[$j], ".png") !== false){
                                    print("<i class='fas fa-image layer2'></i>");
                                    $image_counter = $image_counter + 1;
                                }

                                // Check if item is a file
                                elseif(strpos($files2[$j], ".") !== false){
                                    print("<i class='fas fa-file layer2'></i>");
                                }

                                // Assume item is a folder
                                else{
                                    print("<i class='far fa-folder layer2'></i>");
                                }


                                print("<span class='folder-label'>". $files2[$j] ."</span>");
                                print("<br>");

                                ######################################################################################################## Layer 3
                                if(strpos($files2[$j], ".") !== false){
                                   continue;
                                }
                                else{
                                    $layer3Path = $layer2Path . "/".  $files2[$j];
                                    $files3 = scandir($layer3Path);

                                    for($k=0; $k< count($files3); $k++){
                                        if($files3[$k] != "." && $files3[$k]!=".."){

                                            // Check if image is jpg
                                            if(strpos($files3[$k], ".jpg") !== false){
                                                print("<i class='fas fa-image layer3'></i>");
                                                $image_counter = $image_counter + 1;
                                            }

                                            // Check if image is png
                                            elseif(strpos($files3[$k], ".png") !== false){
                                                print("<i class='fas fa-image layer3'></i>");
                                                $image_counter = $image_counter + 1;
                                            }

                                            // Check if item is a file
                                            elseif(strpos($files3[$k], ".") !== false){
                                                print("<i class='fas fa-file layer3'></i>");
                                            }

                                            // Assume item is a folder
                                            else{
                                                print("<i class='far fa-folder layer3'></i>");
                                            }

                                            print("<span class='folder-label'>". $files3[$k] ."</span>");
                                            print("<br>");

                                            ######################################################################################## Layer 4
                                            if(strpos($files3[$k], ".") !== false){
                                                continue;
                                            }
                                            else{
                                                $layer4Path = $layer3Path . "/".  $files3[$k];
                                                $files4 = scandir($layer4Path);

                                                for($l=0; $l< count($files4); $l++){
                                                   if($files4[$l] != "." && $files4[$l]!=".."){

                                                        // Check if image is jpg
                                                        if(strpos($files4[$l], ".jpg") !== false){
                                                            print("<i class='fas fa-image layer4'></i>");
                                                            $image_counter = $image_counter + 1;
                                                        }

                                                        // Check if image is png
                                                        elseif(strpos($files4[$l], ".png") !== false){
                                                            print("<i class='fas fa-image layer4'></i>");
                                                            $image_counter = $image_counter + 1;
                                                        }

                                                        // Check if item is a file
                                                        elseif(strpos($files4[$l], ".") !== false){
                                                            print("<i class='fas fa-file layer4'></i>");
                                                        }

                                                        // Assume item is a folder
                                                        else{
                                                            print("<i class='far fa-folder layer4'></i>");
                                                        }

                                                        print("<span class='folder-label'>". $files4[$l] ."</span>");
                                                        print("<br>");

                                                         ############################################################################ Layer 5
                                                        if(strpos($files4[$l], ".") !== false){
                                                            continue;
                                                        }
                                                        else{
                                                            $layer5Path = $layer4Path . "/".  $files4[$l];
                                                            $files5 = scandir($layer5Path);

                                                            for($m=0; $m< count($files5); $m++){
                                                                if($files5[$m] != "." && $files5[$m]!=".."){
                                                                    
                                                                    // Check if image is jpg
                                                                    if(strpos($files5[$m], ".jpg") !== false){
                                                                        print("<i class='fas fa-image layer5'></i>");
                                                                        $image_counter = $image_counter + 1;
                                                                    }

                                                                    // Check if image is png
                                                                    elseif(strpos($files5[$m], ".png") !== false){
                                                                        print("<i class='fas fa-image layer5'></i>");
                                                                        $image_counter = $image_counter + 1;
                                                                    }

                                                                    // Check if item is a file
                                                                    elseif(strpos($files5[$m], ".") !== false){
                                                                        print("<i class='fas fa-file layer5'></i>");
                                                                    }

                                                                    // Assume item is a folder
                                                                    else{
                                                                        print("<i class='far fa-folder layer5'></i>");
                                                                    }

                                                                    print("<span class='folder-label'>". $files5[$m] ."</span>");
                                                                    print("<br>");
                                                                }
                                                            }
                                                        }
                                                   }
                                                }
                                            }
                                         
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
                print("<br>");
                print($image_counter . " images were found.");
                print("<br>");
                print("<input type='button' class='admin-button' onclick='returnToAdmin();' value='Done'>");
                print("<br>");
            ?>
        </div>
        
        <!------------------------------------------------- Bottom Panel ------------------------------------------------->
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/473Project/components/nav-bottom.php"; ?>

        <script src="/473Project/admin/admin.js"></script>
    </body>
</html>
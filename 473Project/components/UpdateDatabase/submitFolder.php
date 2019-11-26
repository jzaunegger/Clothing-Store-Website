<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Folder Submission</title>
        
        <link rel="stylesheet" type="text/css" href="/473Project/assets/CSS/nav.css">
        <link rel="stylesheet" type="text/css" href="/473Project/assets/CSS/pages.css">
        <script src="https://kit.fontawesome.com/767c462c99.js"></script>
    </head>

    <body>
        <!----------------------------------- Nav Bar ----------------------------------->
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/473Project/components/navigation.php"; ?>

        <!------------------------------------------------- Page Content ------------------------------------------------->
        <div class="Page-Content">
                <h1 class="Page-Title">Folder Submission</h1>
                <hr> <br>

                <?php
                    $folderData = $_POST['input-folder'];
                    $folderPath = $_POST['folder-path'];
                    $server_root = $_SERVER['DOCUMENT_ROOT'];

                    $num_files = count($folderData);

                    print("The folder you selected was: " . $folderPath);
                    print("<br>");
                    print("It contains " . $num_files . " file(s).");
                    print("<br>");

                    print("<table class='folder-submission-table'>");
                    print("<tr>");
                    print("<th> Image Name </th>");
                    print("<th> Image Path </th>");
                    print("<th> Verified </th>");
                    print("</tr>");

                    for($i=0; $i<$num_files; $i++){
                        $current_path = $server_root . $folderPath . "/" . $folderData[$i];

                        print("<tr>");
                        print("<th>" . $folderData[$i] . "</th>");
                        print("<th>". $current_path . "</th>");


                        if(file_exists($current_path)){
                            print("<th>Yes</th>");
                        }
                        else{
                            print("<th>No</th>");
                        }

                        print("</tr>");
                    }
                    print("</table>");
                ?>
        </div>
        
        <!------------------------------------------------- Bottom Panel ------------------------------------------------->
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/473Project/components/nav-bottom.php"; ?>

    </body>
</html>
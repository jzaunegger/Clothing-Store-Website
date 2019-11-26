<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Search Results</title>
        
        <link rel="stylesheet" type="text/css" href="/473Project/assets/CSS/nav.css">
        <link rel="stylesheet" type="text/css" href="/473Project/assets/CSS/pages.css">
        <script src="https://kit.fontawesome.com/767c462c99.js"></script>
    </head>

    <body>
        <!----------------------------------- Nav Bar ----------------------------------->
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/473Project/components/navigation.php"; ?>

        <!------------------------------------------------- Page Content ------------------------------------------------->
        <div class="Page-Content">
                <h1 class="Page-Title">Search Results</h1>
                <hr> <br>

                <?php
                    $search = $_POST['searchbar'];

                    // Retrieve search string from the Top Nav form

                    // If set, analyze the string
                    if(isset($_POST['searchbar'])){
                        $search = $_POST['searchbar'];

                        // If the string is not set, throw error
                        if($search == ""){
                            print("The search bar was left empty so we didn't know what to look for. Try searching for 
                                something more specific.");
                        }
                        
                        else{
                            print('You searached: "' . $search . '"');
                            print("<br>");

                            // Initalize Variables
                            $results_counter = 0;

                            print($results_counter . " results were found.");
                        }
                    }
                ?>
        </div>
        
        <!------------------------------------------------- Bottom Panel ------------------------------------------------->
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/473Project/components/nav-bottom.php"; ?>
    </body>
</html>
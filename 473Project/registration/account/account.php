<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Account</title>

        <link rel="stylesheet" type="text/css" href="/473Project/assets/CSS/nav.css">
        <link rel="stylesheet" type="text/css" href="/473Project/assets/CSS/pages.css">
        <script src="https://kit.fontawesome.com/767c462c99.js"></script>
    </head>

    <body>
        <!----------------------------------- Nav Bar ----------------------------------->
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/473Project/components/navigation.php"; ?>

        <!------------------------------------------------ Page Contents ------------------------------------------------->
        <div class="Page-Content">
            <?php
                //Verify that account is logged in.
                if(empty($_SESSION["loggedIn"])){
                    echo ("<br><br>
                          <p> 
                            Good attempt, but you should not be able to see anything on this page because you are not signed in. If you would like to access 
                            your account, you should try logging in first. 
                          </p>
                          
                          <img src='/473Project/assets/images/support/not-today.jpg' class='meme'>
                          
                          ");
                        
                          echo("</div>");

                          include $_SERVER['DOCUMENT_ROOT'] . "/473Project/components/nav-bottom.php";
                    return;
                }
            ?>

            <h1 class="Page-Title">Welcome <?php echo($_SESSION["username"]);?></h1>
            <hr> <br>

            <div class="two-columns">
                <div class="left-col">
                    <h2>Account Information</h2>
                    <?php 
                    // Make SQL Query to pull user information
                     $userID =  $_SESSION["userID"];
                     $username = $_SESSION["username"];

                    // Include Connection File and Open a connection.
                    $connectionFile = $_SERVER['DOCUMENT_ROOT'] . "/473Project/assets/other/MySQL_ConnectionFile.php";
                    include $connectionFile;
                    $connection = OpenConnection();

                    // If connection fails throw error.
                    if(!$connection){
                        echo ("<p>
                                Sorry your account information could not be loaded at the moment. Sorry for the incovience, please check back later
                                to see if things are working properly again.
                              </p>");
                    }

                    // Create and send query
                    $sql = "SELECT firstName, lastName, email, phoneNumber, dateAdded FROM users where userID='$userID'";
                    $result = $connection->query($sql);

                    // Parse Response
                    if($result->num_rows >0){
                        while($row = $result->fetch_assoc()){
                            echo("<span> Username: " . $username . "</span> <br><br>");
                            echo("<span> First Name: " . $row['firstName'] . "</span> <br><br>");
                            echo("<span> Last Name: " . $row['lastName'] . "</span> <br><br>");
                            echo("<span> Email: " . $row['email'] . "</span> <br><br>");
                            echo("<span> Phone Number: " . $row['phoneNumber'] . "</span> <br><br>");
                            echo("<span> Date Joined: " . $row['dateAdded'] . "</span> <br><br>");
                        }
                    }

                    //Close the connection.
                    CloseConnection($connection);
                ?>
                </div>

                <div class="right-col">
                    <h2>Account Security</h2>
                        <!-- Signout of the Website -->
                        <form action="signout.php" method="POST">
                            <input type="submit" class="secBTN" name="signoutBtn" value="Sign Out">
                        </form>
                        <br>

                        <!-- Set Security Questions -->
                        <form action="updateSecurity.php" method="POST">
                            <input type="submit" class="secBTN" name="signoutBtn" value="Update Security Questions">
                        </form>
                        <br>

                        <!-- Change your password -->
                        <form action="updatePassword.php" method="POST">
                            <input type="submit" class="secBTN" name="signoutBtn" value="Change Your Password">
                        </form>
                        <br>

                        <!-- Check if user is admin -->
                        <?php
                            $isAdmin = $_SESSION['isAdmin'];

                            if($isAdmin == 1){
                                echo("<button class='secBTN' onclick='window.location.href=`/473Project/admin/admin.php`'>View Admin Tools</button>");
                            }
                        
                        ?>

                        
                </div>
            </div>                

            <h2>Order History</h2>
                <p>
                    Sorry but there is currently nothing here. When the cart system is up and running we will make this work.
                </p>
                <br><br>
                
        </div>

        <!------------------------------------------------- Bottom Panel ------------------------------------------------->
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/473Project/components/nav-bottom.php"; ?>
    </body>
</html>
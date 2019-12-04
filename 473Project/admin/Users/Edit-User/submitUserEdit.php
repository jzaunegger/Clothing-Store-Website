<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Edit User</title>
        
        <link rel="stylesheet" type="text/css" href="/473Project/assets/CSS/nav.css">
        <link rel="stylesheet" type="text/css" href="/473Project/assets/CSS/admin.css">
        <script src="https://kit.fontawesome.com/767c462c99.js"></script>
    </head>

    <body>
        <!----------------------------------- Nav Bar ----------------------------------->
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/473Project/components/navigation.php"; ?>

        <!------------------------------------------------- Page Content ------------------------------------------------->
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

                        echo('<div class="bottom-panel">
                                <a href="/473Project/support-pages/About.php" >About Us</a>
                                <a href="/473Project/support-pages/Careers.php">Careers</a>
                                <a href="/473Project/support-pages/FAQ.php">FAQ</a>
                                <a href="/473Project/support-pages/CustomerSupport.php">Customer Support</a>
                            </div>
                            ');
                    return;
                }
            ?>

            <!-- Show Admin stuff if user is logged in. -->
            <h1 class="Page-Title">User Edit Details</h1>

            <?php
                // Retrieve data from editUserData.php
                $userID = $_POST['userID'];
                $username = $_POST['username'];

                if(isset($_POST['firstname'])){
                    $firstname = $_POST['firstname'];
                }
                else{
                    $firstname = "";
                }

                if(isset($_POST['lastname'])){
                    $lastname = $_POST['lastname'];
                }
                else{
                    $lastname = "";
                }

                if(isset($_POST['email'])){
                    $email = $_POST['email'];
                }
                else{
                    $email = "";
                }

                if(isset($_POST['areaCode']) && isset($_POST['phone1'])&& isset($_POST['phone2'])){
                    $phone = $_POST['areaCode']. $_POST['phone1'] . $_POST['phone2'];
                }
                else{
                    $phone = "";
                }

                $admin = $_POST['admin'];

                $pass1 = $_POST['password1'];
                $pass2 = $_POST['password2'];

                if($pass1 == $pass2){
                    $hash = password_hash($pass1, PASSWORD_BCRYPT);

                    // Add connection file and check if connection exists
                    $connectionFile = $_SERVER['DOCUMENT_ROOT'] . "/473Project/assets/other/MySQL_ConnectionFile.php";
                    include $connectionFile;
                    $connection = OpenConnection();

                    if(!$connection){
                         echo "Connection failed: " . mysqli_connect_error();
                    }

                    // Add User Account to PHP
                    $updateUserSQL = "UPDATE users 
                                     WHERE userID = '$userID'";

                    if($connection -> query($updateUserSQL) === TRUE){
                        print("Account successfully created." );
                        print("<br>");
                        print("<br>");
                    }

                    else{
                        print("A new user account could not be created at this time.");
                        print("<br>");
                        print("<br>");
                    }
                }


                // Print off the details recorded
                print("User ID: " . $userID);
                print("<br>");
                print("<br>");

                print("Username: " . $username);
                print("<br>");
                print("<br>");
                

                print("First Name: " . $firstname);
                print("<br>");
                print("<br>");

                print("Last Name: " . $lastname);
                print("<br>");
                print("<br>");

                print("Email Name: " . $email);
                print("<br>");
                print("<br>");

                print("Phone Number: " . $phone);
                print("<br>");
                print("<br>");

                print("Admin Status: " . $admin);
                print("<br>");
                print("<br>");
            ?>
            
        </div>    

        <!------------------------------------------------- Bottom Panel ------------------------------------------------->
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/473Project/components/nav-bottom.php"; ?>

        <script src="/473Project/admin/admin.js"></script>
        <script src="/473Project/admin/Users/Users.js"></script>
    </body>
</html>
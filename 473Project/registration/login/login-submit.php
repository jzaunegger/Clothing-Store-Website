<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Logged In</title>

        <link rel="stylesheet" type="text/css" href="/473Project/assets/CSS/nav.css">
        <link rel="stylesheet" type="text/css" href="/473Project/assets/CSS/login-signup.css">
        <script src="https://kit.fontawesome.com/767c462c99.js"></script>
        <script src="login.js"></script>
    </head>

    <body>
        <!-------------------------------- Start Session -------------------------------->
        <?php 
            session_start();

            // Retrieve username and password
            $user = $_POST["username"];
            //$user = substr_replace($user, " ", 0,  0);
            $pass = $_POST["password"];

            // Intialize Variables
            $responseID = null;
            $responseUsername= null;
            $responsePass  = null;
            $responseAdmin = null;
            $loggedIn = 0;


            // Include Connection File and Open a connection.
            $connectionFile = $_SERVER['DOCUMENT_ROOT'] . "/473Project/assets/other/MySQL_ConnectionFile.php";
            include $connectionFile;
            $connection = OpenConnection();

            // If connection fails throw error.
            if(!$connection){
                echo ("<h1> Account Not Verified </h1>");
                echo ("<p>
                        Sorry your account could not be verified. Perhaps you have the wrong login, or need to reset your password.
                        If you need to reset your password please click here. If you need to create an account click here.
                      </p>");
            }

            // Create and send query
            $sql = "SELECT userID, username, pass, isAdmin FROM users where username='$user'";
            $result = $connection->query($sql);

            // Parse Response
            if($result->num_rows >0){
                while($row = $result->fetch_assoc()){
                    $responseID = $row['userID'];
                    $responseUsername = $row['username'];
                    $responsePass = $row['pass'];
                    $responseAdmin = $row['isAdmin'];
                }
            }

            //Close the connection.
            CloseConnection($connection);

            if(password_verify($pass, $responsePass)){
                $loggedIn = 1;
            }

            $_SESSION["userID"] = $responseID;
            $_SESSION["username"] = $responseUsername;
            $_SESSION["userPass"] = $responsePass;
            $_SESSION["isAdmin"] = $responseAdmin;
            $_SESSION["loggedIn"] = $loggedIn;
        ?>

       <!----------------------------------- Nav Bar ----------------------------------->
       <?php include $_SERVER['DOCUMENT_ROOT'] . "/473Project/components/navigation.php"; ?>

        <!------------------------------------------------- Login Post --------------------------------------------------->

        <div class="Page-Content">
            <div class="login-post">
                <div class="login-post-left">
                <?php
                    // Validate password
                    if($loggedIn == 1){
                        echo ("<h1> " . $user .  " you are now logged in.</h1>");
                        echo("<p>
                              Thank you for signing in! Now that you have logged in you can now add items to your cart, leave product reviews,
                              check the status of your order(s), update your billing or shipping information, change your password, or setup further 
                              security for your account. 
                              </p>");
                    }
                    else{
                        echo ("<h1>Account Not Verified</h1>");
                        echo ("<p>
                                Sorry your account could not be verified. Perhaps you have the wrong login, or need to reset your password.
                                If you need to reset your password please click here. If you need to create an account click here.
                              </p>");

                        print_r($_SESSION);
                    }
                ?>
                </div>

                <div class="login-post-right">
                    <img src="/473Project/assets/images/support/mountain.jpg">
                </div>
            </div>
        </div>

        <!------------------------------------------------- Bottom Panel ------------------------------------------------->
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/473Project/components/nav-bottom.php"; ?>
    </body>
</html>
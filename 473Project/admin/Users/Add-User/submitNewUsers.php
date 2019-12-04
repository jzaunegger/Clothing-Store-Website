<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>New User Submission</title>
        
        <link rel="stylesheet" type="text/css" href="/473Project/assets/CSS/nav.css">
        <link rel="stylesheet" type="text/css" href="/473Project/assets/CSS/admin.css">
        <script src="https://kit.fontawesome.com/767c462c99.js"></script>
    </head>

    <body>
        <!----------------------------------- Nav Bar ----------------------------------->
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/473Project/components/navigation.php"; ?>

        <!------------------------------------------------- Page Content ------------------------------------------------->
        <div class="Page-Content">

        <h1>Add User Submission</h1>

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

                // Retrieve data from addUser.php
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
                
                $emailAddress = $_POST['email'];

                if(isset($_POST['areaCode'])){
                    $areaCode = $_POST['areaCode'];
                }
                else{
                    $areaCode = "";
                }

                if(isset($_POST['phone1'])){
                    $phone1 = $_POST['phone1'];
                }
                else{
                    $phone1 = "";
                }

                if(isset($_POST['phone2'])){
                    $phone2 = $_POST['phone2'];
                }
                else{
                    $phone2 = "";
                }

                $phone = $areaCode . $phone1 . $phone2;

                $adminStatus = $_POST['admin'];
                $pass1 = $_POST['password1'];
                $pass2 = $_POST['password2'];

                $date = date("Y/m/d");
                $time = date("h:i:s");

                // Check if the passwords match
                if(strcmp($pass1, $pass2) == 0){
                    $hash = password_hash($pass1, PASSWORD_BCRYPT);

                    // Add connection file and check if connection exists
                    $connectionFile = $_SERVER['DOCUMENT_ROOT'] . "/473Project/assets/other/MySQL_ConnectionFile.php";
                    include $connectionFile;
                    $connection = OpenConnection();

                    if(!$connection){
                         echo "Connection failed: " . mysqli_connect_error();
                    }

                    // Add User Account to PHP
                    $addUserSQL = "INSERT INTO users (username, pass, firstName, lastName, email, phoneNumber, dateAdded, timeAdded, dateLastEdited, timeLastEdited, isAdmin)
                                   VALUES ('$username', '$hash', '$firstname', '$lastname', '$emailAddress', '$phone', '$date', '$time', '$date', '$time', '$adminStatus')";

                    if($connection -> query($addUserSQL) === TRUE){
                        print("Account successfully created." );
                        print("<br>");
                        print("<br>");
                    }

                    else{
                        print("A new user account could not be created at this time.");
                        print("<br>");
                        print("<br>");
                    }

                    // Retrieve UserID from DB
                    $userID = "none";
                    $userIdSQL = "SELECT userID, firstName, lastName FROM users WHERE username='$username' and email='$emailAddress'";
                    $SQL_Data = $connection->query($userIdSQL);

                    if($SQL_Data->num_rows > 0){
                        while($data = $SQL_Data->fetch_assoc()){
                            $userID = $data['userID'];
                        }
                    }

                    // Add user info to Security Questions Table
                    $secQuestionsSQL = "INSERT INTO usersecquestions(userID, questionsSet)
                                        VALUES('$userID', '0')";
                    if($connection ->query($secQuestionsSQL) === TRUE){
                        print("Please have this user update their security questions.");
                        print("<br>");
                        print("<br>");
                    }
                    else{
                        print("Security Question settings could not be initalized at this time.");
                        print("<br>");
                        print("<br>");
                    }
                    
                }
            ?>

            <!-- Show Account Creation Details -->
            Username: <?php echo($username) ?>
            <br><br>

            First Name: <?php echo($firstname) ?> 
            <br><br>

            Last Name: <?php echo($lastname) ?> 
            <br><br>

            Email Address: <?php echo($emailAddress) ?> 
            <br><br>

            Phone Number: <?php echo($phone) ?> 
            <br><br>

            Is Admin: <?php echo($adminStatus) ?>
            <br><br>

            Password: <?php echo($hash)?>
            <br><br>

            <button class="admin-button" onclick="returnToAdmin();">Return to Admin Panel</button>
            <button class="admin-button" onclick="addUser();">Add Another User</button>
            
        </div>    

        <!------------------------------------------------- Bottom Panel ------------------------------------------------->
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/473Project/components/nav-bottom.php"; ?>

        <script src="/473Project/admin/admin.js"></script>
    </body>
</html>
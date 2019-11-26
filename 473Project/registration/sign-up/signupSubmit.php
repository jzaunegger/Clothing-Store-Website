<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Sign Up</title>

        <link rel="stylesheet" type="text/css" href="/473Project/assets/CSS/nav.css">
        <link rel="stylesheet" type="text/css" href="/473Project/assets/CSS/login-signup.css">
        <script src="https://kit.fontawesome.com/767c462c99.js"></script>
    </head>

    <body>
        <?php 
            // Pull variables from associated html file.
            $username = $_POST["username"];

            // Set firstname to none if it was left empty
            $firstName = $_POST["firstName"];

            if($firstName == ""){
                $firstName = "none";
            }

            // Set lastname to none if it was left empty
            $lastName = $_POST["lastName"];

            if($lastName == ""){
                $lastName = "none";
            }
            $emailAddress = $_POST["emailAddress"];

            // Format the area code
            $areaCode = $_POST["areaCode"];
            $phone1 = $_POST["phone1"];
            $phone2 = $_POST["phone2"];

            $fullPhoneNum = $areaCode . $phone1 . $phone2;

            // Check if phone number is empty
            if($areaCode == "" or $phone1 == "" or $phone2 == ""){
                $fullPhoneNum = "none";
            }
            
            // Get the time and date
            $date = date("Y/m/d");
            $time = date("h:i:s");

            $password1 = $_POST["password1"];
            $password2 = $_POST["password2"];

            if($password1 == $password2){

                // Hash the password
                $hash = password_hash($password1, PASSWORD_BCRYPT);

                // Include Connection File and Open a connection.
                $connectionFile = $_SERVER['DOCUMENT_ROOT'] . "/473Project/assets/other/MySQL_ConnectionFile.php";
                include $connectionFile;
                $connection = OpenConnection();

                // If connection fails throw error.
                if(!$connection){
                    echo "Connection failed: " . mysqli_connect_error();
                }

                // Create Query
                $sql = "INSERT INTO users (username, pass, firstName, lastName, email, phoneNumber, dateAdded, timeAdded, dateLastEdited, timeLastEdited)
                            VALUES('$username', '$hash', '$firstName', '$lastName', '$emailAddress', '$fullPhoneNum', '$date', '$time', '$date', '$time')";

        ?>
        <!----------------------------------- Nav Bar ----------------------------------->
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/473Project/components/navigation.php"; ?>


        <!------------------------------------------------- Signup Box --------------------------------------------------->

        <div class="Page-Content">

            <div class="SignUp-Post">

                <?php 
                        // Check if the account could be created.
                        if($connection -> query($sql) === TRUE){
                            echo("<h1> Thank you, " .  $username . " for signing up! </h1>");
                            echo("<p> We will be sending a confirmation email to " . $emailAddress . " to verify that your account was set up.
                                  You can now login to the website. Please be sure to update your security questions and answers as soon as you login.
                                </p>");
                        }
                        else{
                            echo("<h1> Sorry but your account could not be created at this time. </h1>");
                        }

                        $userID = "none";
                        $sql2 = "SELECT userID, firstName, lastName FROM users WHERE username='$username' AND email='$emailAddress'";
                        $data = $connection->query($sql2);


                            //Parse Data
                        if($data->num_rows > 0){
                            while($data2 = $data->fetch_assoc()){
                                $userID = $data2['userID'];
                            }
                        }

                        $sql3 = "INSERT INTO usersecquestions (userID, questionsSet)
                        VALUES(' $userID', '0')";

                        if($connection -> query($sql3) === TRUE){
                            echo("Please set your security questions.");
                        }
                        else{
                            echo("User security error.");
                            echo "Error: " . $sql3 . "<br>" . $connection->error;
                        }

                        // Close the Connection
                        CloseConnection($connection);
                    }
                ?>

            </div>
        </div>

        <!------------------------------------------------- Bottom Panel ------------------------------------------------->
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/473Project/components/nav-bottom.php"; ?>

    </body>
</html>
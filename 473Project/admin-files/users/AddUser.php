<html>
    <head>
        <title>Add User </title>
    </head>

    <body>
        <h1>Upload Sumamry</h1>
        
        <?php 
            $userName = $_POST["UserName"];
            $firstName = $_POST["FirstName"];
            $lastName = $_POST["LastName"];
            $phoneNumber = $_POST["PhoneNumber"];
            $emailAddress = $_POST["Email"];
            $password1 = $_POST["Password"];
            $password2 = $_POST["ConfirmPassword"];

            // Include Connection File and Open a connection.
            include 'MySQL_ConnectionFile.php';
            $connection = OpenConnection();

            // If connection fails throw error.
            if(!$connection){
                echo "Connection failed: " . mysqli_connect_error();
            }

            echo "Connected Sucessfully";

            // Close the connection.
            CloseConnection($connection);
        ?>

    <span>The username is <?=$userName;?> </span>
    <br><br>

    <span>The user's first name is <?=$firstName;?> </span>
    <br><br>

    <span>The user's last name is <?=$lastName;?> </span>
    <br><br>

    <span>The user's phone number is <?=$phoneNumber;?> </span>
    <br><br>

    <span>The users email is <?=$emailAddress;?> </span>
    <br><br>

    </body>
</html>
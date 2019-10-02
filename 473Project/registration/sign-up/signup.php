<html>
    <head>
        <title>Signup</title>
    </head>

    <body>
        <?php 
            // Pull variables from associated html file.
            $username = $_POST["username"];
            $firstName = $_POST["firstName"];
            $lastName = $_POST["lastName"];
            $emailAddress = $_POST["emailAddress"];

            $areaCode = $_POST["areaCode"];
            $phone1 = $_POST["phone1"];
            $phone2 = $_POST["phone2"];

            $fullPhoneNum = $areaCode . $phone1 . $phone2;
            
            $currentDate = date("Y-") . date("m-") .date("d");

            $password1 = $_POST["password1"];
            $password2 = $_POST["password2"];

            if($password1 == $password2){

                // Include Connection File and Open a connection.
                include 'MySQL_ConnectionFile.php';
                $connection = OpenConnection();

                // If connection fails throw error.
                if(!$connection){
                    echo "Connection failed: " . mysqli_connect_error();
                }

                $addUser = " INSERT INTO users (username, firstName, lastName, emailAddress, phoneNumber, password, dateAdded)
                         VALUES(' $username', '$firstName', '$lastName', '$emailAddress', '$fullPhoneNum', '$password1', '$currentDate' )";

                if($connection -> query($addUser) === TRUE){
                    echo "Thank you for signing up!
                            You can now login.";
                } 

                else{
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }

                // Close the connection.
                CloseConnection($connection);
            }

            else{
                print("The passwords did not match so we could not create your account. ");
            }
        ?>

    </body>
</html>
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
            <h1 class="Page-Title">Edit User Details</h1>

            <?php
                // Retrieve the productID from editUser.php
                if(!isset($_POST['editUsers'])){
                    print("A user was not selected to be edited. Please select a user to edit.");
                    print("<br>");
                    print("<input type='button' class='admin-button' value='Return to Edit Users' onclick='editUser();'>");
                    print("<input type='button' class='admin-button' value='Cancel' onclick='returnToAdmin();'>");
                }
                else{
                   $userID = $_POST['editUsers'];

                   // Add connection file and check if connection exists
                   $connectionFile = $_SERVER['DOCUMENT_ROOT'] . "/473Project/assets/other/MySQL_ConnectionFile.php";
                   include $connectionFile;
                   $connection = OpenConnection();

                   if(!$connection){
                        echo "Connection failed: " . mysqli_connect_error();
                   }

                   $SQL = "SELECT username, firstName, lastName, email, phoneNumber, isAdmin FROM users WHERE userID='$userID'";
                   $SQL_Data = $connection->query($SQL);

                    if($SQL_Data->num_rows > 0){
                        while($data = $SQL_Data->fetch_assoc()){

                   ?>

                    <form action='submitUserEdit.php' method='POST'>
                        <span>
                            Editing User Id: 
                            <?php 
                            print("<input type='text' name='userID' size='6' value='" . $userID . "' readonly>"); 
                            ?>
                        </span>
                        <br><br>

                        <span>
                            The * indidicates a required field, if any of the other blanks go unfilled a value of none is assumed. Since you are editing 
                            a user's information, the passwords will not appear. They will have to be set and match before the edits can be made. Press the 
                            check form button to validate the inputs. 
                        </span>
                        <br><br>

                        <div class="form-cols">
                            <div class="form-col1">
                                Username:<br>
                                <input type="text" id="username" name="username" size="50" value="<?php print($data['username']); ?>" readonly>
                                <br><br>

                                First Name<br>
                                <input type="text" name="firstname" size="50" placeholder="First Name" value="<?php print($data['firstName']); ?>">
                                <br><br>

                                Last Name<br>
                                <input type="text" name="lastname" size="50" placeholder="Last Name" value="<?php print($data['lastName']); ?>">
                                <br><br>

                                *Email Address<br>
                                <input type="email" id="email" name="email" size="50" placeholder="Email Address" value="<?php print($data['email']); ?>">
                                <br><br>
                            </div>

                            <div class="form-col2">
                                Phone Number <br>   
                                <input type="text" name="areaCode" id="areaCode" maxlength="3" size="3" class="input-item" placeholder="(123)" style="text-align: center;"  value="<?php print(substr($data['phoneNumber'], 0, 3)); ?>"> -
                                <input type="text" name="phone1" id="phone1" maxlength="3" size="3" class="input-item" placeholder="456" style="text-align: center;"        value="<?php print(substr($data['phoneNumber'], 3, 3)); ?>"> -
                                <input type="text" name="phone2" id="phone2" maxlength="4" size="4" class="input-item" placeholder="7890" style="text-align: center;"       value="<?php print(substr($data['phoneNumber'], 6, 4)); ?>">
                                <br><br>

                                Is Admin<br>
                                <select name="admin">
                                    <option value="0" <?php if($data['isAdmin'] == 0){ print("selected='selected'");} ?>>No</option>
                                    <option value="1" <?php if($data['isAdmin'] == 1){ print("selected='selected'");} ?>>Yes</option>
                                </select> <br><br>

                                *Password<br>
                                <input type="password" id="pass1" name="password1" size="50" placeholder="Password 1">
                                <br><br>

                                *Confirm Password<br>
                                <input type="password" id="pass2" name="password2" size="50" placeholder="Password 2">
                                <br><br>
                            </div>
                        </div>

                        <input type="button" class="admin-button" value="Cancel" onclick="returnToAdmin();">
                        <input type="button" class="admin-button" value="Check Form" onclick="validateForm()">
                        <input type="submit" class="admin-button" value="Save User Edits" id="submitButton" style="visibility: hidden; float: right;">
                    </from>
                   <?php
                   }
                }
            }
        ?>
            
        </div>    

        <!------------------------------------------------- Bottom Panel ------------------------------------------------->
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/473Project/components/nav-bottom.php"; ?>

        <script src="/473Project/admin/admin.js"></script>
        <script src="/473Project/admin/Users/Users.js"></script>
    </body>
</html>
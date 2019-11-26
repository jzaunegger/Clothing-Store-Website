<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Add User</title>
        
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

            <h1 class="Page-Title">Add User</h1>
            <form action="submitNewUsers.php" method="POST">
                <div class="form-cols">

                    <div class="form-col1">
                        Username<br>
                        <input type="text" name="username" size="50" placeholder="Username">
                        <br><br>

                        First Name<br>
                        <input type="text" name="firstname" size="50" placeholder="First Name">
                        <br><br>

                        Last Name<br>
                        <input type="text" name="lastname" size="50" placeholder="Last Name">
                        <br><br>

                        Email Address<br>
                        <input type="email" name="email" size="50" placeholder="Email Address">
                        <br><br>
                    </div>

                    <div class="form-col2">
                        Phone Number <br>   
                        <input type="text" name="areaCode" id="areaCode" maxlength="3" size="3" class="input-item" placeholder="(123)" style="text-align: center;">-
                        <input type="text" name="phone1" id="phone1" maxlength="3" size="3" class="input-item" placeholder="456" style="text-align: center;">-
                        <input type="text" name="phone2" id="phone2" maxlength="4" size="4" class="input-item" placeholder="7890" style="text-align: center;">
                        <br><br>

                        Is Admin<br>
                        <select name="admin">
                            <option value="0" >No</option>
                            <option value="1" >Yes</option>
                        </select> <br><br>

                        Password<br>
                        <input type="password" name="password1" size="50" placeholder="Password 1">
                        <br><br>

                        Confirm Password<br>
                        <input type="password" name="password2" size="50" placeholder="Password 2">
                        <br><br>
                    </div>
                </div>

                <input type='submit' class="admin-button" value="Add User">
            </form>

            <button class="admin-button" onclick="returnToAdmin();">Cancel</button>   
        </div>    

        <!------------------------------------------------- Bottom Panel ------------------------------------------------->
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/473Project/components/nav-bottom.php"; ?>

        <script src="/473Project/admin/admin.js"></script>
    </body>
</html>
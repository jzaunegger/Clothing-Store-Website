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
                $firstname = $_POST['firstname'];
                $lastname = $_POST['lastname'];
                $emailAddress = $_POST['email'];

                $phone = $_POST['areaCode'] . $_POST['phone1'] . $_POST['phone2'];
                $adminStatus = $_POST['admin'];
                $pass1 = $_POST['password1'];
                $pass2 = $_POST['password2'];
            ?>

            <!-- Show Admin stuff if user is logged in. -->

            <h1 class="Page-Title">New User Submission</h1>

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

            Password 1: <?php echo($pass1) ?> 
            <br><br>

            Password 2: <?php echo($pass2) ?> 
            <br><br>

            <button class="admin-button" onclick="returnToAdmin();">Return to Admin Panel</button>
            <button class="admin-button" onclick="addUser();">Add Another User</button>
            
        </div>    

        <!------------------------------------------------- Bottom Panel ------------------------------------------------->
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/473Project/components/nav-bottom.php"; ?>

        <script src="/473Project/admin/admin.js"></script>
    </body>
</html>
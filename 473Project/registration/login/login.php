<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Sample TopNav Bar</title>

        <link rel="stylesheet" type="text/css" href="/473Project/assets/CSS/nav.css">
        <link rel="stylesheet" type="text/css" href="/473Project/assets/CSS/login-signup.css">
        <script src="https://kit.fontawesome.com/767c462c99.js"></script>
        <script src="login.js"></script>
    </head>

    <body>
        <!----------------------------------- Nav Bar ----------------------------------->
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/473Project/components/navigation.php"; ?>
       
        <!------------------------------------------------- Signup Box --------------------------------------------------->

        <div class="Page-Content">

            <div class="signup-container">

                <form action="login-submit.php" method="POST" class="signup-box"> 
                    <h1>Login</h1>
                    <hr>

                    <div class="input-chunk">
                        Username <br> 
                        <input type="text" name="username" id="username" class="input-item" size="24" placeholder="john_doe" onchange="checkInput();">
                    </div>

                    <div class="input-chunk">
                        Password <br> 
                        <input type="password" name="password" id="password" class="input-item" size="24" placeholder="John" onchange="checkInput();">
                    </div>

                    <br> <a href="/473Project/registration/sign-up/signup.php" id="link">Need an account?</a> <br>
                    <input type="submit" id="submit-button" value="Login">  
                </form>
            </div>
        </div>

    
    </body>
</html>
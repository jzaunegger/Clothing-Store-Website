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
        <script src="signup.js"></script>
    </head>

    <body>
        <!----------------------------------- Nav Bar ----------------------------------->
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/473Project/components/navigation.php"; ?>
        
        <!------------------------------------------------- Signup Box --------------------------------------------------->

        <div class="Page-Content">

            <div class="signup-container">

                <form action="signupSubmit.php" method="POST" class="signup-box"> 
                    <h1>Sign up</h1>
                    <a href="/473Project/registration/login/login.html" id="link">Already have an account?</a>
                    <hr>

                    <div class="input-chunk">
                        Username * <br> 
                        <input type="text" name="username" id="username" class="input-item" size="30" placeholder="john_doe" onchange="checkInput();">
                    </div>

                    <div class="input-chunk">
                        First Name <br> 
                        <input type="text" name="firstName" id="firstName" class="input-item" size="30" placeholder="John">
                    </div>

                    <div class="input-chunk">
                        Last Name <br> 
                        <input type="text" name="lastName" id="lastName" class="input-item" size="30" placeholder="Doe">
                    </div>

                    <div class="input-chunk">
                        Email Address *<br> 
                        <input type="email" name="emailAddress" id="emailAddress" class="input-item" size="30" placeholder="john_doe@doe.com" onchange="checkInput();">
                    </div>

                    <div class="input-chunk">
                        Phone Number <br>   
                        <input type="text" name="areaCode" id="areaCode" maxlength="3" size="3" class="input-item" placeholder="(123)" style="text-align: center;">-
                        <input type="text" name="phone1" id="phone1" maxlength="3" size="3" class="input-item" placeholder="456" style="text-align: center;">-
                        <input type="text" name="phone2" id="phone2" maxlength="4" size="4" class="input-item" placeholder="7890" style="text-align: center;">
                    </div>

                    <div class="input-chunk">
                        Password *<br> 
                        <input type="password" name="password1" id="pass1" class="input-item" size="30" placeholder="Password" onchange="checkInput();">
                    </div>
        
                    <div class="input-chunk">
                        Confirm Password *<br> 
                        <input type="password" name="password2" id="pass2" class="input-item" size="30" placeholder="Password" onchange="checkInput();">
                    </div>

                    <hr>
                    The * indicates a required field. <br>
                    By sigining up you are agreeing   <br>
                    to our Terms and Conditions.      <br>


                    <input type="submit" id="submit-button" value="Sign Up">  
                </form>
            </div>
        </div>

        <!------------------------------------------------- Bottom Panel ------------------------------------------------->
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/473Project/components/nav-bottom.php"; ?>
    </body>
</html>
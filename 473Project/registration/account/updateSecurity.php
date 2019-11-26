<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Account</title>

        <link rel="stylesheet" type="text/css" href="/473Project/assets/CSS/nav.css">
        <link rel="stylesheet" type="text/css" href="/473Project/assets/CSS/pages.css">
        <script src="https://kit.fontawesome.com/767c462c99.js"></script>
    </head>

    <body>
        <!----------------------------------- Nav Bar ----------------------------------->
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/473Project/components/navigation.php"; ?>

        <!------------------------------------------------ Page Contents ------------------------------------------------->
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

            <h1 class="Page-Title">Update Security Questions</h1>
            <hr> <br>

            

            <!-- Check if user security questions are set. -->
            <?php
                $userID =  $_SESSION["userID"];
                $username = $_SESSION["username"];
                

                // Display Security Questions, when the page loads updateSecurityQuestions.js makes a request for the securityQuestions.json,
                // then parses the data and injects the values into the echo'd html.
                echo("<div class='sec-questions-two-col'>
                        <form action='submitSecurityUpdate.php' method='POST'>
                            <div class='security-questions' id='securityQuestions'>
                                <div class='security-question' id='question1'>
                                    Question 1: <br>
                                        <select class='question-select' id='questionSelect1' name='question1'>
                                        </select><br>

                                    Answer 1: <br>
                                        <input type='text' class='question-answer' id='questionAnswer1' size='40' name='answer1'>
                                 </div>

                                <div class='security-question' id='question2'>
                                    Question 2: <br>
                                        <select class='question-select' id='questionSelect2' name='question2'>
                                        </select><br>

                                    Answer 2: <br>
                                        <input type='text' class='question-answer' id='questionAnswer2' size='40' name='answer2'>
                                </div>

                                <div class='security-question' id='question3'>
                                    Question 3: <br>
                                        <select class='question-select' id='questionSelect3' name='question3'>
                                        </select><br>

                                    Answer 3: <br>
                                        <input type='text' class='question-answer' id='questionAnswer3' size='40' name='answer3'>
                                </div>

                                <input type='submit' class='update-sec-questions-btn' value='Update Security Questions'>
                            </div>
                         </form>

                         <div class='sec-questions-image-container'>
                            <img src='/473Project/assets/images/support/parkour.jpg' class='sec-questions-image'>
                        </div>
                    </div>
                    ");
            ?>
        </div>

        <!------------------------------------------------- Bottom Panel ------------------------------------------------->
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/473Project/components/nav-bottom.php"; ?>

        <script src="/473Project/registration/account/updateSecurityQuestions.js"></script>
    </body>
</html>
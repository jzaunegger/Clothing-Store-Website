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
        <ul>
           <!-- Logo that links to the index page -->
           <li>
                <img src="/473Project/assets/images/ZAS.png" class="logo" onclick="window.location.href='/473Project/website-files/index-page/index.html'">
            </li>

            <!-- Mens Nav Selection -->
            <li class="dropdown">
                 <a href="/473Project/website-files/mens-pages/Mens.php" class="dropbtn">Men's</a> 
                    <div class="dropdown-content">
                        <a href="/473Project/website-files/mens-pages/Mens-Tops.php">Tops</a>
                        <a href="/473Project/website-files/mens-pages/Mens-Bottoms.php">Bottoms</a>
                        <a href="/473Project/website-files/mens-pages/Mens-Accessories.php">Accessories</a>
                        <a href="/473Project/website-files/mens-pages/Mens-Shoes.php">Shoes</a>
                        <a href="/473Project/website-files/mens-pages/Mens-Swimwear.php">Swimwear</a>
                    </div>
            </li>


            <!-- Womens Nav Selection -->
            <li class="dropdown">
                 <a href="/473Project/website-files/womens-pages/Womens.php" class="dropbtn">Women's</a>
                    <div class="dropdown-content">
                        <a href="/473Project/website-files/womens-pages/Womens-Tops.php">Tops</a>
                        <a href="/473Project/website-files/womens-pages/Womens-Bottoms.php">Bottoms</a>
                        <a href="/473Project/website-files/womens-pages/Womens-Accessories.php">Accessories</a>
                        <a href="/473Project/website-files/womens-pages/Womens-Shoes.php">Shoes</a>
                        <a href="/473Project/website-files/womens-pages/Womens-Swimwear.php">Swimwear</a>
                    </div>
            </li>

            <!-- Unisex Nav Selection -->
            <li class="dropdown">
                 <a href="/473Project/website-files/unisex-pages/Unisex.php" class="dropbtn">Unisex</a>
                    <div class="dropdown-content">
                        <a href="/473Project/website-files/unisex-pages/Unisex-Tops.php">Tops</a>
                        <a href="/473Project/website-files/unisex-pages/Unisex-Bottoms.php">Bottoms</a>
                        <a href="/473Project/website-files/unisex-pages/Unisex-Accessories.php">Accessories</a>
                        <a href="/473Project/website-files/unisex-pages/Unisex-Shoes.php">Shoes</a>
                        <a href="/473Project/website-files/unisex-pages/Unisex-Swimwear.php">Swimwear</a>
                    </div>
            </li>

            <!-- Cart Button -->
            <li id="cartButton"> <a href="#"> <i class="fas fa-shopping-cart"></i> </a> </li>
            
            <!-- Check if user is logged in -->
            <?php
                session_start();

                if (isset($_SESSION['loggedIn'])) {
                    $loginStatus = $_SESSION["loggedIn"];

                    if($loginStatus == 1){
                        echo("<li id='accountButton'> <a href='/473Project/registration/account/account.php' class='active'> <i class='fas fa-user'></i> </a> </li>");
                    }
                }
                else{
                    echo("<li id='loginButton'> <a href='/473Project/registration/login/login.html'>Login / Sign Up</a> </li>");
                }
            ?>

            <!-- Search the website for something -->
            <li id="searchContainer"> 
                <form action="search.php" method="POST">
                    <input type="text" placeholder="Search.." size="30" id="searchBar">
                    <button type="submit" id="searchIcon"> <i class="fa fa-search"></i> </button>
                </form>
             </li>
        </ul>

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
                          
                          <img src='/473Project/assets/images/not-today.jpg' class='meme'>  
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

            <h1 class="Page-Title">Security Questions Submission</h1>
            <hr> <br>

            <?php
                $userID = $_SESSION['userID'];
                $status = " ";

                // Check if questions are set 
                if(isset($_POST['question1'])){
                    $question1 = $_POST['question1'];
                }   
                else{
                    $question1 = "None";
                }

                if(isset($_POST['question2'])){
                    $question2 = $_POST['question2'];
                }   
                else{
                    $question2 = "None";
                }

                if(isset($_POST['question3'])){
                    $question3 = $_POST['question3'];
                }   
                else{
                    $question3 = "None";
                }

                // Check if answers are set
                if($_POST['answer1'] != ""){
                    $answer1 = $_POST['answer1'];
                }
                else{
                    $answer1 = "None";
                }

                if($_POST['answer2'] != ""){
                    $answer2 = $_POST['answer2'];
                }
                else{
                    $answer2 = "None";
                }

                if($_POST['answer3'] != ""){
                    $answer3 = $_POST['answer3'];
                }
                else{
                    $answer3 = "None";
                }

                $date = date("Y/m/d");
                $time = date("h:i:s");

                // Submit data to DB
                // Include Connection File and Open a connection.
                $connectionFile = $_SERVER['DOCUMENT_ROOT'] . "/473Project/assets/other/MySQL_ConnectionFile.php";
                include $connectionFile;
                $connection = OpenConnection();

                // If connection fails throw error.
                if(!$connection){
                    echo "Connection failed: " . mysqli_connect_error();
                }

                $checkQuestions = "SELECT questionsSet, question1 FROM usersecquestions WHERE userID='$userID'";
                $response = $connection->query($checkQuestions);

                if($response->num_rows > 0){
                    while($response2 = $response->fetch_assoc()){
                        $isSet= $response2['questionsSet'];
            
                        if($isSet == 0){
                            $status = "new";
                        }

                        if($isSet == 1){
                            $status = "update";
                        }
     
                    }
                }
                

                if($status == "new"){
                    $sql2 = "UPDATE usersecquestions SET question1='$question1', question2='$question2', question3='$question3', 
                            answer1='$answer1', answer2='$answer2', answer3='$answer3', 
                            dateAdded='$date', timeAdded='$time', dateLastEdited='$date', timeLastEdited='$time', questionsSet='1'
                            WHERE userID='$userID'";
                    $data2 = $connection->query($sql2);

                    if($connection -> query($sql2) === FALSE){
                        echo "Error: " . $sql2 . "<br>" . $connection->error;
                    } 
                    else{
                        echo("Questions successfully created.");
                    }
                }

                if($status == "update"){   
                    $sql3 = "UPDATE usersecquestions SET question1='$question1',  question2='$question2', question3='$question3', 
                            answer1='$answer1', answer2='$answer2', answer3='$answer3', dateLastEdited='$date', timeLastEdited='$time'
                            WHERE userID='$userID'";

                    $data3 = $connection->query($sql3);

                    if($connection -> query($sql3) === FALSE){
                            echo "Error: " . $sql3 . "<br>" . $connection->error;
                    } 
                    else{
                        echo("Questions successfully updated.");
                    }

                }

                //Close the connection.
                CloseConnection($connection);

                echo("
                    <div class='sec-questions-post-box'>
                       <br><br>

                        Question 1: " . $question1 . " <br><br>
                        Answer 1: " . $answer1 . " <br><br><br>

                        Question 2: " . $question2 . " <br><br>
                        Answer 2: " .$answer2 . " <br><br><br>

                        Question 3: " . $question3 . " <br><br>
                        Answer 3: " . $answer3 . " <br><br><br>

                        <div class='return-to-profile-btn'>
                            <input type='button' value='Return to Profile' onclick='returnToProfile();S'>
                        </div>
                    </div>
                ");
            ?>
        </div>

        <!------------------------------------------------- Bottom Panel ------------------------------------------------->
        <div class="bottom-panel">
            <a href="/473Project/support-pages/About.php" >About Us</a>
            <a href="/473Project/support-pages/Careers.php">Careers</a>
            <a href="/473Project/support-pages/FAQ.php">FAQ</a>
            <a href="/473Project/support-pages/CustomerSupport.php">Customer Support</a>
        </div>

        <script src="/473Project/registration/account/updateSecurityQuestions.js"></script>
    </body>
</html>
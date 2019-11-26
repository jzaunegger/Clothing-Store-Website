<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Admin Page</title>
        
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

            <h1 class="Page-Title">Administrator Page</h1>

            <div class="Panel">
                <div class="col1">
                    <h2>User Functions</h2>
                    <button class="admin-button" id="addUser" onclick="addUser();">Add User</button><br>
                    <button class="admin-button" id="editUser" onclick="editUser();">Edit User</button><br>
                    <button class="admin-button" id="removeUser">Remove User</button><br>

                    <h2>Product Functions</h2>
                    <button class="admin-button" id="addProduct">Add Product</button><br>
                    <button class="admin-button" id="editProduct">Edit Product</button><br>
                    <button class="admin-button" id="removeProduct">Remove Product</button><br>
                
                    <h2>System Utilities</h2>
                    <button class="admin-button" id="showImageFolder">View Image Folder Contents</button><br>
                </div>

                <div class="col2">
                    <img src="/473Project/assets/images/support/vancouver.jpg">
                </div>
            </div>
            
        </div>    

        <!------------------------------------------------- Bottom Panel ------------------------------------------------->
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/473Project/components/nav-bottom.php"; ?>

        <script src="/473Project/admin/admin.js"></script>
    </body>
</html>
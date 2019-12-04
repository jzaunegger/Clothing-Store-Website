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
            <h1 class="Page-Title">Edit User</h1>

            <form action="editUserData.php" method="POST">
                <table>
                    <tr>
                        <th></th>
                        <th>User Id</th>
                        <th>Username</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Phone Number</th>
                        <th>Admin Status</th>
                        <th>Date Added</th>
                        <th>Time Added</th>
                    </tr>

                    <?php
                        // Add connection file and check if connection exists
                        $connectionFile = $_SERVER['DOCUMENT_ROOT'] . "/473Project/assets/other/MySQL_ConnectionFile.php";
                        include $connectionFile;
                        $connection = OpenConnection();

                        if(!$connection){
                            echo "Connection failed: " . mysqli_connect_error();
                        }

                        $SQL = "SELECT userID, username, firstName, lastName, email, phoneNumber, dateAdded, timeAdded, isAdmin FROM users";
                        $SQL_Data = $connection->query($SQL);

                        if($SQL_Data->num_rows > 0){
                            while($data = $SQL_Data->fetch_assoc()){
                                print("<tr>");
                                print("<td> <input type='radio' name='editUsers' value=" . $data['userID'] . "> </td>");
                                print("<td>". $data['userID']. "</td>");
                                print("<td>". $data['username']. "</td>");
                                print("<td>". $data['firstName']. "</td>");
                                print("<td>". $data['lastName']. "</td>");
                                print("<td>". $data['email']. "</td>");
                                print("<td>". $data['phoneNumber']. "</td>");
                                print("<td>". $data['isAdmin']. "</td>");
                                print("<td>". $data['dateAdded']. "</td>");
                                print("<td>". $data['timeAdded']. "</td>");
                                print("</tr>");
                            }
                        }
                    ?>
                </table>   
                <br>
                <input type="button" class="admin-button" value="Cancel" onclick="returnToAdmin()">
                <input type="submit" class="admin-button" value="Edit User" style="float: right;">
            </form>
        </div>    

        <!------------------------------------------------- Bottom Panel ------------------------------------------------->
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/473Project/components/nav-bottom.php"; ?>

        <script src="/473Project/admin/admin.js"></script>
    </body>
</html>
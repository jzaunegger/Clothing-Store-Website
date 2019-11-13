<?php
    // Retrieve Product Id from updateSecurityQuestions.js
    session_start();
    $userID = $_SESSION['userID'];
    $secQuestions =  new \stdClass();

    // Include Connection File and Open a connection.
    $connectionFile = $_SERVER['DOCUMENT_ROOT'] . "/473Project/assets/other/MySQL_ConnectionFile.php";
    include $connectionFile;
    $connection = OpenConnection();

    // If connection fails throw error.
    if(!$connection){
        echo "Connection failed: " . mysqli_connect_error();
    }

    // Create SQL Query, and retrieve data
    $sql = "SELECT question1, question2, question3, answer1, answer2, answer3 FROM usersecquestions WHERE userID = '$userID'";
    $data = $connection->query($sql);


    //Parse Data
    if($data->num_rows > 0){
        while($data2 = $data->fetch_assoc()){
            $secQuestions->question1 = $data2['question1'];
            $secQuestions->question2 = $data2['question2'];
            $secQuestions->question3 = $data2['question3'];
            $secQuestions->answer1 = $data2['answer1'];
            $secQuestions->answer2 = $data2['answer2'];
            $secQuestions->answer3 = $data2['answer3'];
        }
    }
    else{
        // Else, set object fields to empty
        $secQuestions->question1 = "none";
        $secQuestions->question2 = "none";
        $secQuestions->question3 = "none";
        $secQuestions->answer1 = "none";
        $secQuestions->answer2 = "none";
        $secQuestions->answer3 = "none";
    }

    //Close the connection.
    CloseConnection($connection);

    // Encode JSON Data and echo so it can be accessed by JS
    $JSON = json_encode($secQuestions);
    echo $JSON;

?>
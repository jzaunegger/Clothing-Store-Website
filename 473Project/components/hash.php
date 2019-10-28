<?php 
    $pass = $_POST["pass"];
    $pass2 = $_POST["pass2"];

    $hash1 = password_hash($pass, PASSWORD_DEFAULT);
    $hash2 = password_hash($pass2, PASSWORD_DEFAULT);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Password Hashing Test</title>
    </head>

    <body>
        <?=$pass?>
        <br>
        <?=$hash1?>
        <br>
        <?=$hash2?>
    </body>
</html>
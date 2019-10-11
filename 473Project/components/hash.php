<?php 
    $pass = $_POST["pass"];

    $hash1 = password_hash($pass, PASSWORD_DEFAULT);
    $hash2 = password_hash($pass, PASSWORD_BCRYPT);
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
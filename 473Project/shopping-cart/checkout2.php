<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Shopping Cart</title>
        
        <link rel="stylesheet" type="text/css" href="/473Project/assets/CSS/nav.css">
        <link rel="stylesheet" type="text/css" href="/473Project/assets/CSS/checkout.css">
        <script src="https://kit.fontawesome.com/767c462c99.js"></script>
    </head>

    <body>
        <!----------------------------------- Nav Bar ----------------------------------->
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/473Project/components/navigation.php"; ?>

        <!------------------------------------------------- Page Content ------------------------------------------------->
        <div class="Page-Content">
            <h1 class="Page-Title">Shopping Cart</h1>
            <hr> <br>

            <?php
                print("<h2> Welcome ". $_SESSION['username'] .", we need some information to process your order.</h2>");
            ?>

            Cardholders Name: <br>
            <input type="text" class="checkout-element" name="cardholder" placeholder="Cardholders Name" size="50">
            <br><br>
            
            Card Number:<br>
            <input type="text" class="checkout-element" name="cardNum" placeholder="************1234" size="16">
            <br><br>
            
            Expiration Date:<br>
            <input type="text" class="checkout-element" name="expDate" placeholder="01/19" size="5">
            <br><br>
            
            CVV/CVC<br>
            <input type="text" class="checkout-element" name="cvc" placeholder="123" size="3">
            <br><br>
            
            <button class="nextButton checkout-button" onclick="linkToCheckout3();" style="float: right;">Submit Purchase <i class="fas fa-arrow-right"></i> </button>
            <button class="nextButton checkout-button" onclick="linkToCheckout();" style="float: left;">Previous <i class="fas fa-arrow-left"></i> </button>
            <br><br>
        </div>
        
        <!------------------------------------------------- Bottom Panel ------------------------------------------------->
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/473Project/components/nav-bottom.php"; ?>

        <script src="/473Project/shopping-cart/cart.js"></script>
    </body>
</html>
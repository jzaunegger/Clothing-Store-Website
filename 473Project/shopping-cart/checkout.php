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

            <div class="shipping-area-container">
                <div class="shipping-area left">
                    <h3>Billing Information</h3>
                    First Name <br>
                    <input type='text' class="checkout-element" name='firstName' placeholder="First Name" size="50">
                    <br><br>

                    Address <br>
                    <input type='text' class="checkout-element" name='addressLine1' placeholder="Line 1" size="50">
                    <br><br>
                    <input type='text' class="checkout-element" name='addressLine2' placeholder="Line 2" size="50">
                    <br><br>

                    City <br>
                    <input type='text' class="checkout-element" name='city' placeholder="City" size="50">
                    <br><br>

                    State and Zipcode <br>
                    <input type='text' class="checkout-element" name='state' placeholder='State' size="20">
                    <input type='text' class="checkout-element" name='zip' placeholder='Zip Code' size="20">
                    <br><br>

                    Phone Number
                    <input type='text' class="checkout-element" name='phone' placeholder="1234567890" size="10">
                    <br><br>
                </div>

                <div class="shipping-area right">
                    <h3>Shipping Information</h3>
                    First Name <br>
                    <input type='text' class="checkout-element" name='firstName' placeholder="First Name" size="50">
                    <br><br>

                    Address <br>
                    <input type='text' class="checkout-element" name='addressLine1' placeholder="Line 1" size="50">
                    <br><br>
                    <input type='text' class="checkout-element" name='addressLine2' placeholder="Line 2" size="50">
                    <br><br>

                    City <br>
                    <input type='text' class="checkout-element" name='city' placeholder="City" size="50">
                    <br><br>

                    State and Zipcode <br>
                    <input type='text' class="checkout-element" name='state' placeholder='State' size="20">
                    <input type='text' class="checkout-element" name='zip' placeholder='Zip Code' size="20">
                    <br><br>

                    Phone Number
                    <input type='text' class="checkout-element" name='phone' placeholder="1234567890" size="10">
                    <br><br>
                </div>
            </div>

            <button class="nextButton checkout-button" onclick="linkToCheckout2();">Next <i class="fas fa-arrow-right"></i> </button>
            <br><br>
        </div>
        
        <!------------------------------------------------- Bottom Panel ------------------------------------------------->
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/473Project/components/nav-bottom.php"; ?>

        <script src="/473Project/shopping-cart/cart.js"></script>
    </body>
</html>
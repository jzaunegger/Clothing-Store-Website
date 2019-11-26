<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Sample TopNav Bar</title>

        <link rel="stylesheet" type="text/css" href="/473Project/assets/CSS/nav.css">
        <link rel="stylesheet" type="text/css" href="/473Project/assets/CSS/pages.css">
        <script src="https://kit.fontawesome.com/767c462c99.js"></script>
    </head>

    <body>
        <!----------------------------------- Nav Bar ----------------------------------->
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/473Project/components/navigation.php"; ?>

        <!------------------------------------------------ Page Contents ------------------------------------------------->
        <div class="Page-Content">
            <h1 class="Page-Title">Customer Support</h1>
            <hr> <br>

            <h2>Contact Information</h2>
            <p>
                You can give our customer support line a call at (800)-111-1234. They can assist you with problems with your account, orders, or returns. 
                If you would perfer to give us an email instead you can reach us at customersupport@zasclothing.com, or fill out the form below.
            </p>
            <br>

            <div class="emailForm">
                <form>
                    <input type="email" name="returnEmail" class="emailInputItem" size="60" placeholder="Return Email Address">
                    <br><br>
                    <input type="text" name="subject" class="emailInputItem" size="60" placeholder="Subject">
                    <br><br>
                    <textarea class="emailTextArea" placeholder="Your message here...."></textarea>
                    <br><br>
                    <input type="submit" class="emailSendBTN" value="Send Email">
                    <br>
                </form>
            </div>
            <br>

            <h2>Returns</h2>
            <p>
                We get it sometimes you get something that doesn't fit right, or you just don't like the way you look in it. That's why our return policy lets you return
                something up to 90 days after recieving your stuff. As long as the clothes are not stained or torn in any way, you'll be good to go. You can start a return
                by filling out the form below, and we will send you a shipping label to attach to a package to send it back.  
            </p>

            <div class="returnForm">
                <form>
                    <input type="text" name="originalOrderNumber" class="returnInputItem" placeholder="Original Order Number">
                    <br><br>
                    <textarea class="returnTextArea" name="returnReason" placeholder="Reason for return..."></textarea>
                    <br><br>
                    <input type="submit" class="emailSendBTN" value="Submit Return">
                    <br>
                </form>
            </div>
            <br><br>
        
        </div>

        <!------------------------------------------------- Bottom Panel ------------------------------------------------->
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/473Project/components/nav-bottom.php"; ?>

    </body>
</html>
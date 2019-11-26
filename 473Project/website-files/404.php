<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Mens Tops</title>

        <link rel="stylesheet" type="text/css" href="/473Project/assets/CSS/nav.css">
        <link rel="stylesheet" type="text/css" href="/473Project/assets/CSS/pages.css">
        <script src="https://kit.fontawesome.com/767c462c99.js"></script>
    </head>

    <body>
        <!----------------------------------- Nav Bar ----------------------------------->
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/473Project/components/navigation.php"; ?>

        <!------------------------------------------------ Page Contents ------------------------------------------------->
        <div class="Page-Content">
            
            <div class="error-container">

                <img src="/473Project/assets/images/support/man-leaning.jpg">

                <h1 class="header">404</h1>
                <h1 class="header2">Page Not Found</h1>

                <p class="message">
                    We know our products are awesome, but you are trying to load something that doesn't exist. 
                    Sorry we can't load anything here for you, but perhaps we have something else thay may interest you.
                    You can check out our products using the Navigation bar at the top of the screen, or you could visit
                    our home page using the button below. 
                </p>

                <button class="HomeBTN" onclick="linkHome();">Home</button>
            </div>

        </div>

        <!------------------------------------------------- Bottom Panel ------------------------------------------------->
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/473Project/components/nav-bottom.php"; ?>

        <script src="/473Project/website-files/product-grid.js"></script>

        <script>
            function linkHome(){
                window.location.href="/473Project/website-files/index-page/index.html"
            }
        </script>
    </body>
</html>
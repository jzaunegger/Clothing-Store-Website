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
            <h1 class="Page-Title">About Us</h1>
            <hr> <br>

            <h2>Our Mission</h2>

            <p>
                Our mission is to deliver quality products at great prices while providing excellent customer service. We aim to offer
                fast, no-hassle shipping to get you the clothes you want. We strive to provide fashionable clothing to people of all sizes.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis in repellat nisi, esse expedita laborum ab necessitatibus! 
                Maiores, obcaecati in? Iure porro animi aspernatur pariatur delectus corrupti optio soluta tenetur.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis in repellat nisi, esse expedita laborum ab necessitatibus! 
                Maiores, obcaecati in? Iure porro animi aspernatur pariatur delectus corrupti optio soluta tenetur.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis in repellat nisi, esse expedita laborum ab necessitatibus! 
                Maiores, obcaecati in? Iure porro animi aspernatur pariatur delectus corrupti optio soluta tenetur.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis in repellat nisi, esse expedita laborum ab necessitatibus! 
                Maiores, obcaecati in? Iure porro animi aspernatur pariatur delectus corrupti optio soluta tenetur.
            </p>

            <br>

            <!----- Founder Boxes ----->
            <h2>Our Founders</h2>
            <div class="founder-container">
                <div class="founder">
                    <h3>Joe Schmoe</h3>
                    <img src="/473Project/assets/images/support/man1.png">
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis in repellat nisi, esse expedita laborum ab necessitatibus! 
                        Maiores, obcaecati in? Iure porro animi aspernatur pariatur delectus corrupti optio soluta tenetur.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis in repellat nisi, esse expedita laborum ab necessitatibus! 
                        Maiores, obcaecati in? Iure porro animi aspernatur pariatur delectus corrupti optio soluta tenetur.
                    </p>
                </div>

                <div class="founder">
                    <h3>Jane Smith</h3>
                    <img src="/473Project/assets/images/support/woman3.png">
                     <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis in repellat nisi, esse expedita laborum ab necessitatibus! 
                        Maiores, obcaecati in? Iure porro animi aspernatur pariatur delectus corrupti optio soluta tenetur.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis in repellat nisi, esse expedita laborum ab necessitatibus! 
                        Maiores, obcaecati in? Iure porro animi aspernatur pariatur delectus corrupti optio soluta tenetur.
                    </p>
                </div>

                <div class="founder">
                    <h3>John Doe</h3>
                    <img src="/473Project/assets/images/support/man2.png">
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis in repellat nisi, esse expedita laborum ab necessitatibus! 
                        Maiores, obcaecati in? Iure porro animi aspernatur pariatur delectus corrupti optio soluta tenetur.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis in repellat nisi, esse expedita laborum ab necessitatibus! 
                        Maiores, obcaecati in? Iure porro animi aspernatur pariatur delectus corrupti optio soluta tenetur.
                    </p>
                </div>
            </div>
            <br><br>

        </div>

        <!------------------------------------------------- Bottom Panel ------------------------------------------------->
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/473Project/components/nav-bottom.php"; ?>
    </body>
</html>
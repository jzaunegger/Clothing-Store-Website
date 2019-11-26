<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Test Folder Input</title>
        
        <link rel="stylesheet" type="text/css" href="/473Project/assets/CSS/nav.css">
        <link rel="stylesheet" type="text/css" href="/473Project/assets/CSS/pages.css">
        <script src="https://kit.fontawesome.com/767c462c99.js"></script>
    </head>

    <body>
        <!----------------------------------- Nav Bar ----------------------------------->
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/473Project/components/navigation.php"; ?>

        <!------------------------------------------------- Page Content ------------------------------------------------->
        <div class="Page-Content">
                <h1 class="Page-Title">Add Product</h1>
                <hr> <br>

                <form action="submitFolder.php" method="POST">
                    <input type="text" name="product-name" placeholder="Product Name">
                    <br><br>

                    <input type="number" name="product-price" placeholder="Product Price" min="0" step=".01" >
                    <br><br>

                    




                    <p>
                        Please ensure that the names of the images in the folders are labeled as image1, image2, image3, image4, image5, and image6.
                        This system requires the names to follow this structure in order to work properly. This system supports a maximum of 6 images
                        per product, with a minimum of 1. 
                    </p>
                    <input type="text" name="folder-path" size="75" placeholder="/473Projects/assets/images/"> <br>
                    <input type="file" name="input-folder[]" multiple directory webkitdirectory mozdirectory/><br>
                    <br>
                    <input type="submit" value="Submit">
                </form>
        </div>
        
        <!------------------------------------------------- Bottom Panel ------------------------------------------------->
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/473Project/components/nav-bottom.php"; ?>

    </body>
</html>
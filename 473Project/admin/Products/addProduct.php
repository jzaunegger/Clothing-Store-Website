<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Add Product</title>
        
        <link rel="stylesheet" type="text/css" href="/473Project/assets/CSS/nav.css">
        <link rel="stylesheet" type="text/css" href="/473Project/assets/CSS/admin.css">
        <script src="https://kit.fontawesome.com/767c462c99.js"></script>
    </head>

    <body>
        <!----------------------------------- Nav Bar ----------------------------------->
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/473Project/components/navigation.php"; ?>

        <!------------------------------------------------- Page Content ------------------------------------------------->
        <div class="Page-Content">
            <h1 class="Page-Title">Add Product</h1>

            <form action="submitFolder.php" method="POST">
                
                <div class="two-cols">
                    <div class="section-1">
                        <!--Text (Product Name) -->
                        Product Name<br>
                        <input type="text" name="product-name" placeholder="Product Name"  size="50">
                        <br><br>

                        <!--Text Area (Product Desciption) -->
                        Product Description<br>
                        <textarea rows="15" cols="50" name="ProductDesc" placeholder="Item Description..."> </textarea>
                        <br><br>
                    </div>

                    <div class="section-2">
                        <!--Number (Product Price) -->
                         Price<br>
                        <input type="number" name="product-price" placeholder="Product Price" min="0" step=".01" >
                        <br><br>

                        <!-- Radio (Product Sex) -->
                        Sex<br>
                        <input type="radio" name="Sex" value="Male"   id="sexMen"> Male<br>
                        <input type="radio" name="Sex" value="Female" id="sexWomen"> Female<br>
                        <br><br>

                        <!-- Select (Product Category) -->
                        Category <br>
                        <select name="Category" id="category">
                            <option value="Tops">Tops</option>
                            <option value="Bottoms">Bottoms</option>
                            <option value="Shoes">Shoes</option>
                            <option value="Swimwear">Swimwear</option>
                            <option value="Accessories">Accessories</option>
                        </select> 
                        <br><br>
                    </div>
                </div>

                <!-- Images (Product Images) -->
                <p>
                    Please ensure that the names of the images in the folders are labeled as image1, image2, image3, image4, image5, and image6.
                    This system requires the names to follow this structure in order to work properly. This system supports a maximum of 6 images
                    per product, with a minimum of 1. 
                </p>

                <!--Text (Image Folder Path) -->
                <input type="text" name="folder-path" size="75" id="folderPath" placeholder="/473Projects/assets/images/..."> 
                <input type="button" value="Validate" onclick="validateFolder();">
                <br><br>
                <span id="validationNotes"></span>
                <br><br>


                <!--Images (Image Files) 
                <input type="file" name="input-folder[]" multiple directory webkitdirectory mozdirectory/><br>
                <br>
                -->

                <!-- Size Quantities Table -->
                <table class="adminTable">
                    <tr>
                        <th>Sizes</th>
                        <th>Quantity</th>
                    </tr>

                    <tr>
                    </tr>

                    <!-- Use JS to auto-populate the size chart, based on the selected category. -->
                </table>
                <br>

                <!--Submit Button -->
                <button class="admin-button" id="cancel">Cancel</button>
                <input type="submit" class="admin-button2" value="Add Product">
            </form>
            <br><br>
        </div>
        
        <!------------------------------------------------- Bottom Panel ------------------------------------------------->
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/473Project/components/nav-bottom.php"; ?>

        <script src="/473Project/admin/Products/Products.js"></script>

    </body>
</html>
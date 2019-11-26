<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Product Tools</title>
        
        <link rel="stylesheet" type="text/css" href="/473Project/assets/CSS/nav.css">
        <link rel="stylesheet" type="text/css" href="/473Project/assets/CSS/admin.css">
        <script src="https://kit.fontawesome.com/767c462c99.js"></script>
    </head>

    <body>
        <!----------------------------------- Nav Bar ----------------------------------->
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/473Project/components/navigation.php"; ?>

        <!------------------------------------------------- Page Content ------------------------------------------------->
        <div class="Page-Content">
            <h1>Product Tools</h1>

            <?php
        
                // Include Connection File and Open a Connection
                $connectionFile = $_SERVER['DOCUMENT_ROOT'] . "/473Project/assets/other/MySQL_ConnectionFile.php";
                include $connectionFile;
                $connection = OpenConnection();

                // If connection fails throw error.
                if(!$connection){
                    echo "Connection failed: " . mysqli_connect_error();
                }

                // Create SQL Query
                $sql = "SELECT productID, productName, sex, category, subcategory, price, dateAdded, timeAdded FROM products";

                // Retrieve data from DB
                $data = $connection->query($sql);

                // Initalize Variables and include product class
                include $_SERVER['DOCUMENT_ROOT'] . "/473Project/admin/Products/product.php";
                $products = [];

                if($data->num_rows > 0){
                    while($data2 = $data->fetch_assoc()){

                        $current_product = new Product(
                                                        $data2['productID'], 
                                                        $data2['productName'], 
                                                        $data2['sex'], 
                                                        $data2['category'], 
                                                        $data2['subcategory'], 
                                                        $data2['price'],
                                                        $data2['dateAdded'], 
                                                        $data2['timeAdded']
                                                        );

                        array_push($products, $current_product);
                    }
                }

                $num_products = count($products);
            ?>

            <!-- Function Button -->
            <button class="admin-button" onclick="returnToAdmin();">Cancel</button>
            <button class="admin-button" id="editProduct">Edit</button>
            <button class="admin-button" id="removeProduct">Remove</button>

            <!-- Sort Box -->
                <form action="ProductTools.php" method="POST" class="ProductToolsSort">
                    <select name="SortOptions">
                        <option>Ascending ID</option>
                        <option>Descending ID</option>
                        <option>Ascending Name</option>
                        <option>Descending Name</option>
                        <option>Ascending Sex</option>
                        <option>Descending Sex</option>
                        <option>Ascending Category</option>
                        <option>Descending Category</option>
                        <option>Ascending Subcategory</option>
                        <option>Descending Subcategory</option>
                        <option>Ascending Price</option>
                        <option>Descending Price</option>
                        <option>Ascending Date</option>
                        <option>Descending Date</option>
                        <option>Ascending Time</option>
                        <option>Descending Time</option>
                    </select>

                    <button class="admin-button" type="submit">Sort</button>
                </form>

            <table>
                <tr>
                    <th>Edit</th>
                    <th>Remove</th>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Sex</th>
                    <th>Category</th>
                    <th>Subcategory</th>
                    <th>Price</th>
                    <th>Date Added</th>
                    <th>Time Added</th>
                </tr>

                <?php
                    for($i=0; $i<$num_products; $i++){
                        print("<tr>");
                            print("<td>". "<input type='radio' name='edit'>" ."</td>");
                            print("<td>". "<input type='checkbox' name='remove'>" ."</td>");
                            print("<td>". $products[$i]->id ."</td>");
                            print("<td>". $products[$i]->name ."</td>");
                            print("<td>". $products[$i]->sex ."</td>");
                            print("<td>". $products[$i]->category ."</td>");
                            print("<td>". $products[$i]->subcategory ."</td>");
                            print("<td>". $products[$i]->price ."</td>");
                            print("<td>". $products[$i]->dateAdded ."</td>");
                            print("<td>". $products[$i]->timeAdded ."</td>");
                        print("</tr>");
                    }
                ?>
            </table>
            <br><br>
        </div>
        <!------------------------------------------------- Bottom Panel ------------------------------------------------->
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/473Project/components/nav-bottom.php"; ?>

        <script src="/473Project/admin/admin.js"></script>

    </body>
</html>
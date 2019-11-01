<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin Tools</title>

        <link rel="stylesheet" href="style.css">
        <script src="particles.js"></script>
        <script src="app.js"></script>

    <body>
        <div id="particle-container">
            
            <div class="login">
                <h1>Administrator Tools</h1>

                <h2>User Tools</h2>
                <a href="/473Project/admin-files/users/add-user/AddUser.html">Add User</a> <br>
                <a href="#">Edit User</a> <br>
                <a href="#">Remove User</a> <br>

                <h2>Product Tools</h2>
                <a href="/473Project/admin-files/products/add-product/AddProduct.html">Add Product</a> <br>
                <a href="/473Project/admin-files/products/edit-product/EditProduct.php">Edit Product</a> <br>
                <a href="/473Project/admin-files/products/delete-product/DeleteProduct.php">Remove Product</a> <br><br>

                <button id="signOut" onclick="window.location.href='/473Project/registration/account/signout.php'">Sign Out</button>
                <button id="signOut" onclick="window.location.href='/473Project/registration/account/account.php'">View Account</button>
                
            </div>

        </div>

    </body>

</html>
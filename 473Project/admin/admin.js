// Event Listener for Add Product
document.getElementById("addProduct").addEventListener("click", function(){
    window.location.href="/473Project/admin/Products/add-product/addProduct.html";
});

// Event Listener for Edit Product
document.getElementById("editProduct").addEventListener("click", function(){
    window.location.href="/473Project/admin/Products/ProductTools.php";
});

// Event Listener for Remove Product
document.getElementById("removeProduct").addEventListener("click", function(){
    window.location.href="/473Project/admin/Products/delete-product/DeleteProduct.php";
});

// Return to Admin Panel
function returnToAdmin(){
    window.location.href="/473Project/admin/admin.php"; 
}

// Link to the Add User Page
function addUser(){
    window.location.href="/473Project/admin/Users/addUser.php";
}


// Link to the Edit Users Page
function editUser(){
    window.location.href="/473Project/admin/Users/editUser.php";
}

// Link to the Remove Users Page
function removeUser(){
    window.location.href="/473Project/admin/Users/removeUser.php";
}
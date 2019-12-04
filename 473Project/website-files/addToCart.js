// Retrieve Data from the popup when the Add To Cart Button is Pressed
document.getElementById("addToCart").addEventListener("click", function(){

    // Clear error box
    document.getElementById("errorBox").innerHTML = "";

    // Get productID, name, quantity, size, price from popup
    var productID = document.getElementById("itemNumber").innerHTML;
    var name = document.getElementById("popup-product-name").innerHTML;
    console.log(name);
    var quantity = document.getElementById("quantityInput").value;
    var size = document.getElementById("detailSizebox");
    size = size.options[size.selectedIndex].value;

    // Get price and strip off the $
    var price = document.getElementById("productPrice").innerHTML;
    price = price.substr(1, 6);

    //  Check if quantity is set
    if(quantity == ''){
        quantity = 0;
    }


    // Continue if quantity is greater than 0
    if(quantity > 0){
        // Strip off (Item Number: #)
        productID = productID.substr(14, 20);

        // Convert to int and remove leading 0's
        productID = parseInt(productID, 10);

        // Create HTTP request to send productID to PHP script
        var HTTP = new XMLHttpRequest();
        HTTP.onreadystatechange = function(){
            if(this.readyState == 4 && this.status == 200){

                // Check if user is logged in, 
                var response = this.responseText;
                
                // If user is not logged in
                if(response == 0){
                    document.getElementById("errorBox").innerHTML = "You need to login to add an item to your cart";
                }

                // If user is logged in
                if(response == 1){
                    document.getElementById("errorBox").innerHTML = "Product sucessfully added to the cart";
                }
            }
        }

        // Send out the productID and check if it can be added to the cart.
        HTTP.open("GET", "/473Project/website-files/addToCart.php?productID=" + productID + "&name="+ name + "&quantity=" + quantity + "&size=" + size + "&price=" + price, true);
        HTTP.send();
    }
    // If quantity = 0 then throw error
    else{
        console.log("There was no quantity selected.")
        document.getElementById("errorBox").innerHTML = "No quantity was selected";
    }
  });
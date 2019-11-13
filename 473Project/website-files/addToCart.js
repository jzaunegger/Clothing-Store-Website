// Retrieve Data from the popup when the Add To Cart Button is Pressed
document.getElementById("addToCart").addEventListener("click", function(){

    // Clear error box
    document.getElementById("errorBox").innerHTML = "";

    // Get item number, quantity, and size from popup
    var productID = document.getElementById("itemNumber").innerHTML;
    var quantity = document.getElementById("quantityInput").value;
    var size = document.getElementById("detailSizebox");
    size = size.options[size.selectedIndex].value;

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
        HTTP.open("GET", "/473Project/website-files/addToCart.php?productID=" + productID + "&quantity=" + quantity + "&size=" + size, true);
        HTTP.send();
    }
    // If quantity = 0 then throw error
    else{
        console.log("There was no quantity selected.")
        document.getElementById("errorBox").innerHTML = "No quantity was selected";
    }
  });
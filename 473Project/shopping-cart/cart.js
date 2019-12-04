function linkToHome(){
    window.location.href = "/473Project/website-files/index-page/index.html";
}

function linkToCheckout(){
    window.location.href = "/473Project/shopping-cart/checkout.php";
}

function linkToCheckout2(){
    window.location.href = "/473Project/shopping-cart/checkout2.php";
}

function linkToCheckout3(){
    window.location.href = "/473Project/shopping-cart/checkout3.php";
}

function removeFromCart(productID){
    console.log("Removing product " + productID + " from the cart");
    var xml = new XMLHttpRequest();

    xml.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            var data = this.responseText;

            console.log(data);

            if(data == 1){
                window.location.href="/473Project/shopping-cart/cart.php";
            }
            
        }
    }

    // Make XML HTTP Request
    xml.open("GET", "/473Project/shopping-cart/delcart.php?productID="+productID, true);
    xml.send();
}
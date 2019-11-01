// Request and set the Product Data. 
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
function requestProductData(productID){
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){

            // Retrieve array of names as JSON
            var response = JSON.parse(this.responseText);
            document.getElementById("popup-product-name").innerHTML = response.productName;
            document.getElementById("productDescription").innerHTML = response.productDescription;
            document.getElementById("productPrice").innerHTML = "$" + response.productPrice;
            document.getElementById("productSex").innerHTML = response.productSex;
            document.getElementById("productCategory").innerHTML = response.productCategory;
            document.getElementById("productSubcategory").innerHTML = response.productSubcategory;
        }
    }

    xhttp.open("GET", "getProductData.php?productID="+productID, true);
    xhttp.send();
}

// Request the Images 
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
function requestImageLinks(productID){
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){

            // Retrieve array of names as JSON
            var response = JSON.parse(this.responseText); 

            document.getElementById("image1").src = response.imageLink1;
            document.getElementById("image2").src = response.imageLink2;
            document.getElementById("image3").src = response.imageLink3;
            document.getElementById("image4").src = response.imageLink4;
            document.getElementById("image5").src = response.imageLink5;
            document.getElementById("image6").src = response.imageLink6;
        }
    }

    xhttp.open("GET", "getProductImages.php?productID="+productID, true);
    xhttp.send();
}

// Show the Popup
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
function showPopup(productID){
    //Show the popup
    document.getElementById("popup-container-bg").style.visibility = "visible";
    requestImageLinks(productID);
    requestProductData(productID);
}

// Close the Popup
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
function closePopup(){
    document.getElementById("popup-container-bg").style.visibility = "hidden";
}
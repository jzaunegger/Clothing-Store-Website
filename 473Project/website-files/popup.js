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

            // Format Price to USD
            const formatter = new Intl.NumberFormat('en-US', {
                style: 'currency',
                currency: 'USD',
                minimumFractionDigits: 2
              })

            // Format the Item Number
            if(productID.toString().length == 1){
                productID = "00000"+productID;
            }
            else if(productID.toString().length == 2){
                productID = "0000"+productID;
            } 
            else if(productID.toString().length == 3){
                productID = "000"+productID;
            }
            else if(productID.toString().length == 4){
                productID = "00"+productID;
            }
            else if(productID.toString().length == 5){
                productID = "0"+productID;
            }

            document.getElementById("itemNumber").innerHTML = "Item Number: #" + productID;



            var formattedPrice = formatter.format(response.productPrice);
            document.getElementById("productPrice").innerHTML = formattedPrice;

            document.getElementById("productSex").innerHTML = response.productSex;
            document.getElementById("productCategory").innerHTML = response.productCategory + " (" + response.productSubcategory+")";
        
            updatePopupSizebox(productID, response.productCategory);
        }
    }

    xhttp.open("GET", "getProductData.php?productID="+productID, true);
    xhttp.send();
}

function updatePopupSizebox(productID, category){
    // Make HTTP Request to load sizes into the popup
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){

            // Retrieve array of names as JSON
            var response = JSON.parse(this.responseText); 
            lowercaseCategory = category.toLowerCase();

            // Get Size names
            var sizeNames = response.categories[lowercaseCategory].sizeNames;
            var numSizes = sizeNames.length;

            for(var j=0; j< numSizes; j++){

                var currentSizeOption = document.createElement("option");
                currentSizeOption.setAttribute("class", "popup-size-options");
                currentSizeOption.setAttribute("id", "popupSize" + j);

                // Append Size Option to the size box
                document.getElementById("detailSizebox").appendChild(currentSizeOption);

                // Set value of the select option
                document.getElementById("popupSize"+j).innerHTML = sizeNames[j];

            }
        }
    }

    xhttp.open("GET", "/473Project/assets/other/products.json", true);
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
    document.getElementById("errorBox").innnerHTML = "";
    document.getElementById("quantityInput").value = null;
    document.getElementById("popup-container-bg").style.visibility = "hidden";  
}
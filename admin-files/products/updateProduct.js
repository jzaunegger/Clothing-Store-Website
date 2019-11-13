// Clear the subcategory options
///////////////////////////////////////////////////////////////////////////////////////////////////////////////
function clearSelect(){
    var selectBox = document.getElementById("subCategory");
    selectBox.options.length = 0;
}

// Check the Category and Set the Sub Category Options
///////////////////////////////////////////////////////////////////////////////////////////////////////////////
function updateSubCategory(data){
    // Get category
    var cat = document.getElementById("category").value;

    // Check if tops
    if(cat == "Tops"){
        clearSelect();
        var catNames = data.categories.tops.subcategoryNames;
        var catValues = data.categories.tops.subcategoryNames;

        for(var i=0; i<catNames.length; i++){
            var selectBox = document.getElementById("subCategory");
            selectBox.options[selectBox.options.length]=new Option(catNames[i] , catValues[i], false, false);
        }

    }

    // Check if Bottoms
    if(cat == "Bottoms"){
        clearSelect();
        var catNames = data.categories.bottoms.subcategoryNames;
        var catValues = data.categories.bottoms.subcategoryNames;

        for(var i=0; i<catNames.length; i++){
            var selectBox = document.getElementById("subCategory");
            selectBox.options[selectBox.options.length]=new Option(catNames[i] , catValues[i], false, false);
        }
    }

    // Check if shoes
    if(cat == "Shoes"){
        clearSelect();
        var catNames = data.categories.shoes.subcategoryNames;
        var catValues = data.categories.shoes.subcategoryNames;

        for(var i=0; i<catNames.length; i++){
            var selectBox = document.getElementById("subCategory");
            selectBox.options[selectBox.options.length]=new Option(catNames[i] , catValues[i], false, false);
        }

    }

    // Check if accessories
    if(cat == "Accessories"){
        clearSelect();
        var catNames = data.categories.accessories.subcategoryNames;
        var catValues = data.categories.accessories.subcategoryNames;

        for(var i=0; i<catNames.length; i++){
            var selectBox = document.getElementById("subCategory");
            selectBox.options[selectBox.options.length]=new Option(catNames[i] , catValues[i], false, false);
        }
    }


    // Check if swimwear
    if(cat == "Swimwear"){
        clearSelect();
        var catNames = data.categories.swimwear.subcategoryNames;
        var catValues = data.categories.swimwear.subcategoryNames;

        for(var i=0; i<catNames.length; i++){
            var selectBox = document.getElementById("subCategory");
            selectBox.options[selectBox.options.length]=new Option(catNames[i] , catValues[i], false, false);
        }
    }
}

// Create a list item
///////////////////////////////////////////////////////////////////////////////////////////////////////////////
function addItem(labelValue, i){
    var list = document.getElementById("sizeList");

    // Create Input Label
    var newItem = document.createElement("li");
    newItem.setAttribute("class", "sizeItem");
    newItem.innerHTML = labelValue;

    // Create Input field
    var inputItem = document.createElement("input");
    inputItem.type = "number";
    inputItem.setAttribute("class", "sizeInput");
    inputItem.setAttribute("id", "size-"+ i);
    inputItem.setAttribute("placeholder", "0");
    inputItem.setAttribute("min", "0");
    inputItem.setAttribute("step", "1");

    var lineBreak = document.createElement("br");


    // Display item on screen
    list.appendChild(newItem);
    list.appendChild(inputItem);
    list.appendChild(lineBreak);
}

// Remove list items
///////////////////////////////////////////////////////////////////////////////////////////////////////////////
function removeItems(){
    document.getElementById("sizeList").innerHTML = "";
}

// Update the Size Chart
///////////////////////////////////////////////////////////////////////////////////////////////////////////////
function updateSizes(data){
    var cat = document.getElementById("category").value;

    // Check if tops
    if(cat == "Tops"){
        var sizeNames = data.categories.tops.sizeNames;
        var sizeValues = data.categories.tops.sizeValues;

        for(var i=0; i<sizeNames.length; i++){
            addItem(sizeValues[i], i);
        }
    }

    // Check if Bottoms
    if(cat == "Bottoms"){
        var sizeNames = data.categories.bottoms.sizeNames;
        var sizeValues = data.categories.bottoms.sizeValues;

        for(var i=0; i<sizeNames.length; i++){
            addItem(sizeValues[i], i);
        }
    }

    // Check if shoes
    if(cat == "Shoes"){
        var sizeNames = data.categories.shoes.sizeNames;
        var sizeValues = data.categories.shoes.sizeValues;

        for(var i=0; i<sizeNames.length; i++){
            addItem(sizeValues[i], i);
        }
    }

    // Check if accessories
    if(cat == "Accessories"){  
        var sizeNames = data.categories.accessories.sizeNames;
        var sizeValues = data.categories.accessories.sizeValues;

        for(var i=0; i<sizeNames.length; i++){
            addItem(sizeValues[i], i);
        } 
    }

    // Check if swimwear
    if(cat == "Swimwear"){  
        var sizeNames = data.categories.swimwear.sizeNames;
        var sizeValues = data.categories.swimwear.sizeValues;

        for(var i=0; i<sizeNames.length; i++){
            addItem(sizeValues[i], i);
        }
    }
}

// Check if form is all filled out
///////////////////////////////////////////////////////////////////////////////////////////////////////////////
function validateForm(data){

    // Check name
    if(document.getElementById("productName").value == ""){
        console.log("the name is undefined.")
    }

    // Check description
    if(document.getElementById("productDescription").value == ""){
        console.log("the description is undefined.")
    }

    // Check price
    if(document.getElementById("price").value == ""){
        console.log("the price is undefined.")
    }

    // Check Sex
    var sexM = document.getElementById("sexMen").checked;
    var sexW = document.getElementById("sexWomen").checked;
    var sexU = document.getElementById("sexUnisex").checked;

    if(sexM == false && sexW== false && sexU == false){
        console.log("the sex is undefined.");
    }

    // Retrieve Category
    if(document.getElementById("category").value == ""){
        console.log("the category is undefined.");
    }

    // Retrieve Sub-Category
    if(document.getElementById("subCategory").value == ""){
        console.log("the subcategory is undefined.");
    }

    // Check Size Charts
    var category = document.getElementById("category").value;

    if(category == "Tops"){
        var Sizes = data.categories.tops.sizeNames;

        for(var i = 0; i < Sizes.length; i++){
            var id="size-"+ i;

            if(document.getElementById(id).value == ""){
                console.log(id + " is not filled out." )
            }
        }
    }

    if(category == "Bottoms"){
        var Sizes = data.categories.bottoms.sizeNames;

        for(var i = 0; i < Sizes.length; i++){
            var id="size-"+ i;

            if(document.getElementById(id).value == ""){
                console.log(id + " is not filled out." )
            }
        }
    }

    if(category == "Shoes"){
        var Sizes = data.categories.shoes.sizeNames;

        for(var i = 0; i < Sizes.length; i++){
            var id="size-"+ i;

            if(document.getElementById(id).value == ""){
                console.log(id + " is not filled out." )
            }
        }
    }

    if(category == "Accessories"){
        var Sizes = data.categories.accessories.sizeNames;

        for(var i = 0; i < Sizes.length; i++){
            var id="size-"+ i;

            if(document.getElementById(id).value == ""){
                console.log(id + " is not filled out." )
            }
        }
    }

    if(category == "swimwear"){
        var Sizes = data.categories.swimwear.sizeNames;

        for(var i = 0; i < Sizes.length; i++){
            var id="size-"+ i;

            if(document.getElementById(id).value == ""){
                console.log(id + " is not filled out." )
            }
        }
    }

    // Check Image Paths
}

// Retrieve the JSON file and update the page
////////////////////////////////////////////////////////////////////////////////////////////////////////////////
function loadJSON(){
    // Load prodcuts.JSON
    var xml = new XMLHttpRequest();
    xml.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            var data = JSON.parse(this.responseText);
            updateSubCategory(data);
            removeItems();
            updateSizes(data);
            validateForm(data);
        }
    }

    // Make XML HTTP Request
    xml.open("GET", "/473Project/assets/other/products.json", true);
    xml.send();
}

// Inject the product data into the update form
///////////////////////////////////////////////////////////////////////////////////////////////////////////////
function loadEditData(productID){
    var xhttp = new XMLHttpRequest();

    xhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            var productData = JSON.parse(this.responseText);

            document.getElementById("productIndex").value = productID;

            // Set the name
            document.getElementById("productName").value = productData.name;
            document.getElementById("productNameHeader").innerText = productData.name;

            // Set the description
            document.getElementById("productDescription").value = productData.desc;

            // Set the price
            document.getElementById("price").value = productData.price;

            // Check the correct sex
                if(productData.sex == "Male"){
                    document.getElementById("sexMen").checked = true;
                }

                if(productData.sex == "Female"){
                    document.getElementById("sexWomen").checked = true;
                }

                if(productData.sex == "Unisex"){
                    document.getElementById("sexUnisex").checked = true;
                }

            // Select the correct category
            document.getElementById("category").value = productData.cat;
            
            loadJSON();

            // Select the correct subcategory
            document.getElementById("subCategory").value = productData.subcat;
        }
    }

    xhttp.open("GET", "loadProductData.php?q="+productID, true);
    xhttp.send();
}

// Onload function call
///////////////////////////////////////////////////////////////////////////////////////////////////////////////
loadJSON();
var productID = document.getElementById("productID").innerHTML;
loadEditData(productID);
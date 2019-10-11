// Load the subcategories and sizes into the filter box.
function loadFilterData(data){
    var subCategories = (data.categories.tops.subcategoryNames);
    var subCatList = document.getElementById("subcategories");

    for(var i=0; i<subCategories.length; i++){

        // Create list item checkbox
        var newCheck = document.createElement("input");
        newCheck.type="checkbox";
        newCheck.setAttribute("class", "subCatCheck");
        newCheck.setAttribute("name", "subcategory-box");


        // Create list item label
        var newItem = document.createElement("li");
        newItem.setAttribute("class", "subCatLabel");
        newItem.innerHTML = subCategories[i];

        var lineBreak = document.createElement("br");

        subCatList.append(newCheck);
        subCatList.append(newItem);
        subCatList.append(lineBreak);

    }
}

// Load the size chart into the filter box
function loadSizes(data){
    var sizes = data.categories.tops.sizeValues;
    var subCatSizeList = document.getElementById("subcategory-sizes")

    // Iterate through sizes
    for(var i=0; i<sizes.length; i++){
        // Create list item checkbox
        var newCheck = document.createElement("input");
        newCheck.type="checkbox";
        newCheck.setAttribute("class", "sizeCheck");
        newCheck.setAttribute("name", "size-box");


        // Create list item label
        var newItem = document.createElement("li");
        newItem.setAttribute("class", "sizeLabel");
        newItem.innerHTML = sizes[i];

        var lineBreak = document.createElement("br");

        subCatSizeList.append(newCheck);
        subCatSizeList.append(newItem);
        subCatSizeList.append(lineBreak);
    }
}

// Retrieve product data from JSON file.
function loadJSON(){
    var xml = new XMLHttpRequest();
    xml.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            var data = JSON.parse(this.responseText);

            loadFilterData(data);
            loadSizes(data);
        }
    }

    xml.open("GET", "/473Project/assets/other/products.json", true);
    xml.send();
}

var jsonData = loadJSON();
/*
// Load the subcategories and sizes into the filter box.
function loadFilterData(data){
    var subCategories = (data.categories.tops.subcategoryNames);
    var subCatList = document.getElementById("subcategories");

    for(var i=0; i<subCategories.length; i++){

        // Create list item checkbox
        var newCheck = document.createElement("input");
        newCheck.type="checkbox";
        newCheck.setAttribute("class", "subCatCheck");
        newCheck.setAttribute("name", "subcategory-box[]");
        newCheck.setAttribute("value", subCategories[i]);


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

// Retrieve product data from JSON file.
function loadJSON(){
    var xml = new XMLHttpRequest();
    xml.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            var data = JSON.parse(this.responseText);

            loadFilterData(data);
        }
    }

    xml.open("GET", "/473Project/assets/other/products.json", true);
    xml.send();
}

var jsonData = loadJSON();

*/
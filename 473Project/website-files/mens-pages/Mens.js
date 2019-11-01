// Initalize Variables and show first image
var slideIndexNA = 1;
var slideIndexTP = 1;
var slideIndexBO = 1;
var slideIndexAC = 1;
var slideIndexSH = 1;
var slideIndexSW = 1;
showSlidesNA(slideIndexNA);
showSlidesTP(slideIndexTP);
showSlidesBO(slideIndexBO);
showSlidesAC(slideIndexAC);
showSlidesSH(slideIndexSH);
showSlidesSW(slideIndexSW);

// Javascript for New Arrivals Slideshow
////////////////////////////////////////////////////////////////////////////////////

// Iterate through the images
////////////////////////////////////////////
function plusSlidesNA(n) {
    showSlidesNA(slideIndexNA += n);
}

// Show the current Image
////////////////////////////////////////////
function showSlidesNA(n) {
    var i;
    var slides = document.getElementsByClassName("new-arrivals");

    if (n > slides.length){
    slideIndexNA = 1
    }    

    if (n < 1){
        slideIndexNA = slides.length
    }

    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";  
    }

    slides[slideIndexNA-1].style.display = "block";  
}

// Javascript for Mens Tops Slideshow
////////////////////////////////////////////////////////////////////////////////////

// Iterate through the images
////////////////////////////////////////////
function plusSlidesTP(n) {
    showSlidesTP(slideIndexTP += n);
}

// Show the current Image
////////////////////////////////////////////
function showSlidesTP(n) {
    var i;
    var slides = document.getElementsByClassName("tops");

    if (n > slides.length){
    slideIndexTP = 1
    }    

    if (n < 1){
        slideIndexTP = slides.length
    }

    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";  
    }

    slides[slideIndexTP-1].style.display = "block";  
}

// Javascript for Mens Bottoms Slideshow
////////////////////////////////////////////////////////////////////////////////////

// Iterate through the images
////////////////////////////////////////////
function plusSlidesBO(n) {
    showSlidesBO(slideIndexBO += n);
}

// Show the current Image
////////////////////////////////////////////
function showSlidesBO(n) {
    var i;
    var slides = document.getElementsByClassName("bottoms");

    if (n > slides.length){
    slideIndexBO = 1
    }    

    if (n < 1){
        slideIndexBO = slides.length
    }

    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";  
    }

    slides[slideIndexBO-1].style.display = "block";  
}

// Javascript for Mens Accessories Slideshow
////////////////////////////////////////////////////////////////////////////////////

// Iterate through the images
////////////////////////////////////////////
function plusSlidesAC(n) {
    showSlidesAC(slideIndexAC += n);
}

// Show the current Image
////////////////////////////////////////////
function showSlidesAC(n) {
    var i;
    var slides = document.getElementsByClassName("accessories");

    if (n > slides.length){
    slideIndexAC = 1
    }    

    if (n < 1){
        slideIndexAC = slides.length
    }

    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";  
    }

    slides[slideIndexAC-1].style.display = "block";  
}

// Javascript for Mens Shoes Slideshow
////////////////////////////////////////////////////////////////////////////////////

// Iterate through the images
////////////////////////////////////////////
function plusSlidesSH(n) {
    showSlidesSH(slideIndexSH += n);
}

// Show the current Image
////////////////////////////////////////////
function showSlidesSH(n) {
    var i;
    var slides = document.getElementsByClassName("shoes");

    if (n > slides.length){
    slideIndexSH = 1
    }    

    if (n < 1){
        slideIndexSH= slides.length
    }

    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";  
    }

    slides[slideIndexSH-1].style.display = "block";  
}

// Javascript for Mens Accessories Slideshow
////////////////////////////////////////////////////////////////////////////////////

// Iterate through the images
////////////////////////////////////////////
function plusSlidesSW(n) {
    showSlidesSW(slideIndexSW += n);
}

// Show the current Image
////////////////////////////////////////////
function showSlidesSW(n) {
    var i;
    var slides = document.getElementsByClassName("swimwear");

    if (n > slides.length){
    slideIndexSW = 1
    }    

    if (n < 1){
        slideIndexSW = slides.length
    }

    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";  
    }

    slides[slideIndexSW-1].style.display = "block";  
}
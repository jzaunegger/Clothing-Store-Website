// Initalize Variables and show first image
var slideIndexNA = 1;
showSlidesNA(slideIndexNA);

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
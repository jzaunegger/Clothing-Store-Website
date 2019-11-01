// Initalize Variables and show first image
console.log("JS is loading.");
var slideIndex = 1;
console.log(slideIndex);
showSlides(slideIndex);

// Change the image to the next slide
///////////////////////////////////////////////////////////////////////////////
function plusSlides(n) {
    showSlides(slideIndex += n);
}

// Show the current image from dot clicks
///////////////////////////////////////////////////////////////////////////////
function currentSlide(n) {
    showSlides(slideIndex = n);
}

function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("image-slide");
    var dots = document.getElementsByClassName("dot");

    console.log(slides);
    console.log(dots);

    if (n > slides.length){
    slideIndex = 1
    }    

    if (n < 1){
        slideIndex = slides.length
    }

    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";  
    }
 
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }

    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
}

// Close the overlay
function closeOverlay(){
    console.log("The overlay has been closed.")
}
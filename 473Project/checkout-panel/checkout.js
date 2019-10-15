$(document).ready(function () {

  // Radio box border
  $('.method').on('click', function () {
    $('.method').removeClass('blue-border');
    $(this).addClass('blue-border');
  });

  $('.paypal').on('click', function () {
    var input = $('.input-fields input');
  });

  // Validation

  // Multi-Step Form
  var currentTab = 0; // Current tab is set to be the first tab (0)
  showTab(currentTab); // Display the crurrent tab

  $('.back-btn').on('click', function () {
    n = -1;
    // This function will figure out which tab to display
    var x = document.getElementsByClassName("tab");
    // Hide the current tab:
    x[currentTab].style.display = "none";
    // Increase or decrease the current tab by 1:
    currentTab = currentTab + n;
    // if you have reached the end of the form...
    if (currentTab >= x.length) {
      // ... the form gets submitted:
      //document.getElementById("regForm").submit();
      return false;
    }
    // Otherwise, display the correct tab:
    showTab(currentTab);
  });

  $('.next-btn').on('click', function () {
    n = 1;
    // This function will figure out which tab to display
    var x = document.getElementsByClassName("tab");
    // Exit the function if any field in the current tab is invalid:
    if (n == 1 && !validateForm()) return false;
    // Hide the current tab:
    x[currentTab].style.display = "none";
    // Increase or decrease the current tab by 1:
    currentTab = currentTab + n;
    // if you have reached the end of the form... :
    if (currentTab == 1) {
      //...the form gets submitted:
      document.getElementById("phone").value.replace(/-/g, "");
      //document.getElementById("regForm").submit();
      //return false;
    }
    // Otherwise, display the correct tab:
    showTab(currentTab);
});

function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");

  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 2)) {
    document.getElementById("nextBtn").innerHTML = "Complete Purchase";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += "warning";
      // and set the current valid status to false
      valid = false;
    }
  }

  //Check Email
  if(currentTab == 0){
    email = document.getElementById("email").value;
    var atIndex = email.indexOf('@');
    var dotIndex = email.indexOf('.');

    if(atIndex == -1 || dotIndex == -1){
      valid = false;
      document.getElementById("email").className += "warning";
    }
  }
  return valid; // return the valid status
}

});

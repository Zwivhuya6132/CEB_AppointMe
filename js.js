let password = document.getElementById('password');
let toggleBtn = document.getElementById('toggleBtn');
let lowerCase = document.getElementById('lower');
let upperCase = document.getElementById('upper');
let digit = document.getElementById('number');
let specialChar = document.getElementById('special');
let minLength = document.getElementById('length');

function checkPassword(data){
    //Java Script regularexpression pattern
    const lower = new RegExp('(?=.*[a-z])');
    const upper = new RegExp('(?=.*[A-Z])');
    const number = new RegExp('(?=.*[0-9])');
    const special = new RegExp('(?=.*[!@#\$%\^&\*])');
    const length = new RegExp('(?=.{8,})');

    //Lowercase Validation check
    if (lower.test(data)){
        lowerCase.classList.add('valid');
    }else{
        lowerCase.classList.remove('valid');
    }

    //uppercase Validation check
    if (upper.test(data)){
        upperCase.classList.add('valid');
    }else{
        upperCase.classList.remove('valid');
    }

    //number Validation check
    if (number.test(data)){
        digit.classList.add('valid');
    }else{
        digit.classList.remove('valid');
    }

    //Special Character Validation check
    if (special.test(data)){
        specialChar.classList.add('valid');
    }else{
        specialChar.classList.remove('valid');
    }

    //Length Validation check
    if (length.test(data)){
        minLength.classList.add('valid');
    }else{
        minLength.classList.remove('valid');
    }
        
};

//Show Hide Password
toggleBtn.onclick = function(){
  
    if (password.type === 'password'){
      password.setAttribute('type', 'text');
      toggleBtn.classList.add('hide');
    } else{
      password.setAttribute('type', 'password');
      toggleBtn.classList.remove('hide');
    }
  };


  let cancelButtons = document.querySelectorAll('.cancel-button');
  cancelButtons.forEach(function(button) {
    button.addEventListener('click', function() {
      alert('You have successfully cancelled your application');
      var row = this.parentNode.parentNode;
      row.parentNode.removeChild(row);
    });
    
  });

  let alertButton = document.querySelector('.reject-button');
      alertButton.addEventListener('click', function() {
        alert('You did not meet the minimum requirements');
      });

var slides = document.getElementsByClassName("slide");
var currentSlideIndex = 0;

function showSlide(index) {
if (index < 0 || index >= slides.length) {
  return;
}

// Hide all slides
for (var i = 0; i < slides.length; i++) {
  slides[i].style.display = "none";
}

// Show the selected slide
slides[index].style.display = "block";
currentSlideIndex = index;
}

function nextSlide() {
let nextIndex = currentSlideIndex + 1;
if (nextIndex >= slides.length) {
  nextIndex = 0;
}
showSlide(nextIndex);
}

// Automatically advance to the next slide every 3 seconds
setInterval(nextSlide, 5000);

// Show the first slide initially
showSlide(0);
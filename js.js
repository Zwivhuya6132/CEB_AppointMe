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

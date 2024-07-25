const form = document.getElementById('form');
const fullname = document.getElementById('full_name');
const username = document.getElementById('user_name');
const birthdate = document.getElementById('birthdate');
const phone = document.getElementById('phone');
const address = document.getElementById('address');
const password = document.getElementById('password');
const password2 = document.getElementById('confirm_password');
const userImage = document.getElementById('user_image');
const email = document.getElementById('email');

flag=0;

form.addEventListener('submit', e => {
    flag=0;
    validateInputs();
    if (flag<9){e.preventDefault();}
    
});



const setError = (element, message) => {
    const inputControl = element.parentElement;
    const errorDisplay = inputControl.querySelector('.error');
    errorDisplay.innerText = message;
    inputControl.classList.add('error');
    inputControl.classList.remove('success');
}
const setSuccess = element => {
    const inputControl = element.parentElement;
    const errorDisplay = inputControl.querySelector('.error');
    errorDisplay.innerText = '';
    inputControl.classList.add('success');
    inputControl.classList.remove('error');
};
const isValidEmail = email => {
    const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}
const nameRegex = /^[A-Za-z\s]+$/;
const birthdateRegex = /^\d{4}-\d{2}-\d{2}$/;
var paswdregex = /^(?=.*[-\#\$\.\%\&\@\!\+\=\\*])(?=.*[a-zA-Z])(?=.*\d).{8,12}$/;
const validateInputs = () => {
    const usernameValue = username.value.trim();
    const fullnameValue = fullname.value.trim();
    const emailValue = email.value.trim();
    const passwordValue = password.value.trim();
    const password2Value = password2.value.trim();
    const BirthdateValue = birthdate.value.trim();
    const phonenumber = phone.value.trim();
    const Addressnumber = address.value.trim();
    const UserImageValue = userImage.value.trim();
    if(usernameValue === '') {
        setError(username, 'Username is required');
    } else {
        setSuccess(username);
        flag++;
    }
    if(fullnameValue === '') {
        setError(fullname, 'Fullname is required');
    }else if(!nameRegex.test(fullnameValue)) {
        setError(fullname, 'Provide a valid name');
    }else {
        setSuccess(fullname);
        flag++;
    }
    if(BirthdateValue === '') {
        setError(birthdate, 'Birthdate is required');
    } else if (!birthdateRegex.test(BirthdateValue)) { 
        setError(birthdate, 'Provide a valid birthdate');
    }
    else {
        setSuccess(birthdate);
        flag++;
    }
    if(phonenumber === '') {
        setError(phone, 'Phone number is required');
    } else {
        setSuccess(phone);
        flag++;
    }
    if(Addressnumber === '') {
        setError(address, 'Address number is required');
    } else {
        setSuccess(address);
        flag++;
    }
    if(UserImageValue === '') {
        setError(userImage, 'User Image is required');
    } else {
        setSuccess(userImage);
        flag++;
    }

    if(emailValue === '') {
        setError(email, 'Email is required');
    } else if (!isValidEmail(emailValue)) {
        setError(email, 'Provide a valid email address');
    } else {
        setSuccess(email);
        flag++;
    }

    if(passwordValue === '') {
        setError(password, 'Password is required');
    } else if (passwordValue.length < 8 ) {
        setError(password, 'Password must be at least 8 character.')
    }else if (!passwordValue.match(paswdregex)) { 
        setError(password, 'Password must have characters with at least 1 number literal and 1 special character.')
    }
     else {
        setSuccess(password);
        flag++;
    }

    if(password2Value === '') {
        setError(password2, 'Please confirm your password');
    } else if (password2Value !== passwordValue) {
        setError(password2, "Passwords doesn't match");
    } else {
        setSuccess(password2);
        flag++;
    }





};

function showHint(str) {
    //2023-04-19
    if (str.length == 0) 
    { 
    alert("Not valid date");
    }
    
     else { 
    var xmlhttp = new XMLHttpRequest();
    var apiLocation = "/api";
    xmlhttp.onreadystatechange = function() 
    { if (this.readyState == 4 && this.status ==200)
    
    { 
    alert(this.responseText) ;
    } 
    
    }
    
    xmlhttp.open("GET", apiLocation + "?q="+ str,true);
    xmlhttp.send(); 
 
    } 
    
    
    
    };
    
    
    
    

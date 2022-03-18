let namevalidate = document.querySelector("#name");
let email = document.querySelector('#Email');
let password = document.querySelector("#Password");
let passwordAgain = document.querySelector('#PasswordAgain');
let allInputs = document.querySelectorAll('input');
const form = document.getElementById("form");

form.addEventListener("submit", e => {
    if (!validation())
        e.preventDefault();
})

function validation() {

    let isValidate = true;
    // name
    if (namevalidate.value.trim() == '') {
        AfficherError(namevalidate, 'name can not be empty');
        isValidate = false;
    } else if (namevalidate.value.trim().length < 5 || namevalidate.value.trim().length > 15) {
        AfficherError(namevalidate, 'name must be between 5 and 15 characters');
        isValidate = false;
    } else
        valider(namevalidate);
    // email
    if (email.value.trim() == '') {
        AfficherError(email, 'email can not be empty');
        isValidate = false;
    } else if (EmailValider(email.value))
        valider(email);
    else {
        AfficherError(email, 'your email format is not valide')
        isValidate = false
    }
    // password
    if (password.value.trim() == '') {
        AfficherError(password, 'password can not be empty');
        isValidate = false;
    } else if (password.value.trim().length < 5 || password.value.trim().length > 15) {
        AfficherError(password, 'password must be between 5 and 15 characters');
        isValidate = false;
    } else
        valider(password);
    // confirmation password
    if (passwordAgain.value.trim() == '') {
        AfficherError(passwordAgain, 'confim password can not be empty');
        isValidate = false;
    } else if (passwordAgain.value !== password.value) {
        AfficherError(passwordAgain, 'your confim password is not like the password ');
        isValidate = false;
    } else
        valider(passwordAgain);
    return isValidate;
}

// affichage de message 
function AfficherError(element, errorMessage) {
    const parent = element.parentElement;
    if (parent.classList.contains('success'))
        parent.classList.remove('success');
    parent.classList.add('error');
    const para = parent.querySelector('p');
    para.innerText = errorMessage;
    para.style.visibility = 'visible';

}

// si les valeur est valid  
function valider(element) {
    const parent = element.parentElement;
    if (parent.classList.contains('error')) {
        parent.classList.remove('error');
        parent.querySelector('p').style.visibility = 'hidden';
    }
    parent.classList.add('success');
}
// expression regulier pour email
function EmailValider(email) {
    const format = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    return format.test(email);
}
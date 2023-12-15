let loginForm = document.querySelector('#login-form');
let registerForm = document.querySelector('#register-form');
let changeToRegister = document.querySelector('#change-to-register');
let changeToRegisterBtn = document.querySelector('#toggle-register-btn');
let changeToLogin = document.querySelector('#change-to-login');
let changeToLoginBtn = document.querySelector('#toggle-login-btn');


const handleChangeToRegister = () => {
    loginForm.classList.add('hidden');
    registerForm.classList.remove('hidden');
    changeToRegister.classList.add('hidden');
    changeToLogin.classList.remove('hidden');
};

const handleChangeToLogin = () => {
    registerForm.classList.add('hidden');
    loginForm.classList.remove('hidden');
    changeToLogin.classList.add('hidden');
    changeToRegister.classList.remove('hidden');
};

changeToRegisterBtn.addEventListener('click', handleChangeToRegister);
changeToLoginBtn.addEventListener('click', handleChangeToLogin);


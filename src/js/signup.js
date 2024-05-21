const eyeslash = document.getElementById('eyeslash');
const password = document.querySelector('#userpassword');
eyeslash.onclick = function(event) {
    if(!eyeslash.classList.contains('fa-eye')) {
        eyeslash.classList.add('fa-eye');
        eyeslash.classList.remove('fa-eye-slash');
        password.type = "text";
    }else {
        eyeslash.classList.add('fa-eye-slash');
        eyeslash.classList.remove('fa-eye');
        password.type = "password";
    }
    
}
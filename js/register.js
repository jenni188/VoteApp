document.forms['register'].addEventListener('submit', registerNewUser);

function registerNewUser(event){
    event.preventDefault();

    const username = document.forms['register']['username'].value;
    const password = document.forms['register']['password'].value;
    const password2 = document.forms['register']['confirmPassword'].value;


    if (username.length <= 0){
        alert('Username is required');
        return;
    }

    if (password.length <= 2){
        alert('Password minimum lenght is 6 characters');
        return;
    }

    if (password.localeCompare(password2) != 0 ){
        alert('Passwords doesnt match!!');
        return;
    }

    let ajax = new XMLHttpRequest();
    ajax.onload = function(){
        console.log(ajax.responseText);
    }

    ajax.open("POST" , "backend/registerNewUser.php", true);
    ajax.send();
}
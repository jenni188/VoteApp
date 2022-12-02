document.forms['register'].addEventListener('submit', registerNewUser);

function registerNewUser(event){
    event.preventDefault();

    const username = document.forms['register']['username'].value;
    const password = document.forms['register']['password'].value;
    const password2 = document.forms['register']['confirmPassword'].value;


    if (username.length <= 0){
        showMessage('error','Username is required');
        return;
    }

    if (password.length <= 2){
        showMessage('error','Password minimum lenght is 6 characters');
        return;
    }

    if (password.localeCompare(password2) != 0 ){
        showMessage('error','Passwords doesnt match!!');
        return;
    }

    let ajax = new XMLHttpRequest();
    ajax.onload = function(){
        const data = JSON.parse(this.responseText);
        if (data.hasOwnProperty('success')){
            window.location.href = "login.php?type=success&msg=Voit kirjautua uusilla tunnuksikka";
        } else{
            showMessage('error',data.error);
        }
    }

    ajax.open("POST" , "backend/registerNewUser.php", true);
    ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    ajax.send("username="+username+"&password="+password);
}


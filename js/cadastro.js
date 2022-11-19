const user = document.getElementById("name");
const register_button = document.getElementById("confirmbutton");

function registrar(){
    const password = document.getElementById("password");
    const confirm_password = document.getElementById("confirmPassword");
    if(confirm_password.value == password.value)
    {
        console.log("yes")
    }
    else{
        console.log("Nothing")
    }
}

function checkPass()
{
    //Store the password field objects into variables ...
    var pass1 = document.getElementById('newpassword');
    var pass2 = document.getElementById('confirmpassword');
    //Store the Confimation Message Object ...
    var message = document.getElementById('confirmMessage');
    //Set the colors we will be using ...
    var goodColor = "#5cb85c";
    var badColor = "#d9534f";
    //Compare the values in the password field
    //and the confirmation field
    if(pass1.value == pass2.value){

        confirmpassword.style.borderColor = goodColor;
        message.style.color = goodColor;
        message.innerHTML = "Las contraseñas coinciden!"
    }else{
        //The passwords do not match.
        //Set the color to the bad color and
        //notify the user.
        confirmpassword.style.borderColor = badColor;
        message.style.color = badColor;
        message.innerHTML = "Las contraseñas no coinciden!!"

    }
}

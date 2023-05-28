function validationOfUserinfo(){

    var name = document.getElementById("name").value;
    var password = document.getElementById("password").value;
    var email = document.getElementById("email").value;

    if(name.length < 6 || !/^[a-zA-Z]+$/.test(name)){
        alert("Invalid User name");
        return false;
    }
    
    if(password.length < 6)
    {
        alert("Invalid Password");
        return false;
    }

    if(!isValidEmail(email))
    {
        alert("Invalid email address");
        return false;
    }
    
    return true;
}

function isValidEmail(email){
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailRegex.test(email);
}




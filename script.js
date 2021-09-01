function generate(){

    var chars = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%^&*()_+?><:{}[]"
    var passwordLength = 7;
    var password = "";  

    for (var i=0; i< passwordLength; i++){
        var randomNumber = Math.floor(Math.random() * chars.length);
        password += chars.substring(randomNumber, randomNumber+1);
    }  
    document.getElementById("inpass").value = password  
    document.getElementById("pass").style.display="flex";   
    document.getElementById("but2").style.display="flex";   
    document.getElementById("genbut").style.display="none";   
}
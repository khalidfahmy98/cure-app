function createAccount (type) {
    var xhr = new XMLHttpRequest (),
     email = document.getElementById("useremail").value,
     username = document.getElementById("username").value,
     password = document.getElementById("userpassword").value,
     phone = document.getElementById("userphone").value,
     nationality = document.getElementById("usernationality").options[document.getElementById("usernationality").selectedIndex].value,
     gender = document.getElementById("usergender").options[document.getElementById("usergender").selectedIndex].value;
    if ( email !== ' ' && username !== ' ' && password !== ' ' && phone !== ' '){
        xhr.onreadystatechange = function () {
            if ( xhr.readyState == 4 && xhr.status == 200 ) {
                document.getElementById("responserForToasters").innerHTML = this.responseText;
            }
        }
        xhr.open("POST","controllers/authentication.php?do=register",true);
        xhr.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
        xhr.send("p_email="+email+"&p_username="+username+"&p_password="+password+"&p_phone="+phone+"&p_natio="+nationality+"&p_gender="+gender+"&type="+type);
    }
}

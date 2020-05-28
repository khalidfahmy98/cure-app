function saveAdmin(){
    var xhr = new XMLHttpRequest (),
        managerName = document.getElementById("fullname").value,
        managerEmail = document.getElementById("email").value,
        managerUsername = document.getElementById("username").value,
        managerPassword = document.getElementById("password").value,
        managerRule = document.getElementById("rule").options[document.getElementById("rule").selectedIndex].value;
    if ( managerName !== ' ' && managerEmail !== ' ' && managerUsername !==' ' && managerPassword !== ' ' ){
        xhr.onreadystatechange = function () {
            if ( xhr.readyState == 4 && xhr.status == 200 ) {
                alert( this.responseText );
            }
        }
        xhr.open("POST","../../controllers/cure_managers/registerController.php",true);
        xhr.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
        xhr.send("manager-name="+managerName+"&manager-username="+managerUsername+"&manager-email="+managerEmail+"&manager-password="+managerPassword+"&manager-rule="+managerRule);
    }
}
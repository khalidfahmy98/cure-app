$(document).ready(function(){

});

function createOrgnization(ownerId){
    var xhr = new XMLHttpRequest (),
        orgnizationName = document.getElementById("orgnizationName").value,
        orgnizationEmail = document.getElementById("orgnizationEmail").value,
        orgnizationPhone = document.getElementById("orgnizationPhone").value,
        orgnizationLicense = document.getElementById("orgnizationLicense").value,
        orgnizationCity = document.getElementById("orgnizationCity").value,
        orgnizationAddress = document.getElementById("orgnizationAddress").value,
        accoutType = document.getElementById("accountType").options[document.getElementById("accountType").selectedIndex].value,
        orgnizationType = document.getElementById("orgnizationType").options[document.getElementById("orgnizationType").selectedIndex].value;
    if ( orgnizationName !== ' ' && orgnizationEmail !== ' ' && orgnizationPhone !==' ' && orgnizationLicense !== ' ' && orgnizationCity !== ' '  && orgnizationAddress !== ' '){
        xhr.onreadystatechange = function () {
            if ( xhr.readyState == 4 && xhr.status == 200 ) {
                document.getElementById("responserWrapper").innerHTML = this.responseText;
            }
        }
        xhr.open("POST","../../controllers/cure_managers/homepageController.php?do=createOrgnization",true);
        xhr.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
        xhr.send("ownerId="+ownerId+"&orgnizationName="+orgnizationName+"&org_email="+orgnizationEmail+"&org_fax="+orgnizationPhone+"&org_work_id="+orgnizationLicense+"&orgnizationCity="+orgnizationCity+"&orgnizationAddress="+orgnizationAddress+"&accoutType="+accoutType+"&orgnizationType="+orgnizationType);
    }

}

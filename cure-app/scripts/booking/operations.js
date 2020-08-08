function registerSession(org_id ,patient_id){
    $(this).hide();
    var xhr = new XMLHttpRequest (),
    sessionTime = document.getElementById("timer"+org_id).options[document.getElementById("timer"+org_id).selectedIndex].value;
        xhr.onreadystatechange = function () {
            if ( xhr.readyState == 4 && xhr.status == 200 ) {
                document.getElementById("responserWrapper").innerHTML = this.responseText;
            }
        }
        xhr.open("POST","controllers/reservation.php?do=createReservation",true);
        xhr.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
        xhr.send("org_id="+org_id+"&patient_id="+patient_id+"&sessionTime="+sessionTime);
}

function getReservations(orgId){
    var xhr = new XMLHttpRequest ();
    xhr.onreadystatechange = function () {
        if ( xhr.readyState == 4 && xhr.status == 200 ) {
            document.getElementById("liveTableData").innerHTML = this.responseText;
        }
    }
    xhr.open("GET","../../controllers/reservationsController.php?do=select&orgId="+orgId,true);
    xhr.send();
}
let orgId = document.getElementById('orgId').value;
getReservations(orgId);
function createReservation(org_id){
    var xhr = new XMLHttpRequest (),
    patientname = document.getElementById("patientname").options[document.getElementById("patientname").selectedIndex].value,
    sessiontime = document.getElementById("sessiontime").options[document.getElementById("sessiontime").selectedIndex].value;
    xhr.onreadystatechange = function () {
        if ( xhr.readyState == 4 && xhr.status == 200 ) {
            document.getElementById("responserWrapper").innerHTML = this.responseText;
            getReservations(org_id);
        }
    }
    xhr.open("POST","../../controllers/reservationsController.php?do=createReservation",true);
    xhr.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
    xhr.send("org_id="+org_id+"&patientname="+patientname+"&sessiontime="+sessiontime);
}
function deleteReservation(org_id, item_id){
    var xhr = new XMLHttpRequest ();
        xhr.onreadystatechange = function () {
            if ( xhr.readyState == 4 && xhr.status == 200 ) {
                document.getElementById("liveTableData").innerHTML = this.responseText;
                getReservations(org_id);
            }
        }
        xhr.open("POST","../../controllers/reservationsController.php?do=delete",true);
        xhr.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
        xhr.send("item_id="+item_id);
}

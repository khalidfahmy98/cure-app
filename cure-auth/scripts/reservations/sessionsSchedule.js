function getSchedule(orgId){
    var xhr = new XMLHttpRequest ();
    xhr.onreadystatechange = function () {
        if ( xhr.readyState == 4 && xhr.status == 200 ) {
            document.getElementById("liveTableData").innerHTML = this.responseText;
        }
    }
    xhr.open("GET","../../controllers/sessionsController.php?do=select&orgId="+orgId,true);
    xhr.send();
}
let orgId = document.getElementById('orgId').value;
getSchedule(orgId);
function createSchedule(org_id){
    var xhr = new XMLHttpRequest (),
    dayname = document.getElementById("dayname").options[document.getElementById("dayname").selectedIndex].value,
    starttime = document.getElementById("starttime").options[document.getElementById("starttime").selectedIndex].value,
    endtime = document.getElementById("endtime").options[document.getElementById("endtime").selectedIndex].value;
    xhr.onreadystatechange = function () {
        if ( xhr.readyState == 4 && xhr.status == 200 ) {
            document.getElementById("responserWrapper").innerHTML = this.responseText;
            getSchedule(org_id);
        }
    }
    xhr.open("POST","../../controllers/sessionsController.php?do=createSchedule",true);
    xhr.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
    xhr.send("org_id="+org_id+"&dayname="+dayname+"&starttime="+starttime+"&endtime="+endtime);
}
function deleteSchedule(org_id, item_id){
    var xhr = new XMLHttpRequest ();
        xhr.onreadystatechange = function () {
            if ( xhr.readyState == 4 && xhr.status == 200 ) {
                document.getElementById("liveTableData").innerHTML = this.responseText;
                getSchedule(org_id);
            }
        }
        xhr.open("POST","../../controllers/sessionsController.php?do=delete",true);
        xhr.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
        xhr.send("item_id="+item_id);
}

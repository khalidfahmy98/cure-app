function getWorkers(ownerId){
    var xhr = new XMLHttpRequest ();
    xhr.onreadystatechange = function () {
        if ( xhr.readyState == 4 && xhr.status == 200 ) {
            document.getElementById("liveTableData").innerHTML = this.responseText;
        }
    }
    xhr.open("GET","../../controllers/workersController.php?do=select&ownerId="+ownerId,true);
    xhr.send();
}
let ownerId = document.getElementById('ownerId').value;
getWorkers(ownerId);
function createWorker(ownerId){
    var xhr = new XMLHttpRequest (),
    workerusername = document.getElementById("workerusername").options[document.getElementById("workerusername").selectedIndex].value,
    workercategory = document.getElementById("workercategory").options[document.getElementById("workercategory").selectedIndex].value,
    workerbranch = document.getElementById("workerbranch").options[document.getElementById("workerbranch").selectedIndex].value;
    xhr.onreadystatechange = function () {
        if ( xhr.readyState == 4 && xhr.status == 200 ) {
            document.getElementById("responserWrapper").innerHTML = this.responseText;
            getWorkers(ownerId);
        }
    }
    xhr.open("POST","../../controllers/workersController.php?do=createWorker",true);
    xhr.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
    xhr.send("ownerId="+ownerId+"&workerusername="+workerusername+"&workercategory="+workercategory+"&workerbranch="+workerbranch);
}
function deleteWorker(aggId , ownerId){
    var xhr = new XMLHttpRequest ();
        xhr.onreadystatechange = function () {
            if ( xhr.readyState == 4 && xhr.status == 200 ) {
                document.getElementById("liveTableData").innerHTML = this.responseText;
                getWorkers(ownerId);
            }
        }
        xhr.open("POST","../../controllers/workersController.php?do=delete",true);
        xhr.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
        xhr.send("aggId="+aggId);
}

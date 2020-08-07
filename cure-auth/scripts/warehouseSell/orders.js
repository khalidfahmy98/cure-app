function getOrders(orgId){
    var xhr = new XMLHttpRequest ();
    xhr.onreadystatechange = function () {
        if ( xhr.readyState == 4 && xhr.status == 200 ) {
            document.getElementById("liveTableData").innerHTML = this.responseText;
        }
    }
    xhr.open("GET","../../controllers/ordersController.php?do=select&orgId="+orgId,true);
    xhr.send();
}
let orgId = document.getElementById('orgId').value;
getOrders(orgId);

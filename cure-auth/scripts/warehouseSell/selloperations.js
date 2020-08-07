function getSellProducts(orgId){
    var xhr = new XMLHttpRequest ();
    xhr.onreadystatechange = function () {
        if ( xhr.readyState == 4 && xhr.status == 200 ) {
            document.getElementById("liveTableData").innerHTML = this.responseText;
        }
    }
    xhr.open("GET","../../controllers/warehouseController.php?do=selectSell&orgId="+orgId,true);
    xhr.send();
}
let orgId = document.getElementById('orgId').value;
getSellProducts(orgId);
function activeSell(itemId , orgId){
    var xhr = new XMLHttpRequest ();
        xhr.onreadystatechange = function () {
            if ( xhr.readyState == 4 && xhr.status == 200 ) {
                document.getElementById("liveTableData").innerHTML = this.responseText;
                getSellProducts(orgId);
            }
        }
        xhr.open("POST","../../controllers/warehouseController.php?do=sell",true);
        xhr.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
        xhr.send("item_id="+itemId);
}
function blockSell(itemId , orgId){
    var xhr = new XMLHttpRequest ();
        xhr.onreadystatechange = function () {
            if ( xhr.readyState == 4 && xhr.status == 200 ) {
                document.getElementById("liveTableData").innerHTML = this.responseText;
                getSellProducts(orgId);
            }
        }
        xhr.open("POST","../../controllers/warehouseController.php?do=revoke",true);
        xhr.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
        xhr.send("item_id="+itemId);
}

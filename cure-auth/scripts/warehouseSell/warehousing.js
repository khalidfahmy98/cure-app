function getProducts(orgId){
    var xhr = new XMLHttpRequest ();
    xhr.onreadystatechange = function () {
        if ( xhr.readyState == 4 && xhr.status == 200 ) {
            document.getElementById("liveTableData").innerHTML = this.responseText;
        }
    }
    xhr.open("GET","../../controllers/warehouseController.php?do=select&orgId="+orgId,true);
    xhr.send();
}
let orgId = document.getElementById('orgId').value;
getProducts(orgId);
function registerProduct(org_id){
    var xhr = new XMLHttpRequest (),
    productQuantity = document.getElementById("productQuantity").value,
    productPrice = document.getElementById("productPrice").value,
    productName = document.getElementById("productName").options[document.getElementById("productName").selectedIndex].value;
    if ( productQuantity !== ' ' && productPrice !== ' '  ){
        xhr.onreadystatechange = function () {
            if ( xhr.readyState == 4 && xhr.status == 200 ) {
                document.getElementById("responserWrapper").innerHTML = this.responseText;
                getProducts(org_id);
            }
        }
        xhr.open("POST","../../controllers/warehouseController.php?do=createProduct",true);
        xhr.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
        xhr.send("org_id="+org_id+"&productPrice="+productPrice+"&productQuantity="+productQuantity+"&productName="+productName);
    }
}
function deleteProduct(itemId , orgId){
    var xhr = new XMLHttpRequest ();
        xhr.onreadystatechange = function () {
            if ( xhr.readyState == 4 && xhr.status == 200 ) {
                document.getElementById("liveTableData").innerHTML = this.responseText;
                getProducts(orgId);
            }
        }
        xhr.open("POST","../../controllers/warehouseController.php?do=delete",true);
        xhr.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
        xhr.send("item_id="+itemId);
}

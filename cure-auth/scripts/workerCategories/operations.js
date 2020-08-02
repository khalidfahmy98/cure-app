function getCategories (org_id) {
    var xhr = new XMLHttpRequest ();
        xhr.onreadystatechange = function () {
            if ( xhr.readyState == 4 && xhr.status == 200 ) {
                document.getElementById("liveTableData").innerHTML = this.responseText;
            }
        }
        xhr.open("GET","../../controllers/categoriesController.php?do=select&org_id="+org_id,true);
        xhr.send();
}
let orgId = document.getElementById('org_id').value;
getCategories(orgId);
function createCategory(org_id){
    var xhr = new XMLHttpRequest (),
    categoryName = document.getElementById("categoryName").value,
    categoryDesc = document.getElementById("categoryDesc").value,
    categoryPerm = document.getElementById("categoryPerm").options[document.getElementById("categoryPerm").selectedIndex].value;
    if ( categoryName !== ' ' && categoryDesc !== ' ' ){
        xhr.onreadystatechange = function () {
            if ( xhr.readyState == 4 && xhr.status == 200 ) {
                document.getElementById("responserWrapper").innerHTML = this.responseText;
                getCategories(org_id);
            }
        }
        xhr.open("POST","../../controllers/categoriesController.php?do=createCategory",true);
        xhr.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
        xhr.send("org_id="+org_id+"&categoryName="+categoryName+"&categoryDesc="+categoryDesc+"&categoryPerm="+categoryPerm);
    }
}
function deleteCategory(cat_id  , org_id ){
    var xhr = new XMLHttpRequest ();
        xhr.onreadystatechange = function () {
            if ( xhr.readyState == 4 && xhr.status == 200 ) {
                document.getElementById("liveTableData").innerHTML = this.responseText;
                getCategories(org_id);
            }
        }
        xhr.open("POST","../../controllers/categoriesController.php?do=delete",true);
        xhr.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
        xhr.send("cat_id="+cat_id);
}

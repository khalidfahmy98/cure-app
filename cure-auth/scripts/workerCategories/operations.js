function selectCategories(){
    var xhr = new XMLHttpRequest ();
        xhr.onreadystatechange = function () {
            if ( xhr.readyState == 4 && xhr.status == 200 ) {
                document.getElementById("liveTableData").innerHTML = this.responseText;
            }
        xhr.open("POST","../../controllers/categoriesController.php?do=selectCategories",true);
        xhr.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
        xhr.send();
    }
}
window.onload = selectCategories();
function createCategory(org_id){
    var xhr = new XMLHttpRequest (),
    categoryName = document.getElementById("categoryName").value,
    categoryDesc = document.getElementById("categoryDesc").value,
    categoryPerm = document.getElementById("categoryPerm").options[document.getElementById("categoryPerm").selectedIndex].value;
    if ( categoryName !== ' ' && categoryDesc !== ' ' ){
        xhr.onreadystatechange = function () {
            if ( xhr.readyState == 4 && xhr.status == 200 ) {
                document.getElementById("responserWrapper").innerHTML = this.responseText;
                selectCategories(org_id);
            }
        }
        xhr.open("POST","../../controllers/categoriesController.php?do=createCategory",true);
        xhr.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
        xhr.send("org_id="+org_id+"&categoryName="+categoryName+"&categoryDesc="+categoryDesc+"&categoryPerm="+categoryPerm);
    }
}

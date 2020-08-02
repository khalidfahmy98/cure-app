function selectCategories(org_id){
    var xhr = new XMLHttpRequest ();
        xhr.onreadystatechange = function () {
            if ( xhr.readyState == 4 && xhr.status == 200 ) {
                document.getElementById("liveTableData").innerHTML = this.responseText;
            }
        xhr.open("POST","../../controllers/categoriesController.php?do=selectCategories",true);
        xhr.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
        xhr.send("org_id="+org_id);
    }
}

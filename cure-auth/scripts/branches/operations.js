function getBranches(orgId){
    var xhr = new XMLHttpRequest ();
    xhr.onreadystatechange = function () {
        if ( xhr.readyState == 4 && xhr.status == 200 ) {
            document.getElementById("liveTableData").innerHTML = this.responseText;
        }
    }
    xhr.open("GET","../../controllers/branchesController.php?do=select&orgId="+orgId,true);
    xhr.send();
}
let orgId = document.getElementById('orgId').value;
getBranches(orgId);
function createBranch(org_id , ownerId){
    var xhr = new XMLHttpRequest (),
    branchName = document.getElementById("branchName").value,
    branchPhone = document.getElementById("branchPhone").value,
    branchLicense = document.getElementById("branchLicense").value,
    branchCity = document.getElementById("branchCity").value,
    branchAddress = document.getElementById("branchAddress").value,
    branchWork = document.getElementById("branchWork").options[document.getElementById("branchWork").selectedIndex].value;
    if ( branchName !== ' ' && branchPhone !== ' ' && branchLicense !== ' '  && branchCity !== ' ' && branchAddress !== ' ' ){
        xhr.onreadystatechange = function () {
            if ( xhr.readyState == 4 && xhr.status == 200 ) {
                document.getElementById("responserWrapper").innerHTML = this.responseText;
                getBranches(org_id);
            }
        }
        xhr.open("POST","../../controllers/branchesController.php?do=createBranch",true);
        xhr.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
        xhr.send("ownerId="+ownerId+"&org_id="+org_id+"&branchName="+branchName+"&branchPhone="+branchPhone+"&org_work_id="+branchLicense+"&branchCity="+branchCity+"&branchAddress="+branchAddress+"&branchWork="+branchWork);
    }
}
function deleteBranch(org_id , parentId){
    var xhr = new XMLHttpRequest ();
        xhr.onreadystatechange = function () {
            if ( xhr.readyState == 4 && xhr.status == 200 ) {
                document.getElementById("liveTableData").innerHTML = this.responseText;
                getBranches(parentId);
            }
        }
        xhr.open("POST","../../controllers/branchesController.php?do=delete",true);
        xhr.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
        xhr.send("org_id="+org_id);
}

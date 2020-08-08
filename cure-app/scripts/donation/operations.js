function registerDonation(reqeust_id ,patient_id){
    var xhr = new XMLHttpRequest ();
        xhr.onreadystatechange = function () {
            if ( xhr.readyState == 4 && xhr.status == 200 ) {
                document.getElementById("responserWrapper").innerHTML = this.responseText;
            }
        }
        xhr.open("POST","controllers/reservation.php?do=createDonation",true);
        xhr.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
        xhr.send("reqeust_id="+reqeust_id+"&patient_id="+patient_id);
}

function registerRequest(patient_id){
    var xhr = new XMLHttpRequest (),
    bloodType = document.getElementById("bloodType").options[document.getElementById("bloodType").selectedIndex].value,
    quantity = document.getElementById("quantity").value,
    donationAddress = document.getElementById("donationAddress").value;
    if ( quantity !=="" && donationAddress !=="" ) {
        xhr.onreadystatechange = function () {
            if ( xhr.readyState == 4 && xhr.status == 200 ) {
                document.getElementById("responserWrapper").innerHTML = this.responseText;
                location.reload();
            }
        }
        xhr.open("POST","controllers/reservation.php?do=createRequest",true);
        xhr.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
        xhr.send("bloodType="+bloodType+"&patient_id="+patient_id+"&quantity="+patient_id+"&donationAddress="+donationAddress);

    }
}

function rental(){
    var land=document.getElementById("landlord").value;
    var landadd=document.getElementById("Landlord_add").value;
    var roomer=document.getElementById("buyer").value;
    var Location=document.getElementById("city").value;
    var agreesd=document.getElementById("agree_sdate").value;
    var agreevalid=document.getElementById("agree_valid").value;
    var rentmonthly=document.getElementById("rentpm").value;
    var Security=document.getElementById("rentsd").value;
    var rentdate=document.getElementById("rent_sdate").value;

    localStorage.setItem("ll",land);
    localStorage.setItem("la",landadd);
    localStorage.setItem("room",roomer);
    localStorage.setItem("loc",Location);
    localStorage.setItem("asd",agreesd);
    localStorage.setItem("av",agreevalid);
    localStorage.setItem("rm",rentmonthly);
    localStorage.setItem("sec",Security);
    localStorage.setItem("rd",rentdate);
   
}
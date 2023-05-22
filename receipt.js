function money(){
    var sdate=document.getElementById("Rstart").value;
    var edate=document.getElementById("Rend").value;
    var buyer=document.getElementById("buy").value;
    var amount=document.getElementById("rentamount").value;
    var address=document.getElementById("proadd").value;
    var ll=document.getElementById("landlaord").value;

    localStorage.setItem("sd",sdate);
    localStorage.setItem("ed",edate);
    localStorage.setItem("room",buyer);
    localStorage.setItem("rs",amount);
    localStorage.setItem("add",address);
    localStorage.setItem("own",ll);

    return false;
    
}
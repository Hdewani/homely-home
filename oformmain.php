<?php
$conn=mysqli_connect("localhost","root","","home");
if(!$conn){
    die("connection failed".mysqli_connect_error());
}
echo "succesfull";

$flatname =$_POST['flatname'];
   $location=$_POST['location'];
   $rent=$_POST['rent'];
   
  
   $meal=$_POST['meal'];
   $bathroom =$_POST['bathroom'];
   $area=$_POST['area'];
   $BHK=$_POST['BHK'];

   $date=$_POST['date'];
   $dropdown =$_POST['dropdown'];
   $furniture=$_POST['furniture'];

   $amenities=$_POST['amenities'];
   $amen=implode(",",$amenities);
//    echo $amen;
   

   $query="INSERT INTO  oform(flatname,location,rent,meal,bathroom,area,BHK,date,dropdown,furniture,amenities)
   VALUES('$flatname','$location','$rent','$meal','$bathroom','$area','$BHK','$date','$dropdown','$furniture','$amen')";
   $data=mysqli_query($conn,$query);
   if($data){
    echo"Data inserted successfully";

   }
   else{
    echo"Data insertion failed";
   }

?>
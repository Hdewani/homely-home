<?php
$conn=mysqli_connect("localhost","root","","home");
if(!$conn){
    die("connection failed".mysqli_connect_error());
}
echo "succesfull";

$name =$_POST['name'];
   $location=$_POST['location'];
   $rent=$_POST['rent'];
   
  
   $meal=$_POST['meal'];
   $bhk=$_POST['bhk'];

   $date=$_POST['date'];
   $roomtype =$_POST['roomtype'];
   $furniture=$_POST['furniture'];

   $accupancy=$_POST['accupancy'];
   $gender =$_POST['gender'];

   $amenities=$_POST['amenities'];
   $amen=implode(",",$amenities);
  
   

   $query="INSERT INTO  roommateform(name,location,rent,meal,bhk,date,roomtype,furniture,accupancy,gender,amenities)
   VALUES('$name','$location','$rent','$meal','$bhk','$date','$roomtype','$furniture','$accupancy','$gender','$amen')";
   $data=mysqli_query($conn,$query);
   if($data){
    echo"Data inserted successfully";

   }
   else{
    echo"Data insertion failed";
   }

?>
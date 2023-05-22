<?php
$conn=mysqli_connect("localhost","root","","home");
if(!$conn){
    die("connection failed".mysqli_connect_error());
}
echo "CONNECTED SUCCESSFULLY ";

if(isset($_POST['submit'])){

$text =$_POST['text'];
$email =$_POST['email'];
$password=$_POST['password']; 
$pass=$_POST['pass'];

$emailcfm= " select * from cpsign where email='$email' "; 
$query=mysqli_query($conn,$emailcfm);

$emailcount=mysqli_num_rows($query);

if($emailcount>0){
    echo "email already exists";
}

else{




   $query="INSERT INTO  cpsign(text,email,password,pass)
   VALUES('$text','$email','$password','$pass')";
   $data=mysqli_query($conn,$query);
   if($data){
    echo"Data inserted successfully";

}
else{
    echo"Data insertion failed";
}
}
}
?>

<!-- 
<?php
$conn=mysqli_connect("localhost","root","","home");
if(!$conn){
    die("connection failed".mysqli_connect_error());
}
echo "connected succesfully <br>";

if(isset($_POST['submit'])){
$email =$_POST['email'];
$password=$_POST['password'];
   

// $loginchk=" select * from cpsign where email='$email' and password='$password' ";

// $result=mysqli_query($conn,$loginchk);
// $count-mysqli_num_rows($result);

// if($count>0){
//     echo "LOGIN SUCCESFUULY";
// }

// else{
//     echo"INVALID USERNAME OR PASSWORD";
// }


$sql= "SELECT * FROM cpsign WHERE email = '$email' AND password = '$password' ";
$result = mysqli_query($conn,$sql);
$check = mysqli_fetch_array($result);
if(isset($check)){
echo 'LOGIN SUCCESFUULY';
echo "Hello $email";
}else{
echo 'INVALID USERNAME OR PASSWORD';
}
}
    
  
   

//    $query="INSERT INTO  cpform(email,password)
//    VALUES('$email','$password')";
//    $data=mysqli_query($conn,$query);
//    if($data){
//     echo"Data inserted successfully";

//    }
//    else{
//     echo"Data insertion failed";
//    }

?> -->


<?php
$conn=mysqli_connect("localhost","root","","home");
if(!$conn){
    die("connection failed".mysqli_connect_error());
}
// echo "connected succesfully <br>";

if(isset($_POST['submit'])){
    $email =$_POST['email'];
$password=$_POST['password'];

$sql= "SELECT * FROM cpsign WHERE email = '$email' AND password = '$password' ";
$result = mysqli_query($conn,$sql);
$check = mysqli_fetch_array($result);
if(isset($check))

{
    echo ' <h1>LOGIN SUCCSSFULLY <br></h1>';
    echo "<h2>Hello $email </h2>";
}else{
    echo '<h1>INVALID USERNAME OR PASSWORD</h1>';
}


}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
    margin: 0px;
    padding: 0px;
    background-color: #caf6bf;
    font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
}

    </style>
</head>
<body>
<a href="ex.html"><button>HOME</button></a>
    

</body>
</html>



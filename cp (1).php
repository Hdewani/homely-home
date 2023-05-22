<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cp</title>
    <link rel="stylesheet" href="cp.css">
    <script src="https://unpkg.com/scrollreveal"></script>

</head>
<body>
    <form class="card1" action=" cp.php" method="post" onsubmit="return login()" >
        <label><img src="oformbg4.gif" width="300px" ; height="200px"></label>
        <h1>Login</h1>
       <div class="p"> Please fill the input below here </div><br><br>
        <img src="mail.png" alt="mail" width="40px" ; height="40px">
         <input type="text"  placeholder="Email" id="username" name="email"><br>
         <span id="user" style="color:red;"></span><br>
        <img src="password.png" alt="password" width="40px" ; height="40px"> 
        <input type="password" name="password" placeholder="Password" id="password" name="password"><br><br><br>
        <span id="pass" style="color:red;"></span><br>
        <a href="index.html"> <input type="submit" name="submit" value="LOGIN"><br><br></a>
        Don't have an account? <a href="cpsign.html">Sign up</a>
    
    
        


</form>

<script>
        ScrollReveal({ 
         reset: true ,
         distance: '60px',
         duration: 2500,
         delay: 500
     });
 
     ScrollReveal().reveal('.card1',  { delay: 500, origin: 'bottom' });
     ScrollReveal().reveal('.label .img',  { delay: 550, origin: 'left' });
     ScrollReveal().reveal('.card1 h1', '.card1 p',  { delay: 550, origin: 'top' });
     ScrollReveal().reveal('input',  { delay: 550, origin: 'right' });
     ScrollReveal().reveal('.card1 img',  { delay: 500, origin: 'bottom' });
     </script>
     <script>
       function login(){
        var email=document.getElementById("username").value;
        if(email==""){
            document.getElementById('user').innerHTML="***Please fill this field***";
            return false;
        }
        var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
        if(!mailformat.test(email)){
            // document.getElementById('user').innerHTML="";
            document.getElementById('user').innerHTML="***Please fill valid email address***";
            return false;
        }
        else{
             document.getElementById('user').innerHTML="";
        }

        var decimal=  /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s)/;
        var pass=document.getElementById("password").value;
        if(pass==""){
            document.getElementById('pass').innerHTML="***Please fill this field***";
            return false;
        }
        if(!decimal.test(pass)){
            document.getElementById('pass').innerHTML="***password should contain at least one lowercase letter, one uppercase letter, one numeric digit, and one special character";
            return false;
        }
        if(pass.length<6){
            document.getElementById('pass').innerHTML="***Please enter atleast 6 chracters***";
            return false;
        }
        else{
             document.getElementById('pass').innerHTML="";
        }


       }

     </script>
</body>
</html>
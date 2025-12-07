<?php
include "connection.php";
if(isset($_POST['Login']))
{
    print_r($_POST);
    die();
    $email=$_POST['email'];
    
    $pass=$_POST['password'];
    $getdata="SELECT * FROM 'students' where email='$email';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
    <div class="logo">
        <h1>facebook</h1>
    </div>
    <div class="box">
    <h1 class ="heading">
        Log in to facebook
    </h1>
   <div class="inputfield"> <input type="text" placeholder="Email address or phone number" name=""></div>
  <div>  <input type="password" placeholder="password" name="">
</div>

<div>
    <button class="btn">Login</button>
</div>
<a href="" class="forget">Forgotten account?</a>
<div>
    <button class="btn1">Create new account</button>
</div>
    </div>

    
</body>
</html>


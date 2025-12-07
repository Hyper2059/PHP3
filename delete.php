<?php

include "connection.php";

if(!empty($_GET['id']))
{

    echo"<h1>";
    echo$_GET['id'];
    echo"</h1>";
    
    $id=$_GET['id'];
    $getdatasql="SELECT * FROM `students` WHERE id=$id";
    $result = mysqli_query($conn, $getdatasql);
    $data= $result->fetch_assoc();
    echo "<pre>";
    print_r($data);
    echo"</pre>";
}
if(isset($_POST['submit'])){
    
$id=$_POST['id'];
$Name =$_POST['name'];
$Email=$_POST['email'];
$phone=$_POST['phone'];
$password=$_POST['password'];
$address=$_POST['address'];
$image='0';
$updatesql="UPDATE `students` SET `id`='[value-1]',`Name`='[value-2]',`Email`='[value-3]',`password`='[value-4]',`phone`='[value-5]',`address`='[value-6]' WHERE id='$id'";
if(mysqli_query($conn,$updatesql));
{
    header("Location:record.php");

}
// else{
//     echo"something went wrong";
// }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"   content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
<form action=""method="POST">

<div>
       <label>Name:</label><br>
        <input type ="text" name="name" value="<?php echo $data['Name']; ?>">
</div>

<div>
    <label>Email:</label><br>
    <input type="email" name="email"value="<?php echo $data['Email'];?>">
</div>

<div>
    <label>phone:</label><br>
    <input type = "text" name="phone"value="<?php echo $data['phone'];?>">
</div>

<div>
    <label>password:</label><br>
    <input type="password" name="password"value="<?php echo $data['password'];?>">
</div>

<div>
    <label> address:</label><br>
    <textarea name="address"></textarea>
</div>

<div>
    <button name="submit" type="submit">
        update
</button >
</div>
</form>



</div>

</body>
</html>
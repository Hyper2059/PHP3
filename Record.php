<?php
include "connection.php";
if(isset($_POST['submit'])){
    echo"<pre>";
    print_r($_POST);
    echo"</pre>";







    

$Name =$_POST['name'];
$Email=$_POST['email'];
$phone=$_POST['phone'];
$password=$_POST['password'];
$address=$_POST['address'];
$insertsql = "INSERT INTO `students`( `Name`, `Email`, `password`, `phone`, `address`) VALUES ('[$Name]','[$Email]','[$phone]','[$password]','[$address]')";
if(mysqli_query($conn,$insertsql)){
    echo "data inserted successfullly";

}
else{
    echo"something went wrong";

}
}

   $getsql="SELECT * FROM `students`";
   $data =mysqli_query($conn,$getsql);
   $result=mysqli_fetch_all($data,MYSQLI_ASSOC);

   echo"<pre>";
    print_r($result);
    echo"</pre>";

   

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div>
    <form action="" method="post">
        <div>
            <label>Name:</label><br>
            <input type="text" name="name">
</div>
<div>
    <label>Email:</label><br>
    <input type="email" name="email">
</div>
<div>
<label>Password:</label><br>
<input type = "password" name="password">
    
</div>
<div>
<label>Phone</label><br>
<input type="text" name="phone">
</div>
<div>
    <label> Address:</label><br>
    <textarea name="address"></textarea>
</div>
<div>
    <button name="submit">submit</button>
</div>
</form>
</div>     

  <div>
    <table border="1" width ="90%">
        <tr>
            <th>S.N</th>
            <th>Name</th>
            <th>Email</th>
            
            <th>Password</th>
            <th>Phone</th>
            <th>Address</th>
            <th>action</th>
</tr>
<?php
foreach($result as $value)
{
?>
<tr>
            <td> S.N</td>
            <td><?php echo $value['Name'];?></td>
            <td><?php echo $value['Email']; ?></td>
            <td><?php echo $value['Password'];?></td>
            <td><?php echo $value['Phone'];?></td>
            <td><?php echo $value ['Address'];?></td>
            <td>
    <img src="images/<?php echo $value['image']; ?>" alt="Image">
    <a href="edit.php?id=<?php echo $value['id']; ?>">edit</a>
    <a href="delete.php?id=<?php echo $value['id']; ?>">delete</a>
</td>
</tr>
<?php


}
?>
</table>
</div>

</body>
</html>
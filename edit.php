<?php
if(!empty($_GET['id']))
{
    include "connection.php";
    $id=$_GET['id'];
    $getdatasql="SELECT * FROM `students` WHERE id=$id";
    $result = mysqli_query($conn, $getdatasql);
    $data= $result->fetch_assoc();
    echo "<pre>";
    print_r($data);
    echo"</pre>";
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
<form action=""method="POST" enctype="multipart/form-data">
    <div>
        <input type ="text" name="name" value="<?php echo $data['Name']; ?>">
</div>
<div>
    <label>Email:</label><br>
    <input type="email" name="email"value="<?php echo $data['Email'];?>">
</div>
<div>
    <label>password:</label><br>
    <input type="password" name="password"value="<?php echo $data['password'];?>">
</div>
<div>
    <label>phone:</label><br>
    <input type = "text" name="phone"value="<?php echo $data['phone'];?>">
</div>
<div>
    <label> address:</label><br>
    <textarea name="address"></textarea>
</div>
<div>
    <button name="submit">submit</button>
</div>
</form>



</div>

</body>
</html>
<!DOCTYPE html>
<html>

<body>
<img src="img/visit.png" alt="profile imgage" class="profileimg" width="100%" height="auto">
</body>
<?php
$conn=mysqli_connect('localhost','root','','portfolio');

$txtName=$_POST['txtName'];
$txtEmail=$_POST['txtEmail'];
$txtMessage=$_POST['txtMessage'];

if(mysqli_connect_error()){
    die('Connect Error ('.mysqli_connect_errno() .')'.mysqli_connect_error());
}
else{
$sql="INSERT INTO contact (name,email,message) Values ('$txtName' , '$txtEmail' , '$txtMessage' )";

if($conn->query($sql)){
    echo  "<h2> DATA INSERTED SUCCESSFULLY </h2>";
}
else{
    echo "Error: " . $sql ."".$conn->error;
}
$conn->close();
}


?>
</html>
<form action="index.php" method="post">
    Enter your first namespace
    <input type="text" name="name" id="fname"> <br><br>
    Enter your last namespace
  
    <input type="tel" name="phone"> <br>
    <input type="text" name="email" id="email"> <br>
    <input type="address" name="address">
    <input type="submit">


</form>
<?php
$servername="localhost";
$username = "root";
$password = "";
$dbname="keyboard";

$conn=new mysqli($servername,$username,$password,$dbname)
if($conn->connet_error)
{
    die("connection fail");
}

$name=$_POST['name'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$address=$_POST['address'];
 
$sql="INSERT INTO 'registration0' (id, name, phone, Email, address) VALUES (NULL, '$name', '$phone', '$email', '$address')";
if($conn->query($sql) == true)
{
    echo "new record added";
}
else
{
    echo "Error";

}
$conn->close();
?>
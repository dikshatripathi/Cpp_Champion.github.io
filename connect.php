<?php
echo "hey";
$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$message = $_POST['message'];


$conn = new mysqli('localhost','root','','form');
if($conn->connect_error)
{
  die('Connection Failed :'.$conn->connect_error);

}else{
  $stmt = $conn->prepare("insert into register(name,phone,email,message) value(?,?,?,?)");
  $stmt->bind_param("siss",$name,$phone,$email,$message);
  $stmt->execute();
  echo "registration Successfully";
  $stmt->close();
  $conn->close();
}
?>
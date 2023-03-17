<?php
echo "hey this is working";
$name=$_POST['name'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$message=$_POST['message'];


 //Database connection
 $conn =new mysqli("localhost","root,","","test");
 if($conn->connect){
    
      die('Connection Failed : '.$conn->connect_error);   
}
 else{
    echo "Error";
    $stmt=$conn->prepare("insert into registration (name,phone,email,message) values(?,?,?,?)");
    $stmt->bind_param("siss",$name,$phone,$email,$message);
    $stmt->execute();
    echo "registration Successfully.......";
    $stmt->close();
    $conn->close();
 }
?>
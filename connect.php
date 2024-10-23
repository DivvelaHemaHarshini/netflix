<?php


$email = $_POST['email'];
$password = $_POST['password'];

$conn = new mysqli('localhost','root','','netflix');
if($conn->connect_error){
    die('Connection Failed: '.$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into details(email,password)
    values(?,?)");
    $stmt->bind_param("ss",$email,$password);
    $stmt->execute();
    echo "login Sucessfulled!!!";
    $stmt->close();
    $conn->close();
   
}

?>






<!-- //http://localhost/netflix/connect.php  -->
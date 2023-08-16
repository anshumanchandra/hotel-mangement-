<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST["message"];
$conn = new mysqli('localhost','root',"",'hotel');
if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}else{
    $sql = "INSERT INTO contact (name,email,message) VALUES ('$name','$email','$message')";
}
if($conn->query($sql) === TRUE){
    echo "Message sent successfully";
}else{
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();

?>
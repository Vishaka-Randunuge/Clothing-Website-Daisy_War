<?php
$Username = $_POST['Username'];
$Email = $_POST['Email'];
$Password = $_POST['Password'];



$conn = new mysqli('localhost','root','','daisywar');
if($conn->connect_error){
    echo "$conn->connect_error";
    die("Connection Failed : ". $conn->connect_error);
} else {
    $stmt = $conn->prepare("insert into account_info1(Username,Email,Password) values(?, ?, ?)");
    $stmt->bind_param("sss", $Username,$Email,$Password);
    $stmt->execute();
    
    echo ("<script LANGUAGE='JavaScript'>
window. alert('Registration Successful! Login Now');
window. location. href='http://localhost/Daisy_War/accounts.html';
</script>");
    $stmt->close();
    $conn->close();
}


?>
<?php
$Username = $_POST['Username'];
$Password = $_POST['Password'];


$conn = new mysqli('localhost','root','','daisywar');
if($conn->connect_error){
    echo "$conn->connect_error";
    die("Connection Failed : ". $conn->connect_error);

}
if($Password=='daisyadmin1234'){
        
    ?>
    <script>
        window.alert("Welcome to admin panel");
    </script>
    <meta http-equiv="refresh" content="1;url=admin.php" />
    <?php
    
}




else{
    $stmt = $conn->prepare("select * from account_info1 where Username=?");
    $stmt->bind_param("s", $Username);
    $stmt->execute();
    $stmt_result = $stmt->get_result();
    if($stmt_result->num_rows>0){
        $data = $stmt_result->fetch_assoc();
        if($data['Password']=== $Password){
            echo ("<script LANGUAGE='JavaScript'>
window. alert('Logged in Successfully');
window. location. href='http://localhost/Daisy_War/index.html';
</script>");

           
        } 
        else{
            echo ("<script LANGUAGE='JavaScript'>
window. alert('Incorrect Username or Password');
window. location. href='http://localhost/Daisy_War/accounts.html';
</script>");

        }

    } else{
        echo ("<script LANGUAGE='JavaScript'>
window. alert('Incorrect Username or Password');
window. location. href='http://localhost/Daisy_War/accounts.html';
</script>");
    }
}
?>

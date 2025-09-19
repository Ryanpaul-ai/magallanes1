<?php
$conn = mysqli_connect("localhost","root","","payroll");
if(!$conn){
    die(" failed Connection");
}

$email = $_POST['email'];
$password = $_POST['password'];

$mysql = "SELECT * FROM employees WHERE email ='$email' AND password='$password'";
$result = mysqli_query($conn,$mysql);

if(mysqli_num_rows($result)>0){
    echo "Login Successful";
    exit();
}
else{
    echo "Login Failed";
}
mysqli_close($conn);
?>



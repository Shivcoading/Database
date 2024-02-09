<?php
include 'database.php';
if(isset($_POST['submit'])){
    $email=$_POST['email'];
    $password=$_POST['userpass'];
    $sql="select * from userdata where email='$email' and userpass='$password'";
    $que=mysqli_query($conn, $sql);
    if(mysqli_num_rows($que)> 0){
        echo "<script>alert('Login Successfull !!!')</script>";
        echo "<script>window.open('website/index.php', '_self')</script>";
    }
    else{
        echo "<script>alert('Please Enter Valid Email or Password')</script>";
        echo "<script>window.open('login.php', '_self')</script>";
    }
    mysqli_close($conn);
}
?>

<?php
session_start();
$email=$_POST['email'];
$password=$_POST['password'];
$dbemail="dalia@gmail.com";
$dbpassword="123";
if($email==$dbemail)
{
 if($password==$dbpassword){
    $_SESSION['uname']="daliasaleem";
    header("location:home.php");

}
    else{
        $_SESSION['error']="Invalid password";
        header("location:index.php");
    }
}
else{
    $_SESSION['error']="Invalid email";
    header("location:index.php");
}
?>
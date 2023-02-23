<?php
session_start();
$email=$_POST['email'];
$password=$_POST['password'];
$error[];
$passwordLen=strlen($password);
//VALIDATE EMAIL
if(empty($email)){
    $errors[]="email is required";  
}
else if (Filter_var(!$email,FILTER_VALIDATE_EMAIL)){
    $errors[]="Email is not valid";

}
//VALIDATE PASSWORD 
if (empty($password))
{
$errors[]="password is required";    
}
elseif($passwordLen<8 && $passwordLen>30){
    $errors[]="password should be 8 to 30 charecter";
}
if (empty(errors[])){
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
}}
?>
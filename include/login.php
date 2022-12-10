<?php
include "connection.php";
$username=$_POST['username'];
$userPassword=$_POST['pass'];
$passwordHash = password_hash($userPassword, PASSWORD_DEFAULT);
//echo "Generated Password: " . $passwordHash;
$sql="SELECT * from admin where username='$username'";
$res=mysqli_fetch_array(mysqli_query($con,$sql));
if(!$res){
    $em="invalid login crendiantial";
    header("location:../index.php?error=$em");
}
else{
$verified = password_verify($userPassword, $res['password']);
if ($verified) {
    
    $_SESSION['user']=$username;
    $_SESSION['id']=$res['id'];
    header("location:../adminPanel.php");

  //echo 'Password is verified!';
} else {
    $em="invalid login crendiantial";
    header("location:../index.php?error=$em");
}}
?>
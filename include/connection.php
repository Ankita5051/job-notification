<?php

$con=mysqli_connect('localhost','root');
$db=mysqli_select_db($con,'job');
// if($con)
// echo "conn success";
// if($db)
// echo "db succ";

session_start();
?>
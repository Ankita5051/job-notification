<?php
include "include/connection.php";
if(!isset($_SESSION['user'])){
    header("location:index.php");
   }
   else{
       $user=$_SESSION['user'];
       $id=$_SESSION['id'];
   }
   

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>T&PC</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  
<!--
    fonts link
-->

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php 
//include "include/header.php" ?> 

<div class="header ">
    <nav class="navbar navbar-expand-lg navbar-light bg-light col-lg-10 offset-lg-1">
  <a class="navbar-brand" href="index.php">Traning and placement cell</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Admin Dashboard <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">profile</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">jobs</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">internship</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="#">Notification</a>
      </li>
    </ul>
  </div>
</nav>


    </div>
    <img src="img/img.png" alt="">
<div class="sidebar">
<ul class="sidebar-option-list">
    <li class="sidebar-link">
      <a href=""> Post job</a>
    </li>
    <li class="sidebar-link">
      <a href="">Jobs</a>
    </li>
    <li class="sidebar-link">
      <a href="">TPR</a>
    </li>
    <li class="sidebar-link">
      <a href="">message</a>
    </li>
    <li class="sidebar-link">
      <a href="">your account</a>
    </li>
    <li class="sidebar-link">
      <a href="">change password</a>
    </li>
</ul>
</div>
<div  class="job-post">
<h1 class="common-heading">fill details of job.</h1>
<form action="include/postJob.php" method="post"class="job-del-form">
    <label for="type" class="form-group">
type :<select name="type" id="" class="form-control j-pst-in select" required='true'>
    <option value="0" >select..</option>
    <option value="1" >internship</option>
    <option value="2">full time job</option>
</select></label>

<label for="branch" class="form-group">
branch :<select name="branch" id="" class="form-control j-pst-in select">
<option value="0" >select..</option>
    <option value="1" >CSE</option>
    <option value="2">EL</option>
    <option value="3">EE</option>
</select></label>

   
    <label for="package" class="form-group">
        Package: <input class="form-control j-pst-in" type="number" name="package" id="" placeholder="enter pacakage in lpa">
    </label>
    <label for="company" class="form-group">
       Company: <input class="form-control j-pst-in" type="text" name="company" placeholder="enter company name">
    </label>
<label for="post" class="form-group">
    Post: <input  class=" form-control j-pst-in"type="text" name="post" placeholder="enter post name" id="">
</label>

<label for="deadline" class="form-group">
Deadline:
    <input type="datetime" class=" form-control j-pst-in" name="deadline" placeholder="enter deadline in YYYY-MM-DD format" id="">
</label>
<label for="requirement" class="form-group">
    requirement: <textarea  class="form-control j-pst-in " name="requirement" id="" cols="30" rows="4" placeholder="enter requirement.."></textarea>
</label>
<label for="description" class="form-group">
  Job description:  <textarea class="j-pst-in form-control" name="description" id="" cols="30" rows="4" placeholder="job description"></textarea>
</label>

<label for="instruction" class="form-group">
    Instruction: &nbsp<textarea name="instruction" class="j-pst-in form-control" id="" cols="30" rows="4" placeholder="any instruction for tprs"></textarea>
</label>
<span>
<button type="submit" name="action" value="1"class=" form-control common-btn">post job</button>
<button class="common-btn" name="action" value="1">To TPR</button></span>
</form>
</div>
</body>
</html>
<?php
include "logincheck.php";
$con=new mysqli('localhost','root','','arogyamedi');

if($con->connect_errno)
{
       echo $con->connect_error;
       die();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>login</title>
  <link rel="stylesheet" href="login.css">
</head>
<body>
  
</body>
</html>
<div class="login-box">
    <h2>Login</h2>
    <form method="POST">
      <div class="drop-box">
        <label for="Usertype">Usertype</label>
        <select name="usertype" id="Usertype">
          <option value="admin">Admin</option>
          <option value="receptionist">Receptionist</option> 
          <br>
          <br>
      </select>
     
      </div>
      <div class="user-box">
        <input type="text" name="username" required="">
        <label>Username</label>
      </div>
      <div class="user-box">
        <input type="password" name="password" required="">
        <label>Password</label>
      </div>
      <img src="img/usr.jpg" id="med">
     
      
      <a href="#">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <button  style="background: linear-gradient(#0000ef, #243b55); color:white;" type="submit" name="submit">
      
        Submit
      </button>
       
      </a>
      
    </form>
  </div>
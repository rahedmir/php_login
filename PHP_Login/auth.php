<?php
  include('connection.php'); 
  session_start();
  $username = $_POST['username'];  
  $password = $_POST['password'];  
  
  
      //to prevent from mysqli injection  
      $username = stripcslashes($username);  
      $password = stripcslashes($password);  
      $username = mysqli_real_escape_string($con, $username);  
      $password = mysqli_real_escape_string($con, $password);  
    
      $sql = "select *from user_table where user_name = '$username' and user_password = '$password'";  
      $result = mysqli_query($con, $sql);  
      $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
      $count = mysqli_num_rows($result);  
        
    

      if($count == 1){  
        $_SESSION['username'] = $username; 
        header('location:dashboard.php');
        
      }  
      else{  
          
        header('location:login.php');
        $msg="Invalid Username/Password";
      }  ?>
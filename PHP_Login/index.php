<?php
include('connection.php'); 
session_start();

$msg="";
if(isset($_POST['submit']))
{


  $username=$_POST['username'];
  $password=$_POST['password'];
  $s="select * from user_table where user_name = '$username'";
  $result=mysqli_query($con,$s);
  $num=mysqli_num_rows($result);
  if($num==1)
  {
   $msg="Username Already Taken";
   
  }
  else{
    $reg="insert into user_table(user_name,user_password)values ('$username','$password')";
    mysqli_query($con,$reg);
    header('location:login.php');
  }

}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

   
 <!--Local CSS file -->
 <link rel="stylesheet" href="css.css">
 
    <!-- Icon -->
    <link rel="icon" href="login_48.png" type='image/x-icon/'>
     
    <title>Register</title>
  </head>
  <body>
    <div class="container-fluid">

    <div class="row img-padding">
        <div class="col-md-12 text-right" >
          <img src="./img/protect_48px.png" alt="green" class="img-fluid header_img" style="float:right">
          <h5 class="header_text">Secured by Safe Guard</h5>
        </div>
      </div>


    <div class="row">

    <div class=col-md-3></div>


    <div class="col-md-6">

    <form action="index.php" method="post">
    <div class="form-group">
     <div class="row">
       <div class="col-md-12">
       <img src="./img/registration_64px.png" alt="Registration" class="img-fluid img-fluid_pad" style="float:left">
       <h2 class="log">Register</h2>
        </div>
     </div>
    <label for="name">Name</label>
    <input type="text" name="username" class="form-control" placeholder="Enter Name" required>
    <label for="password">Password</label>
    <input type="password" name="password" class="form-control" placeholder="Enter Password" required>
    <button class="btn btn-default btn-lg btn-register" value="submit" name="submit">Register</button>
    <p>Already have an account? <a href="login.php"> Login here </a></p>
    <p class="msg"><?php echo $msg?></p>
    </div>
    
    </form>
    
    </div>

    <div class=col-md-3></div>
    
    </div>
    </div>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>
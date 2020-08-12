
<?php 


session_start();

if(isset($_POST['submit-n']))
{

  
    header('location:login.php');
    session_reset();
    exit(0);
 
  }
  if(!isset($_SESSION['username']))
  {
    
      header('location: login.php');
     
      exit(0);
  }
  session_destroy();
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
    <link rel="stylesheet" href="sheet.css">

    <!-- Icon -->
    <link rel="icon" href="login_48.png" type='image/x-icon/'>

    <title>Dashboard</title>
  </head>
  <body>

    <div class="container-fluid text-center">
  
    
    <div class="row">
    <div class='col-md-2'></div>
      
    <div class="col-md-8 ">
    <form action="login.php" method="post">
    <div class="group text-center">
        <img src="./img/windows_client_300px.png" alt="Dashboard" class="img-fluid">
        <div class="row">
    <div class='col-md-12'>

    <h1>DASHBOARD </h1>
    </div>
</form>
     </div>
        
    <button class="btn btn-default btn-lg btn-logout" type="submit" name="submit-n">Logout</button>
    </div>
    </div>

    <div class='col-md-2'></div>
    </div>


    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>
<?php require 'settings.php' ?>

<?php
  $login =false;
  $err_msg ="";
  // --------------->
  if(isset($_POST['login']))
  {
    $username  = $_POST['name'];
    $pwd       = $_POST['password'];
    // $role      = $_POST['role'];
    // if($full_name != "" && $email != "" && $pwd != "" )
    // {
     $select = "SELECT * FROM employee_details WHERE username ='$username' && password='$pwd'";
     $result = mysqli_query($conn,$select);
     $num  = mysqli_num_rows($result);
     
      if($num == 1){
              $login=true;
              session_start();
              $_SESSION['username'] = $username;
              header('location:manage.php');
              exit();
        }
        else{
          $err_msg = 'incorrect username/password';
        }
      }

    // }
    
    // var_dump($_SESSION['admin_name'], $_SESSION['user_name']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Employee Login</title>
</head>
<body>
    <?php require ('nav.php');?>
    <?php
    if ($err_msg) {
        echo "<script>alert('$err_msg');</script>";
    }
    ?>
    <div class="containerr">
        <h1>Employee Login</h1>
        <form method="POST">
        
            <div class="row">
                    <label for="username">Username</label>
                    <input type="text" name="name" autocomplete="off" placeholder="username">
            </div>
            <div class="row">
                    <label for="password">Password</label>
                    <input type="password" name="password">
            </div>
        <button type="submit" name ="login">Login</button>
        <!-- <p class="last">Don't have an Account?<a href="signup.php">Register</a></p> -->
        </form>
    </div>
    <br><br><br><br>
    <!-- <?php require ('footer.php');?> -->
</body>
</html>
<?php require 'config.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Employee Registration</title>
</head>
<body>
    <nav>
            <div id="logo">
            <img src="./images/bg1.jpg" alt="img" />
            <p>Hireme</p>
            </div>
            <div class="nav1">
            <!-- <a href="index.php">Home</a> -->
            <!-- <a href="jobs.php">Jobs</a> -->
            <!-- <a href="apply.php">Apply</a> -->
            <a href="manage.php">Welcome</a>
            <a href="signup.php">Add Employee</a>
            <a href="logout.php">Logout</a>
            </div>
    </nav>
        <div class="form_contant">
        <h1>New Employee</h1>
        <form action="#" method="POST">
        <div class="row">
            <label for="username">Username</label>
            <input type="fullname" name="username" autocomplete="off" placeholder="Username" required>
        </div>
        <div class="row">
            <label for="email">Email</label>
            <input type="email" name="email" autocomplete="off" placeholder="email@example.com" required>
        </div>
        <div class="row">
            <label for="password">Password</label>
            <input type="password" name="password" required>
         </div>
    <!-- <div class ="row"> -->
    <!-- <label for="role">Role</label>
        <select name="role" id="option"> -->
            <!-- <option value="user">user</option> -->
            <!-- <option value="admin">admin</option> -->
        <!-- </select -->
    <!-- </div> -->
            <button type="submit" name= "register">Register</button>
    <!-- <p class="last">Already have an Account?<a href="login.php">Login</a></p> -->
        </form>
        </div>
    
</body>
</html>
<?php
if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $pwd = $_POST['password'];
     
    
    if ($username != "" && $email != "" && $pwd != "") {
        $select = "SELECT * FROM employee_details WHERE email='$email'";
        $result = mysqli_query($conn, $select);
     
        if (mysqli_num_rows($result) > 0) {
            $error[] = 'User already exists!';
        } else {
            $query = "INSERT INTO employee_details (username, email, password) VALUES('$username','$email','$pwd')";
            $data = mysqli_query($conn, $query);

            if ($data) {
                // echo "Data inserted into database";
                header('location: login.php');
                // exit(); // Stop further execution
            } else {
                echo "Failed to insert data";
            }
        }
    } else {
        echo "Please fill the required details";
    }
}
?>



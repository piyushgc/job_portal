<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Employee Page</title>
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
    
</body>
</html>

<?php 
session_start();

include('config.php');
$query = "SELECT *FROM form_details";
$data = mysqli_query($conn,$query);

$total = mysqli_num_rows($data);
// $result = mysqli_fetch_assoc($data);


// echo $total;

if($total != 0)
{   
    ?> 
        <h2 align="center">All Records</h2>
        <center><table border = "1" cellspacing="5" >
            <tr>
            <th  width="3%">Id</th>
            <th  width="2%">Reference Id</th>
            <th  width="8%">First Name</th>
            <th  width="8%">Last Email</th>
            <th  width="10%">DOB</th> 
            <th  width="4%">Gender</th>    
            <th  width="8%">Street Address</th>
            <th  width="8%">Town Address</th> 
            <th  width="3%">State</th> 
            <th  width="7%">Post Code</th>
            <th  width="10%">Email</th>    
            <th  width="12%">Phone</th>
            <th  width="5%">Skills</th> 
            <th  width="30%">Other</th>
            <th  width="8%">Status</th>
            </tr>
    <?php
    while($result = mysqli_fetch_assoc($data))
    {
        echo "<tr>
        
        <td>".$result['id']."</td>
        <td>".$result['reference']."</td>
        <td>".$result['fname']."</td>
        <td>".$result['lname']."</td>
        <td>".$result['dob']."</td>
        <td>".$result['gender']."</td>
        <td>".$result['saddress']."</td>
        <td>".$result['taddress']."</td>
        <td>".$result['state']."</td>
        <td>".$result['postcode']."</td>
        <td>".$result['email']."</td>   
        <td>".$result['phonenum']."</td>
        <td>".$result['skills']."</td>
        <td>".$result['other']."</td>
        <td>".$result['status']."</td>
        <td><a href='updatestatus.php?id=".$result['id']."'><input type = 'submit' value='Update' class='update' '><a href='delete.php?id=".$result['id']."'><input type = 'submit' value='Delete' class='delete' onclick = 'return checkdelete()'></a></td>
        </tr>
        ";
    }
    // echo "table has records";
}
else
{
    echo "no records";
}
 ?>


</table>
</center>

<script>
    function checkdelete()
    {
        return confirm('Are you sure you want to Delete this Record?')
    }
</script>

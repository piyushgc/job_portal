
<?php
include("settings.php");

$id = $_GET['id'];

$query = "DELETE FROM form_details WHERE id='$id'";
$data = mysqli_query($conn,$query);

if($data){
    // echo 'Record Deleted';
    
    echo "<script>alert('Record Deleted')</script>";
    
    ?>
  <meta http-equiv = "refresh" content = "0; url = http://localhost/job_portal/assign3/manage.php" />
    <?php

}
else{
    echo 'Failed';
}
?>
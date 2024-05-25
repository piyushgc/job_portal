<?php include('settings.php'); ?>
<?php

$id= $_GET['id'];
$query = "SELECT * FROM form_details WHERE id='$id'";
$data = mysqli_query($conn,$query);
$total = mysqli_num_rows($data);

$result = mysqli_fetch_assoc($data)

// error_reporting(E_ERROR | E_PARSE);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Application form</title>
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
          <a href="">Welcome</a>
          <a href="signup.php">Add Employee</a>
          <a href="logout.php">Logout</a>
          
        </div>
</nav>
    
    <section id="apply" >
        <div class="container">
          <h2>Update Form</h2>
          <form
            action=""
            method="post"
          >

            <div
              style="
                display: flex;
                flex-direction: row;
                justify-content: space-around;
              "
            >
              <label for="reference">Job Reference Number:</label>
              <input
                type="tel"
                name="reference"
                id="reference"
                maxlength="5"
                value="<?php echo $result['reference']?>"
                required
              />
            </div>
            <div
              style="
                display: flex;
                flex-direction: row;
                justify-content: space-around;
              "
            >
              <div style="display: flex; flex-direction: column">
                <label for="fname">First Name:</label>
                <input
                  type="text"
                  name="fname"
                  id="fname"
                  maxlength="20"
                  value="<?php echo $result['fname']?>"
                  required
                />
              </div>

              <div style="display: flex; flex-direction: column">
                <label for="lname">Last Name:</label>
                <input
                  type="text"
                  name="lname"
                  id="lname"
                  maxlength="20"
                  value= "<?php echo $result['lname']?>"
                  required
                /><br /><br />
              </div>
            </div>

            <div
              style="
                display: flex;
                flex-direction: row;
                justify-content: space-around;
                align-items: center;
              "
            >
              <div>
                <label for="dob">Date of Birth:</label>
                <input type="date" name="dob" id="dob" value="<?php echo $result['dob']?>" required />
              </div>

              <div>
                <label>Gender:</label>
                Male<input type="radio" name="gender" value="male"  required 
                    <?php
                        if($result['gender']=="male"){
                            echo "checked";
                        }
                     ?>
                />
                Female<input
                  type="radio"
                  name="gender"
                  value="female"
                  <?php
                        if($result['gender']=="female"){
                            echo "checked";
                        }
                     ?>
                  required
                />
              </div>
            </div>
            <br />

            <div
              style="
                display: flex;
                flex-direction: row;
                justify-content: space-around;
                align-items: center;
              "
            >
              <div style="display: flex; flex-direction: column">
                <label for="saddress">Street Address:</label>
                <input
                  type="text"
                  name="saddress"
                  id="saddress"
                  maxlength="40"
                  value="<?php echo $result['saddress']?>"
                  required
                />
              </div>

              <div style="display: flex; flex-direction: column">
                <label for="taddress">Town Address:</label>
                <input
                  type="text"
                  name="taddress"
                  id="taddress"
                  maxlength="40"
                  value="<?php echo $result['taddress']?>"
                  required
                /><br /><br />
              </div>
            </div>

            <div
              style="
                display: flex;
                flex-direction: row;
                justify-content: space-around;
                align-items: center;
              "
            >
              <div>
                <label for="state">State:</label>
                <select name="state" id="state">
                  <option value="VLC" <?php if($result['state']=='VLC' )
                {
                    echo "selected";
                }
                    ?>>VLC</option>
                  <option value="NSD" <?php if($result['state']=='NSD' )
                {
                    echo "selected";
                }
                    ?>>NSD</option>
                  <option value="QLD" <?php if($result['state']=='QLD' )
                {
                    echo "selected";
                }
                    ?>>QLD</option>
                  <option value="NT" <?php if($result['state']=='NT' )
                {
                    echo "selected";
                }
                    ?>>NT</option>
                  <option value="WA" <?php if($result['state']=='WA' )
                {
                    echo "selected";
                }
                    ?>>WA</option>
                  <option value="SA" <?php if($result['state']=='SA' )
                {
                    echo "selected";
                }
                    ?>>SA</option>
                  <option value="TAS" <?php if($result['state']=='TAS' )
                {
                    echo "selected";
                }
                    ?>>TAS</option>
                  <option value="ACT" <?php if($result['state']=='ACT' )
                {
                    echo "selected";
                }
                    ?>>ACT</option>
                </select>
              </div>
              <div>
                <label for="postcode">Post Code:</label>
                <input
                  type="text"
                  name="postcode"
                  id="postcode"
                  maxlength ="4"
                  value="<?php echo $result['postcode']?>"
                  required
                /><br /><br />
              </div>
            </div>

            <div
              style="
                display: flex;
                flex-direction: row;
                justify-content: space-around;
                align-items: center;
              "
            >
              <div style="display: flex; flex-direction: column">
                <label for="email">Email address:</label>
                <input type="email" name="email" id="email" value="<?php echo $result['email']?>" required />
              </div>

              <div style="display: flex; flex-direction: column">
                <label for="phonenum">Phone number:</label>
                <input
                  type="tel"
                  name="phonenum"
                  id="phonenum"
                  maxlength="10"
                  value="<?php echo $result['phonenum']?>"
                  required
                /><br /><br />
              </div>
            </div>
            <div
              style="
                display: flex;
                justify-content: space-around;
                align-items: center;
              "
            >
              <label>Skills:</label>
              <div>
                Python
                <input type="checkbox" name="skills[]" value="python" <?php
                        if($result['skills']=="python"){
                            echo "checked";
                        }
                     ?>/> React
                <input type="checkbox" name="skills[]" value="react" 
                <?php
                        if($result['skills']=="react"){
                            echo "checked";
                        }
                     ?>/> Node Js
                <input
                  type="checkbox"
                  name="skills[]"
                  value="node js"
                  <?php
                        if($result['skills']=="node js"){
                            echo "checked";
                        }
                     ?>/><br /><br />
              </div>
            </div>
            <div
              style="
                display: flex;
                flex-direction: row;
                justify-content: space-around;
                align-items: center;
              "
            >
              <div>
                <label for="other">Other Skills:</label><br />
                <textarea name="other" id="other" cols="94" rows="4" >
                    <?php echo $result['other'] ?>
                </textarea
                ><br />
                <div
              style="
                display: flex;
                flex-direction: row;
                justify-content: space-around;
              "
            >
              <label for="status">Status:</label>
              <input
                type="text"
                name="status"
                id="status"
                maxlength="10"
                value = "<?php echo $result['status']?>" 
                required
              />
            </div>
                <button id="submit" type="submit" name="update">Update</button>

              </div>
            </div>
          </form>
        </div>
      </section>
      <?php require ('footer.php');?>
</body>
</html>

<?php
  if(isset($_POST['update'])) {
    $ref  = $_POST['reference'];
    $fname  = $_POST['fname'];
    $lname  = $_POST['lname'];
    $dob = $_POST['dob']; 
    $gender = $_POST['gender']; 
    $saddress  = $_POST['saddress'];
    $taddress = $_POST['taddress'];
    $state = $_POST['state'];
    $postcode= $_POST['postcode'];
    $email = $_POST['email'];
    $phone = $_POST['phonenum'];
    $skills = implode(", ", $_POST['skills']);
    $other = $_POST['other'];
    $status = $_POST['status'];
    
    $query = "UPDATE form_details SET reference='$ref',fname= '$fname',lname= '$lname',dob= '$dob', gender='$gender',saddress='$saddress',taddress='$taddress',state= '$state', postcode='$postcode', email='$email',phonenum= '$phone',skills= '$skills',other= '$other',status = '$status' WHERE id= '$id'";

    $data = mysqli_query($conn, $query);
    if($data){
        echo "<script>alert('Status Updated')</script>";
      ?>
      <meta http-equiv = "refresh" content = "0; url = http://localhost/job_portal/assign3/manage.php " />
    <?php
        exit();
    } else {
      echo "Error: " . mysqli_error($conn);
    }
  }
?>

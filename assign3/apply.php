<?php include('settings.php'); ?>
<?php
session_start();

// error_reporting(E_ERROR | E_PARSE);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Application form</title>
    <style></style>
</head>
<body>
    <?php require ('nav.php');?>
    <section id="apply" >
        <div class="container">
          <h2>Apply for Job</h2>
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
                <input type="date" name="dob" id="dob" required />
              </div>

              <div>
                <label>Gender:</label>
                Male<input type="radio" name="gender" value="male" required />
                Female<input
                  type="radio"
                  name="gender"
                  value="female"
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
                  <option value="VLC">VLC</option>
                  <option value="NSD">NSD</option>
                  <option value="QLD">QLD</option>
                  <option value="NT">NT</option>
                  <option value="WA">WA</option>
                  <option value="SA">SA</option>
                  <option value="TAS">TAS</option>
                  <option value="ACT">ACT</option>
                </select>
              </div>
              <div>
                <label for="postcode">Post Code:</label>
                <input
                  type="text"
                  name="postcode"
                  id="postcode"
                  maxlength ="4"
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
                <input type="email" name="email" id="email" required />
              </div>

              <div style="display: flex; flex-direction: column">
                <label for="phonenum">Phone number:</label>
                <input
                  type="tel"
                  name="phonenum"
                  id="phonenum"
                  maxlength = "10"
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
                <input type="checkbox" name="skills[]" value="python" /> React
                <input type="checkbox" name="skills[]" value="react" /> Node Js
                <input
                  type="checkbox"
                  name="skills[]"
                  value="node js"
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
                <label for="other">Other Skills:</label><br />
                <textarea name="other" id="other" cols="94" rows="4"></textarea
                ><br />
                <button id="submit" type="submit" name="submit">Apply</button>
                
              </div>
            </div>
          </form>
        </div>
      </section>
      <?php require ('footer.php');?>
</body>
</html>

<?php
  if(isset($_POST['submit'])) {
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
    
    $query = "INSERT INTO form_details (reference, fname, lname, dob, gender,saddress, taddress, state, postcode, email, phonenum, skills, other) 
    VALUES ('$ref', '$fname', '$lname', '$dob', '$gender','$saddress', '$taddress', '$state', '$postcode', '$email', '$phone', '$skills', '$other')";

    $data = mysqli_query($conn, $query);
    if($data){
      ?>
      <meta http-equiv = "refresh" content = "0; url = http://localhost/job_portal/assign3/processEOI.php" />
    <?php
        exit();
    } else {
      echo "Error: " . mysqli_error($conn);
    }
  }
?>
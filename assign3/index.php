<?php include('settings.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Job Portal</title>
</head>
<body>
    <?php require ('nav.php');?>
    <section id="home">
        <div class="box-1">
          <h2 class="">
            IT
            Jobs
          </h2>
          <p class="">
            Hireme brought ooprtunities for you all to get a job in the IT
            industry, where companies will pay you as the market demands.
          </p>
          <br />
          <a href="about.php" class="">Explore</a>
        </div>
        <div class="box-2">
          <img src="./images/bg2.png" alt="InnoMac" class="" />
         
        </div>
      </section>

      <div class="sec">
        <div class="item1">
          <img src="./images/bg3.jpeg" alt="img" class="" />
        </div>
        <section class="item2">
          <h2 class="">Webclient<br />Solutions</h2>
          <p class="">
            Webclient Solutions are giving an opportunity to <br>the MERN developer
            whether they are experienc </p>
          <p class=" p1">-ed or fresher in the developement field.</p>
        </section>
      </div>

      <div class="sec">
        <section class="item1">
          <h2 class="">Cloud<br />Database</h2>
          <p class="">
            Cloud an IT company providing opportunity <br>to the data
            scientiest and analytics to grab a job in a <br>IT comapny which can
            boost their career in data field.
          </p>
        </section>
        <div class="item2">
          <img src="./images/bg4.jpeg" alt="img" class="" />
        </div>
      </div>

      <?php require ('footer.php');?>
</body>
</html>
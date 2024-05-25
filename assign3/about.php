<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>About Us</title>
    <style>
        body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}

.about-section {
    text-align: center;
    margin: 0 auto;
    padding: 20px;
    max-width: 800px; /* Adjust the width as needed */
}

.ab {
    margin-top: 40px;
    font-size: 2em;
}

.about-section  h2 {
    margin-top: 30px;
    font-size: 1.5em;
}

.about-section p {
    font-size: 1.1em;
    line-height: 1.6;
    margin: 20px 0;
}

    </style>
</head>
<body>
    <?php require ('nav.php');?>
    <div class="about-section">
        <h1 class="ab">About HireMe</h1>
        <p>Welcome to HireMe, your go-to job portal for finding the best opportunities. We connect talented job seekers with top employers across various industries. Our mission is to make the job search process simple and effective for everyone.</p>

        <h1 class="ab">What We Offer</h1>
        <h2>For Job Seekers:</h2>
        <p>Create a profile, upload your resume, and apply for jobs. Get matched with roles that suit your skills and experience.</p>
        
        <h2>For Employers:</h2>
        <p>Post job openings and browse through candidate profiles. Find the right fit for your company quickly and efficiently.</p>

        <h1 class="ab">Vision</h1>
        <p>At HireMe, we aim to bridge the gap between employers and job seekers. We envision a world where meaningful connections lead to fulfilling careers and successful businesses. By fostering these connections, we strive to create a more efficient and effective job market for everyone.</p>
    </div>
    <?php require ('footer.php');?>
</body>
</html>
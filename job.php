<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Welcome to jobNest one of the best job board/providing service in India. We offer high quality experience to our customers. We have some of the best jobs around the globe on our platform.">
    <meta author="Vedansh, Jatin" content="Job Nest Devs">
    <title>HireNet | Jobs - Recruitment</title>
    <link rel="icon" type="image/png" href="images/logo.webp" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.4.0/fonts/remixicon.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/style.css" />
</head>
<body>
    <header id="Navbar">
        <?php 
          include 'imp/_nav.php';
        ?>
    </header>
    <main>
    <section class="jobs-display-section section" id="Jobs">
        <h2 class="common-heading">Some of the best suited Jobs</h2>
        <div class="jobs-container grid grid-three-column">
        <?php
        include 'imp/_dbconnect.php';
        $sql = "SELECT * FROM `jobs`";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $jobTitle = $row['jobTitle'];
                $srNo = $row['srNO'];
                $jobType = $row['jobType'];
                $location = $row['location'];
                $jobShortdesc = $row['jobShortdesc'];
                $jobDesc = $row['jobDesc'];
                $minSalary = $row['minSalary'];
                $maxSalary = $row['maxSalary'];
                $tags = $row['tags'];
                $exp = $row['exp'];

                echo '<div class="job-box" data-job-count="' . $jobCount . '">';
                echo '<div class="box-top">';
                echo '<div class="profile-image"><img id="profile-pic" src="images/profile image/hiring.webp" alt="profile image"></div>';
                echo '<h3 id="company-name">' . $jobTitle . '</h3>';
                echo '</div>';
                echo '<div class="box-bottom grid-1 grid-six-rows">';
                echo '<div>';
                echo '<h4>job-role : <span id="job-role">' . $jobType . '</span></h4>';
                echo '</div>';
                echo '<div class="box-center">';
                echo '<div>';
                echo '<h4><i class="ri-map-pin-line"> Location : <span id="location">' . $location . '</span></i></h4>';
                echo '</div>';
                echo '<div><h4>salary : ₹ <span>' . $minSalary . '</span> - <span>' . $maxSalary . '</h4></div>';
                echo '</div>';
                echo '<div><h4>job Description : <span id="job-description">' . $jobShortdesc . '</span></h4></div>';
                echo '<div><h4>Exp : <span id="skills">' . $exp . '</span></h4></div>';
                echo '<div><h4>Tags : <span id="tag">' . $tags . '</span></h4></div>';
                echo '<div class="select-col appy-report">';
                echo '<button class="apply"><h4>Apply!</h4></button>';
                echo '<button class="more" onclick="knowMore('. $srNo .')">Know more</button>';
                echo '</div>';
                echo '</div>';
                echo '</div>';

                // Hidden popup container for each job
                echo '<div class="popup" id="popup-' . $srNo . '">';
                echo '<div class="popup-content">';
                echo '<span class="close-popup" data-popup-id="' . $srNo . '">&times;</span>';
                // Display job details in the popup
                echo '<div class="job-box">';
                echo '<div class="box-top">';
                echo '<div class="profile-image"><img id="profile-pic" src="images/profile image/hiring.webp" alt="profile image"></div>';
                echo '<h3 id="company-name">' . $jobTitle . '</h3>';
                echo '</div>';
                echo '<div class="box-bottom grid-1 grid-six-rows">';
                echo '<div>';
                echo '<h4>job-role : <span id="job-role">' . $jobTitle . '</span></h4>';
                echo '</div>';
                echo '<div class="box-center">';
                echo '<div>';
                echo '<h4><i class="ri-map-pin-line"> Location : <span id="location">' . $location . '</span></i></h4>';
                echo '</div>';
                echo '<div><h4>salary : ₹ <span>' . $minSalary . '</span> - <span>' . $maxSalary . '</h4></div>';
                echo '</div>';
                echo '<div><h4>job Description : <span id="job-description">' . $jobShortdesc . '</span></h4></div>';
                echo '<div><h4>Exp : <span id="skills">' . $exp . '</span></h4></div>';
                echo '<div><h4>Tags : <span id="tag">' . $tags . '</span></h4></div>';
                echo '<div class="select-col appy-report">';
                echo '<div class="apply"><h4>Apply!</h4></div>';
                echo '<div class="intrested"><h4>intrested</h4></div>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
                echo '<h3>' . $jobType . '</h3>';
                echo '<p>' . $jobShortdesc . '</p>';
                echo '<div><h4>More details : <span id="job-description">' . $jobDesc . '</span></h4></div>';
                echo '</div>';
                echo '</div>';
            }
            echo '</div>';
        } else {
            echo '<p>No job data found.</p>';
        }
        ?>
        </div>
    </section>
    </main>
    <footer class="footer-section section" id="Services">
    <?php
        include 'imp/_footer.php'
    ?>
    </footer>
    <?php include 'imp/_dbconnect.php';?>
    <script src="js/script.js"></script>
</body>
</html>

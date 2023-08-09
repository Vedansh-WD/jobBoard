<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jobs | HIRENET</title>
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
                $location = $row['location'];
                $jobShortdesc = $row['jobShortdesc'];
                $minSalary = $row['minSalary'];
                $maxSalary = $row['maxSalary'];
                $tags = $row['tags'];
                $exp = $row['exp'];
                $jobCount++;

                echo '<div class="job-box" data-job-count="' . $jobCount . '">';
                echo '<div class="box-top">';
                echo '<div class="profile-image"><img id="profile-pic" src="images/profile image/hiring.jpg" alt="profile image"></div>';
                echo '<h3 id="company-name">Hiring</h3>';
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
                echo '<div class="intrested"><h4>Know more</h4></div>';
                echo '</div>';
                echo '</div>';
                echo '</div>';

                // Hidden popup container for each job
                echo '<div class="popup" id="popup-' . $jobCount . '">';
                echo '<div class="popup-content">';
                echo '<span class="close-popup" data-popup-id="' . $jobCount . '">&times;</span>';
                // Display job details in the popup
                echo '<div class="job-box">';
                echo '<div class="box-top">';
                echo '<div class="profile-image"><img id="profile-pic" src="images/profile image/hiring.jpg" alt="profile image"></div>';
                echo '<h3 id="company-name">Hiring</h3>';
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
                echo '<div class="intrested"><h4>Know more</h4></div>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
                echo '<h3>' . $jobTitle . '</h3>';
                echo '<p>' . $jobShortdesc . '</p>';
                // Other job details Adding Hear...
                // change $jobShoetDesc into $moreDEtails in bellow code
                echo '<div><h4>More details : <span id="job-description">' . $jobShortdesc . '</span></h4></div>';
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
    <script src="script.js"></script>
</body>
</html>

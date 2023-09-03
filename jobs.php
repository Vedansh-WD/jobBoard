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
        <!-- Filter Section -->
        <section class="filters-section section">
            <?php
            include 'imp/_dbconnect.php';
            $sqlJobTypes = "SELECT DISTINCT `jobType` FROM `jobs`";
            $resultJobTypes = mysqli_query($conn, $sqlJobTypes);

            $sqlJobTitles = "SELECT DISTINCT `jobTitle` FROM `jobs`";
            $resultJobTitles = mysqli_query($conn, $sqlJobTitles);
            
            $sqlLocations = "SELECT DISTINCT `location` FROM `jobs`";
            $resultLocations = mysqli_query($conn, $sqlLocations);

            $sqlExperiences = "SELECT DISTINCT `exp` FROM `jobs`";
            $resultExperiences = mysqli_query($conn, $sqlExperiences);
            ?>

            <div class="filters">
                <form method="POST" action="">
                    <!-- Filter by Job Type -->
                    <select name="jobType" id="jobType">
                        <option value="">Job Type:</option>
                        <?php
                            while ($row = mysqli_fetch_assoc($resultJobTypes)) {
                                $jobType = $row['jobType'];
                                echo '<option value="' . $jobType . '">' . $jobType . '</option>';
                            }
                        ?>
                    </select>

                    <!-- Filter by Job Role -->
                    <select name="jobTitle" id="jobTitle">
                        <option value="">Job Title:</option>
                        <?php
                            while ($row = mysqli_fetch_assoc($resultJobTitles)) {
                                $jobTitle = $row['jobTitle'];
                                echo '<option value="' . $jobTitle . '">' . $jobTitle . '</option>';
                            }
                        ?>
                    </select>

                    <!-- Filter by Location -->
                    <select name="location" id="location">
                        <option value="">Location:</option>
                        <?php
                            while ($row = mysqli_fetch_assoc($resultLocations)) {
                                $location = $row['location'];
                                echo '<option value="' . $location . '">' . $location . '</option>';
                            }
                        ?>
                    </select>

                    <!-- Filter by Minimum Salary -->
                    <input type="number" name="minSalary" id="minSalary" placeholder="Min Salary" />

                    <!-- Filter by Maximum Salary -->
                    <input type="number" name="maxSalary" id="maxSalary" placeholder="Max Salary" />

                    <!-- Filter by Experience -->
                    <select name="exp" id="exp">
                        <option value="">Experience:</option>
                        <?php
                            while ($row = mysqli_fetch_assoc($resultExperiences)) {
                                $experience = $row['exp'];
                                echo '<option value="' . $experience . '">' . $experience . '</option>';
                            }
                        ?>
                    </select>

                    <input type="submit" value="Apply Filters">
                </form>
            </div>
        </section>
        <!-- jobs-display section start hear -->
        <section class="jobs-display-section section" id="Jobs">
            <h2 class="common-heading">Some of the best suited Jobs</h2>

            <div class="jobs-container grid grid-three-column">
            <?php
            include 'imp/_dbconnect.php';

            //  SQL query based on user-selected filters
            $sql = "SELECT * FROM `jobs` WHERE 1";

            if (!empty($_POST['jobType'])) {
                $jobType = $_POST['jobType'];
                $sql .= " AND `jobType` = '$jobType'";
            }

            if (!empty($_POST['location'])) {
                $location = $_POST['location'];
                $sql .= " AND `location` = '$location'";
            }
            
            if (!empty($_POST['minSalary']) && !empty($_POST['maxSalary'])) {
                $minSalary = $_POST['minSalary'];
                $maxSalary = $_POST['maxSalary'];
                $sql .= " AND (`minSalary` >= $minSalary OR `maxSalary` >= $minSalary) AND `maxSalary` <= $maxSalary";
            } elseif (!empty($_POST['minSalary'])) {
                $minSalary = $_POST['minSalary'];
                $sql .= " AND (`minSalary` >= $minSalary OR `maxSalary` >= $minSalary)";
            } elseif (!empty($_POST['maxSalary'])) {
                $maxSalary = $_POST['maxSalary'];
                $sql .= " AND (`maxSalary` <= $maxSalary OR `minSalary` <= $maxSalary)";
            }
            
            if (!empty($_POST['exp'])) {
                $exp = $_POST['exp'];
                $sql .= " AND `exp` = '$exp'";
            }

            if (!empty($_POST['jobTitle'])) {
                $jobTitle = $_POST['jobTitle'];
                $sql .= " AND `jobTitle` = '$jobTitle'";
            }
            

            $result = mysqli_query($conn, $sql);

            if (!$result) {
                die("Error: " . mysqli_error($conn));
            }
            
            // Display filtered jobs
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
                    
                    // Display job details for each job
                    echo '<div class="job-box">';
                    echo '<div class="box-top">';
                    echo '<div class="profile-image"><img id="profile-pic" src="images/profile image/hiring.webp" alt="profile image"></div>';
                    echo '<h3 id="company-name">' . $jobTitle . '</h3>';
                    echo '</div>';
                    echo '<div class="box-bottom grid-1 grid-six-rows">';
                    echo '<div>';
                    echo '<h4>Job Role: <span id="job-role">' . $jobType . '</span></h4>';
                    echo '</div>';
                    echo '<div class="box-center">';
                    echo '<div>';
                    echo '<h4><i class="ri-map-pin-line"> Location: <span id="location">' . $location . '</span></i></h4>';
                    echo '</div>';
                    echo '<div><h4>Salary: ₹ <span>' . $minSalary . '</span> - <span>' . $maxSalary . '</h4></div>';
                    echo '</div>';
                    echo '<div><h4>Job Description: <span id="job-description">' . $jobShortdesc . '</span></h4></div>';
                    echo '<div><h4>Experience: <span id="skills">' . $exp . '</span></h4></div>';
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
            } else {
                echo '<p>No job data found.</p>';
            }
            ?>
            </div>
        </section>
    <main>
    <footer class="footer-section section" id="Services">
        <?php
            include 'imp/_footer.php'
        ?>
    </footer>
    <?php include 'imp/_dbconnect.php';?>
    <script src="js/script.js"></script>
</body>
</html>

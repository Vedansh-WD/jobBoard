<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title> HireNet | Find Jobs in india</title>
    <link rel="icon" type="image/png" href="images/logo.webp" />
    <meta name="description" content="Welcome to jobNest one of the best job board/providing service in India. We offer high quality experience to our customers.">
    <meta author="Vedansh, Jatin" content="Job Nest Devs">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.4.0/fonts/remixicon.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/style.css" />
    <meta name="google-site-verification" content="JpNG03a-Gmz7K9xL0yNaUiHYGsgb37q_jjS6V1Fc0SA" />
</head>
<body>
    <header id="Navbar">
        <?php 
          include 'imp/_nav.php';
        ?>
    </header>
    <main>
        <!-- hero-section start hear -->
        <section class="hero-section section">
            <div class="hero-image"><img src="images/carousel-img-1.webp" alt="We Are Hireing"></div>
        </section>
        <!-- Filter section start hear -->
        <!-- <section class="filters-section section">
            <div class="filter">

                <select id="Skills">
                    <option value="">Job By Skills :</option>
                    <option value="IT">IT</option>
                    <option value="Computer Skills">Computer Skills</option>
                    <option value="Data Entry">Data Entry</option>
                    <option value="Assistant">Assistant</option>
                    <option value="Finance">Finance</option>
                    <option value="Marketing">Marketing</option>
                </select>

                <select id="location">
                    <option value="">Job By Location:</option>
                    <option value="Remote">Remote</option>
                    <option value="5km">Within 5km</option>
                    <option value="10km">Within 10km</option>
                    <option value="20km">Within 20km</option>
                    <option value="30km">Within 30km</option>
                    <option value="50km">Within 50km</option>
                    <option value="50km">Any Location</option>
                </select>

                <select id="type">
                    <option value="">Job By Type:</option>
                    <option value="Fresher">Fresher</option>
                    <option value="Intership">Intership</option>
                    <option value="Full-time">Full-time</option>
                    <option value="Part-time">Part-time</option>
                    <option value="Contract">Contract</option>
                    <option value="Teporary">Teporary</option>
                </select>

                <select id="salaryFilter">
                    <option value="">Job By Salary:</option>
                    <option value="0-50000">Up to ₹20,000</option>
                    <option value="0-50000">₹20,000 to ₹40,000</option>
                    <option value="0-50000">₹40,000 to ₹50,000</option>
                    <option value="50000-100000">₹50,000 - ₹60,000</option>
                    <option value="100000-150000">₹60,000 and Above</option>
                </select>
                <button onclick="applyFilters()">Apply Filters</button>
            </div>

            <div id="jobList">
                Job listing results will be displayed here
            </div>
        </section> -->
        <!-- jobs-display section start hear -->
        <section class="jobs-display-section section" id="Jobs">
            <h2 class="common-heading">Some Popular Jobs</h2>
            <div class="jobs-container grid grid-three-column">
                
                <!-- job from database -->
                <?php
                include 'imp/_dbconnect.php';
                $sql = "SELECT * FROM `jobs`";
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        if ($jobCount >= 3) {
                            break; // Edit displaying jobs in home page
                        }
                        $jobTitle = $row['jobTitle'];
                        $location = $row['location'];
                        $jobShortdesc = $row['jobShortdesc'];
                        $minSalary = $row['minSalary'];
                        $maxSalary = $row['maxSalary'];
                        $tags = $row['tags'];
                        $exp = $row['exp'];
                        echo '<div class="job-box">';
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
                        echo '<button class="apply"><h4><a href="https://hirenet.orgfree.com/jobs.php">Apply!</a></h4></button>';
                        echo '<button class="more"><h4><a href="https://hirenet.orgfree.com/jobs.php"> Know more</a></h4></button>';
                        echo '</div>';
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
        <!-- Contact section start hear -->
        <section class="section-contact section" id="Contact">
            <h2 class="common-heading">Contact</h2>
            <div class="section-contact-main contact-container">
                <form action="https://formspree.io/f/xrgwqrze" method="POST">
                    <div class="grid grid-tow-column">
                        <div>
                            <label for="username"></label>
                            <input type="text" name="username" placeholder="Username" id="username" autocomplete="off"
                                required />
                        </div>
                        <div>
                            <label for="Email"></label>
                            <input type="email" name="Email" placeholder="someone@example.com" id="Email"
                                autocomplete="off" required />
                        </div>
                    </div>

                    <div>
                        <label for="text"></label>
                        <input type="text" name="subject" placeholder="Subject" autocomplete="off" required />
                    </div>
                    <div>
                        <label for="textarea"></label>
                        <textarea name="textarea" id="textarea" cols="30" rows="10" placeholder="Message"
                            autocomplete="off" required></textarea>
                    </div>

                    <div>
                        <input type="submit" name="submit" id="submit" class="btn" />
                    </div>
                </form>
            </div>
        </section>
    </main>
    <!-- Footer section start hear -->
    <footer class="footer-section section" id="Services">
        <?php
            include 'imp/_footer.php'
        ?>
    </footer>
    <?php include 'imp/_dbconnect.php';?>
    <script src="js/script.js"></script>
</body>
</html
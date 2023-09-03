<!DOCTYPE html>
<html>
<head>
    <title> HireNet | Login Here </title>
    <meta name="description" content="Welcome to jobNest one of the best job board/providing service in India. We offer high quality experience to our customers. Login fast and get hired by your dream companies.">
    <meta author="Vedansh, Jatin" content="Job Nest Devs">
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
    <div class="login-section section">
        <h2 class="common-heading">Login</h2>
        <div class="login-container">
            <form action="imp/_loginsubmit.php" method="post">
                <div>
                    <label for="username">
                        <h4>Username:</h4>
                    </label>
                    <input type="text" id="username" name="username" required />
                </div>
                <div>
                    <label for="email">
                        <h4>Email:</h4>
                    </label>
                    <input type="email" id="email" name="email" required />
                </div>
                <div>
                    <label for="password">
                        <h4>Password:</h4>
                    </label>
                    <input type="password" id="password" name="password" required />
                </div>
                <div>
                    <input type="submit" value="Submit" />
                </div>
            </form>
            <div class="grid grid-tow-column">
                <div>
                    <a href="#">
                        <h4>Forgot Password</h4>
                    </a>
                </div>
                <div>
                    <a href="register.php">
                        <h4>I Am New! Register Hear</h4>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer-section section" id="Services">
        <div class="grid-2 grid-four-column">
            <div class="f-about">
                <h3>About</h3>
                <p>Welcome to our job portal website, connecting job seekers with opportunities and helping employers
                    find the perfect candidates.</p>
            </div>

            <div class="f-links">
                <h3>Links</h3>
                <ul>
                    <li>
                        <i class="ri-corner-down-right-line"></i>
                        <a href="#Navbar">Home</a>
                    </li>
                    <li>
                        <i class="ri-corner-down-right-line"></i>
                        <a href="#Jobs">Jobs</a>
                    </li>
                    <li>
                        <i class="ri-corner-down-right-line"></i>
                        <a href="#About">About</a>
                    </li>
                    <li>
                        <i class="ri-corner-down-right-line"></i>
                        <a href="#Service">Services</a>
                    </li>
                    <li>
                        <i class="ri-corner-down-right-line"></i>
                        <a href="#Contact">contact</a>
                    </li>
                </ul>
            </div>

            <div class="f-service">
                <h3>Services</h3>
                <ul>
                    <li>
                        <i class="ri-corner-down-right-line"></i>
                        <a href="#Job-Seekers">Job Seekers</a>
                    </li>
                    <li>
                        <i class="ri-corner-down-right-line"></i>
                        <a href="#Employers">Employers</a>
                    </li>
                    <li>
                        <i class="ri-corner-down-right-line"></i>
                        <a href="#Career-Development">Career Development</a>
                    </li>
                    <li>
                        <i class="ri-corner-down-right-line"></i>
                        <a href="#Resume-Builder">Resume Builder</a>
                    </li>
                </ul>
            </div>

            <div class="f-address">
                <h3>Have a Questions?</h3>
                <address>
                    <div>
                        <p><i class="ri-map-pin-line"></i> India</p>
                    </div>
                    <div>
                        <p><i class="ri-mail-unread-line"></i>
                            <a href="mailto:hirenet.mod@gmail.com"> hirenet.mod@gmail.com</a>
                        </p>
                    </div>
                    <div>
                        <p><i class="ri-phone-line"></i>
                            <a href="tel:+9193********">+91 93******50</a>
                        </p>
                    </div>
                </address>
            </div>
        </div>
        </div>
    </footer>
</body>

</html>
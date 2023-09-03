<!DOCTYPE html>
<html>
  <head>
    <title> HireNet | Singup Now </title>
    <meta name="description" content="Welcome to jobNest one of the best job board/providing service in India. We offer high quality experience to our customers. Sign up fast and get the jobs of all time">
    <meta author="Vedansh, Jatin" content="Job Nest Devs">
    <link rel="icon" type="image/png" href="images/logo.webp"/>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.4.0/fonts/remixicon.css"rel="stylesheet"/>
    <link rel="stylesheet" href="css/style.css"/>
  </head>
  <body>
    <header id="Navbar">
    <?php 
          include 'imp/_nav.php';
        ?>
    </header>
    <div class="singup-section section">
      <h2 class="common-heading">Singup</h2>
      <div class="singup-container">
        <form action="imp/_signup.php" method="post">
            <div>
                <label for="username"><h4>Name:</h4></label>
                <input
                    type="text"
                    name="username"
                    placeholder="Username"
                    id="username"
                    autocomplete="off"
                    required
                />
            </div>
            <div>
                <label for="email"><h4>Email:</h4></label>
                <input
                    type="email"
                    name="email"
                    placeholder="someone@example.com"
                    id="Email"
                    autocomplete="off"
                    required
                />
            </div>
            <div>
                <label for="password"><h4>Password:</h4></label>
                <input
                    type="password"
                    name="password"
                    placeholder="Password"
                    id="password"
                    autocomplete="off"
                    required
                />
            </div>
            <div>
                <label for="confirm_password"><h4>Confirm Password:</h4></label>
                <input
                    type="password"
                    name="confirm_password"
                    placeholder="Confirm Password"
                    id="confirm_password"
                    autocomplete="off"
                    required
                />
            </div>
            <div>
                <label for="country"><h4>Country:</h4></label>
                <input
                    type="text"
                    name="country"
                    placeholder="Country"
                    id="country"
                    autocomplete="off"
                    required
                />
            </div>
            <div>
                <label for="phone_number"><h4>Phone Number:</h4></label>
                <input
                    type="tel"
                    name="phone_number"
                    placeholder="Phone Number"
                    id="phone_number"
                    autocomplete="off"
                    required
                />
            </div>
            <div>
                <h4>Gender:</h4>
                <div class="gender-container">
                    <label>
                        <input type="radio" name="gender" value="male" required /> <h4>Male</h4>
                    </label>
                    <label>
                        <input type="radio" name="gender" value="female" required /> <h4>Female</h4>
                    </label>
                    <label>
                        <input type="radio" name="gender" value="other" required /> <h4>Other</h4>
                    </label>
                </div>
            </div>
            <div>
                <label for="skills"><h4>Skills:</h4></label>
                <input
                    type="text"
                    name="skills"
                    placeholder="Skills (e.g., Web Development, Design)"
                    id="skills"
                    autocomplete="off"
                    required
                />
            </div>
            <div>
                <label for="industry"><h4>Industry:</h4></label>
                <input
                    type="text"
                    name="industry"
                    placeholder="Industry"
                    id="industry"
                    autocomplete="off"
                    required
                />
            </div>          
            <div class="btn-submit">
              <input type="submit" value="Submit" />
            </div> 
        </form>  
        <div>
            <a href="login.html"><span id="forSignup">Already Have an Account</span></a>
        </div> 
      </div>
    </div>
    <footer class="footer-section section" id="Services">
    <?php
            include 'imp/_footer.php'
        ?>
    </footer>
  </body>
</html>

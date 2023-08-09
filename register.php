<!DOCTYPE html>
<html>
  <head>
    <title> HireNet | Singup Now </title>
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
            <a href="login.html"><h4>Already Have Account</h4></a>
        </div> 
      </div>
    </div>
    <footer class="footer-section section" id="Services">
        <div class="grid-2 grid-four-column">
            <div class="f-about">
                <h3>About</h3>
                <p>Welcome to our job portal website, connecting job seekers with opportunities and helping employers find the perfect candidates.</p>
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
                    <a href = "mailto:hirenet.mod@gmail.com"> hirenet.mod@gmail.com</a></p>
                </div>
                <div>
                  <p><i class="ri-phone-line"></i>
                    <a href="tel:+9193********">+91 93******50</a></p>
                </div>
              </address>
            </div>    
          </div>
        </div>
    </footer>
  </body>
</html>

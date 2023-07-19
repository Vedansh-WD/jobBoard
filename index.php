<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> HireNet | Find A Jobs in india</title>
    <link rel="icon" type="image/png" href="img/logo.png"/>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.4.0/fonts/remixicon.css"rel="stylesheet"/>
    <link rel="stylesheet" href="css/style.css"/>
</head>
<body>
<?php include 'imp/dbconnect.php';?>
<header id="Navbar">
        <img src="img/logo.png" alt="logo"  id="logo" >
        <nav class="navbar">
            <ul class="navbar-list">
                <li><a href="#Navbar" class="navbar-link Home">Home</a></li>
                <li><a href="#Jobs" class="navbar-link Jobs">Jobs</a></li>
                <li><a href="#Services" class="navbar-link About">About</a></li>
                <li><a href="#Services" class="navbar-link Services">Services</a></li>
                <li><a href="#Contact" class="navbar-link Contact">Contact</a></li>
            </ul>           
        </nav>
</header> 
<main>
    <!-- hero-section start hear -->
    <section class="hero-section section">
      <!--  -->
        <div class="hero-image"><img src="img/car2.jpg" alt="We Are Hiring"></div>
    </section>
    <!-- Filter section start hear -->
    <section class="filters-section section">
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
                <!-- Job listing results will be displayed here -->
        </div>
    </section>
    <!-- jobs-display section start hear -->
    <section class="jobs-display-section section" id="Jobs">
        <h2 class="common-heading">Some Popular Jobs</h2>
        <div class="jobs-container grid grid-three-column">
<!--   =============================jobs start=============================  -->
            <div class="job-box">
                <div class="box-top">
                    <div class="profile-image"><img id="profile-pic" src="images/profile image/tcs.png" alt="profile image"></div>
                    <h3 id="company-name">Tata Consultancy Services</h3>
                </div>
                <div class="box-bottom grid-1 grid-six-rows">
                    <div><h4>job-role : <span id="job-role">Front-end Devloper also backend </span></h4></div>
                    <div class="box-center">
                    <div><h4><i class="ri-map-pin-line"> Location : <span id="location">Gujarat</span></i></h4></div>
                    <div><h4>salary : ₹ <span>20,000</span></h4></div>
                    </div>
                    <div><h4>job Description : <span id="job-description">We’re looking for a Front-end developer who will take a key role on our team.</span></h4></div>
                    <div><h4>Skills : <span id="skills">HTML:5 , CSS , JAVASCRIPT</span></h4></div>
                    <div><h4>Tags : <span id="tag">#Fronted_Devloper,#HTML,#JAVASCRPIT</span></h4></div>
                    <div class="appy-report">
                        <div class="apply"><h4>Apply Now</h4></div>
                        <div class="Report"><h4>Report Job</h4></div>
                    </div>                     
                </div>
            </div>   
            
            <div class="job-box">
                <div class="box-top">
                    <div class="profile-image"><img id="profile-pic" src="images/profile image/amazon.jpg" alt="profile image"></div>
                    <h3 id="company-name">Amazone</h3>
                </div>
                <div class="box-bottom grid-1 grid-six-rows">
                    <div><h4>job-role : <span id="job-role">Backend-end Devloper</span></h4></div>
                    <div class="box-center">
                    <div><h4><i class="ri-map-pin-line"> Location : <span id="location">Bangalore</span></i></h4></div>
                    <div><h4>salary : ₹ <span>50,000</span></h4></div>
                    </div>
                    <div><h4>job Description : <span id="job-description">We’re looking for a Back-end  developer who will take a key role on our team.</span></h4></div>
                    <div><h4>Skills : <span id="skills">Next.js ,Pythone ,JAVASCRIPT</span></h4></div>
                    <div><h4>Tags : <span id="tag">#Backend_Devloper,#Next.js,#JAVASCRPIT</span></h4></div>
                    <div class="appy-report">
                        <div class="apply"><h4>Apply Now</h4></div>
                        <div class="Report"><h4>Report Job</h4></div>
                    </div>                     
                </div>
            </div>  

            <div class="job-box">
                <div class="box-top">
                    <div class="profile-image"><img id="profile-pic" src="images/profile image/tcs.png" alt="profile image"></div>
                    <h3 id="company-name">Tata Consultancy Services</h3>
                </div>
                <div class="box-bottom grid-1 grid-six-rows">
                    <div><h4>job-role : <span id="job-role">Fullstack Devloper</span></h4></div>
                    <div class="box-center">
                    <div><h4><i class="ri-map-pin-line"> Location : <span id="location">Gujarat</span></i></h4></div>
                    <div><h4>salary : ₹ <span>70,000</span></h4></div>
                    </div>
                    <div><h4>job Description : <span id="job-description">We’re looking for a Full Stack developer who will take a key role on our team.</span></h4></div>
                    <div><h4>Skills : <span id="skills">HTML:5 , CSS , JAVASCRIPT , Node.js</span></h4></div>
                    <div><h4>Tags : <span id="tag">#Fronted_Devloper,#Fullstack_Devloper,#HTML,#JAVASCRPIT,#Next.js</span></h4></div>
                    <div class="appy-report">
                        <div class="apply"><h4>Apply Now</h4></div>
                        <div class="Report"><h4>Report Job</h4></div>
                    </div>                     
                </div>
            </div>  

            <div class="job-box">
                <div class="box-top">
                    <div class="profile-image"><img id="profile-pic" src="images/profile image/tcs.png" alt="profile image"></div>
                    <h3 id="company-name">Tata Consultancy Services</h3>
                </div>
                <div class="box-bottom grid-1 grid-six-rows">
                    <div><h4>job-role : <span id="job-role">Front-end Devloper also backend </span></h4></div>
                    <div class="box-center">
                    <div><h4><i class="ri-map-pin-line"> Location : <span id="location">Gujarat</span></i></h4></div>
                    <div><h4>salary : ₹ <span>20,000</span></h4></div>
                    </div>
                    <div><h4>job Description : <span id="job-description">We’re looking for a Full Stack developer who will take a key role on our team.</span></h4></div>
                    <div><h4>Skills : <span id="skills">HTML:5 , CSS , JAVASCRIPT</span></h4></div>
                    <div><h4>Tags : <span id="tag">#Fronted_Devloper,#HTML,#JAVASCRPIT</span></h4></div>
                    <div class="appy-report">
                        <div class="apply"><h4>Apply Now</h4></div>
                        <div class="Report"><h4>Report Job</h4></div>
                    </div>                     
                </div>
            </div>  

    <!--   =============================jobs end =============================  -->          
    </section>
    <!-- Contact section start hear -->
    <section class="section-contact section" id="Contact">
        <h2 class="common-heading">Contact</h2>
        <div class="section-contact-main contact-container">
          <form action="https://formspree.io/f/xeqbqndk" method="POST">
            <div class="grid grid-tow-column">
              <div>
                <label for="username"></label>
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
                <label for="Email"></label>
                <input
                  type="email"
                  name="Email"
                  placeholder="someone@example.com"
                  id="Email"
                  autocomplete="off"
                  required
                />
              </div>
            </div>

            <div>
              <label for="text"></label>
              <input
                type="text"
                name="subject"
                placeholder="Subject"
                autocomplete="off"
                required
              />
            </div>
            <div>
              <label for="textarea"></label>
              <textarea
                name="textarea"
                id="textarea"
                cols="30"
                rows="10"
                placeholder="Message"
                autocomplete="off"
                required
              ></textarea>
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
        <div class="grid-2 grid-four-column">
            <div class="f-about">
                <h3>About</h3>
                <p class="footer-text">Welcome to our job portal website, connecting job seekers with opportunities and helping employers find the perfect candidates.</p>
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

<script src="script.js"></script>
</body>
</html>


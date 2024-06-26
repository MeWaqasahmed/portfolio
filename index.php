<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: pages/login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Portfolio</title>
    <!-- favicon -->
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon" />
    <!-- font awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    />
    <!-- AOS  (animate on scroll) -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css"
    />
    <!-- GOOGLE Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2:wght@400;800&family=Poppins:wght@500&display=swap"
      rel="stylesheet"
    />
    <!-- Glide js (images slider)-->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.5.0/css/glide.core.css"
    />
    <!-- custom stylesheet -->
    <link rel="stylesheet" href="images/style2.css" />
</head>
<body>
    <!-- Header -->
    <header id="home" class="header">
        <!-- Navigation -->
        <nav class="nav">
            <div class="navigation container">
                <div class="logo">
                    <h1>WAQAS <span>A</span>HMED</h1>
                </div>

                <div class="menu">
                    <div class="top-nav">
                        <div class="logo">
                            <h1>Waqas<span>S</span>ingh</h1>
                        </div>

                        <div class="close">
                            <i class="fas fa-times"></i>
                        </div>
                    </div>
                    <ul class="nav-list">
                        <li class="nav-item"><a href="#home" class="nav-link">Home</a></li>
                        <li class="nav-item"><a href="#about" class="nav-link">About</a></li>
                        <li class="nav-item"><a href="#services" class="nav-link">Services</a></li>
                        <li class="nav-item"><a href="#skills" class="nav-link">Skills</a></li>
                        <li class="nav-item"><a href="#contact" class="nav-link">Contact</a></li>
                        <li class="nav-item"><a href="./logout.php" class="nav-link">Logout</a></li>
                    </ul>
                </div>
                <!-- Hamburger icon menu -->
                <div class="hamburger">
                    <i class="fas fa-bars"></i>
                </div>
            </div>
        </nav>
        <!-- Hero Image Side Component Content -->
        <div class="hero">
            <h3>Hello, My name is</h3>
            <h1>Waqas Ahmed</h1>
            <h4>And I'm a <span id="type1" class="typeit"></span></h4>
            <a href="https://www.upwork.com/services/product/development-it-signup-and-login-page-1563941396046155776">Hire Me</a>
        </div>
        <img src="images/hero.png" alt="hero image" />

        <!-- Icons -->
        <div class="icons">
            <span><i class="fab fa-facebook"></i></span>
            <span><i class="fab fa-instagram"></i></span>
            <span><i class="fab fa-twitter"></i></span>
            <span><i class="fab fa-youtube"></i></span>
            <span><i class="fab fa-google"></i></span>
        </div>

        <!-- color control -->
        <div class="control">
            <div class="widget">
                <i class="fas fa-cog"></i>
            </div>
            <div class="colors">
                <span data-id="#0044FF"></span>
                <span data-id="#FF4600"></span>
                <span data-id="#CE00FF"></span>
                <span data-id="#c2c510"></span>
                <span data-id="#2dc40e"></span>
            </div>
        </div>
    </header>

    <!-- Main Component Starts Here ###### -->

    <!-- Main -->
    <section class="section about" id="about">
        <div class="title">
            <h1>About me</h1>
        </div>

        <div class="about-center container">
            <div class="left" data-aos="fade-right" data-aos-duration="2000">
                <img src="./hawk white.jpg" alt="Profile Pic" />
            </div>
            <div class="right" data-aos="fade-left" data-aos-duration="2000">
                <h1>I'm Waqas Ahmed <span id="type2"></span></h1>
                <p>
                    I'm 22 years old and i'm pursuing for BsCS  from a top ranked university (<a href="https://qau.edu.pk/" target="_blank">QAU</a>) of Pakistan . I have completed various projects as you can check them out on my <a href="https://github.com/MeWaqasahmed" target="_blank">Github</a>. If you like my projects and design then please give it a star. I have work experience of various Web Development and Python Development technologies. I mostly like to work on Frontend Development Projects with Frameworks.During my studies i am working as a CEO at <a href="https://www.facebook.com/profile.php?id=61558871184155" target="_blank">Burak marketing agency</a>
                </p>
                <a href="Waqas_Ahmed_Resume.pdf" class="btn" target="_blank">Download Resume</a>
            </div>
        </div>
    </section>

    <!-- Services -->
    <section class="section theme" id="services">
        <div class="title">
            <h1>My Services</h1>
        </div>

        <div class="services-center container">
            <div class="service" data-aos="fade-down" data-aos-duration="2000">
                <span><i class="fab fa-accusoft"></i></span>
                <h2>Web Designing & Development</h2>
                <p>
                    I can create most scalable and flexible High End Web Apps with Modern Era UI Designing. It will also include fully responsive design which can perfectly render on every resolution.
                </p>
            </div>

            <div class="service" data-aos="fade-up" data-aos-duration="2000">
                <span><i class="fas fa-chart-line"></i></span>
                <h2>Advertising Network</h2>
                <p>
                    Advertising Services are also provided with Premium Ad Networks like Google Ads , Facebook Ads , Media.net , etc. This will help your products to reach your customer very well.
                </p>
            </div>

            <div class="service" data-aos="fade-down" data-aos-duration="2000">
                <span><i class="fas fa-blender-phone"></i></span>
                <h2>Desktop Development</h2>
                <p>
                    I can also build Startup  or any Enterprise level Desktop Applications with a clean and nice UI. You can easily manage your business with best in class Software having Advanced Protection.
                </p>
            </div>
        </div>
    </section>

    <!-- Skills -->
    <section class="section skills" id="skills">
        <div class="title">
            <h1>My Skills</h1>
        </div>

        <div class="skills-center container">
            <div class="skills-left" data-aos="fade-right" data-aos-duration="2000">
                <div class="skills-box">
                    <h4>HTML5</h4>
                    <div class="skills-ilt">
                        <div class="skills-bar html"></div>
                        <span>70%</span>
                    </div>
                </div>
                <div class="skills-box">
                    <h4>CSS</h4>
                    <div class="skills-ilt">
                        <div class="skills-bar css"></div>
                        <span>60%</span>
                    </div>
                </div>
                <div class="skills-box">
                    <h4>JavaScript</h4>
                    <div class="skills-ilt">
                        <div class="skills-bar javascript"></div>
                        <span>60%</span>
                    </div>
                </div>
                <div class="skills-box">
                    <h4>ReactJs</h4>
                    <div class="skills-ilt">
                        <div class="skills-bar reactjs"></div>
                        <span>60%</span>
                    </div>
                </div>

                <div class="skills-box">
                    <h4>Python</h4>
                    <div class="skills-ilt">
                        <div class="skills-bar python"></div>
                        <span>70%</span>
                    </div>
                </div>
                <div class="skills-box">
                    <h4>Meta ads managment</h4>
                    <div class="skills-ilt">
                        <div class="skills-bar python"></div>
                        <span>95%</span>
                    </div>
                </div>

                <div class="skills-box">
                    <h4>C++</h4>
                    <div class="skills-ilt">
                        <div class="skills-bar c"></div>
                        <span>80%</span>
                    </div>
                </div>

                <div class="skills-box">
                    <h4>MySQL</h4>
                    <div class="skills-ilt">
                        <div class="skills-bar mysql"></div>
                        <span>60%</span>
                    </div>
                </div>

                <div class="skills-box">
                    <h4>PHP</h4>
                    <div class="skills-ilt">
                        <div class="skills-bar php"></div>
                        <span>50%</span>
                    </div>
                </div>
                
                <div class="skills-box">
                    <h4>SEO</h4>
                    <div class="skills-ilt">
                        <div class="skills-bar seo"></div>
                        <span>70%</span>
                    </div>
                </div>

                <div class="skills-box">
                    <h4>Blogging</h4>
                    <div class="skills-ilt">
                        <div class="skills-bar blogging"></div>
                        <span>50%</span>
                    </div>
                </div>
            </div>

            <div class="right" data-aos="fade-left" data-aos-duration="2000">
                <h3>My creative skills and experience</h3>
                <p>
                    <br>
                    I also try to write code in efficient manner with proper comments and descriptive syntax so that no one can face any problems regarding my codebase. I always try pursue for an attractive and modern looking design because it's the best way to attract the person's attention towards my project. I try to learn various skills as fast as possible because i always have a strong desire for knowledge, which i get from various communities and by doing some googling stuff ; ). My Dream is to get a Job in well reputed company with an awesome salary package.     
                </p>
                <br>
                <a href="https://www.facebook.com/h.waqas.100/" target='_blank' class="btn"><i class="fab fa-facebook"></i></a>
                <a href="https://www.instagram.com/itswaqasahmed/" target='_blank' class="btn"><i class="fab fa-instagram"></i></a>
                <a href="https://www.youtube.com/" target='_blank' class="btn"><i class="fab fa-youtube"></i></a>
                <a href="https://github.com/MeWaqasahmed" target='_blank' class="btn"><i class="fab fa-github"></i></a>
            </div>
        </div>
    </section>

    <!-- Teams -->
    <section class="section theme" id="teams">
        <div class="title">
            <h1>My Teamates</h1>
        </div>

        <div class="teams-center container">
            <div class="glide">
                <div class="glide__track" data-glide-el="track">
                    <ul class="glide__slides">
                        <li class="glide__slide">
                            <div class="team">
                                <div class="img-cover">
                                    <img src="./white.jpg" alt="" />
                                </div>
                                <h3>Waqas Ahmed</h3>
                                <p>
                                    I'm alone in my team , mostly do Web Development Projects which includes Static Web Pages and Dynamic Web Apps.
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact -->
    <section class="section contact" id="contact">
        <div class="title">
            <h1>Contact Me</h1>
        </div>

        <div class="contact-center container">
            <div class="left" data-aos="fade-down-right" data-aos-duration="2000">
                <h2>Get in Touch</h2>
                <p>
                    Feel Free to Contact. Just email me or fill your details in the form and send , i will reply you soon as possible.
                </p>
                <div>
                    <span class="icon"><i class="fas fa-user"></i></span>
                    <span class="content">
                        <h3>Name</h3>
                        <span>Waqas Ahmed</span>
                    </span>
                </div>

                <div>
                    <span class="icon"><i class="fas fa-map-marker-alt"></i></span>
                    <span class="content">
                        <h3>Address</h3>
                        <span>Islamabad, Pakistan </span>
                    </span>
                </div>

                <div>
                    <span class="icon"><i class="fas fa-envelope"></i></span>
                    <span class="content">
                        <h3>Email</h3>
                        <span>mwahmed009@gmail.com</span>
                    </span>
                </div>
            </div>
            <div class="right" data-aos="fade-up-left" data-aos-duration="2000">
                <form action="contact_form.php" method="post" class="form">
                    <h2>Message me</h2>
                    <div>
                        <input type="text" name="name" placeholder="Name" />
                        <input type="email" name="email" placeholder="Email" />
                    </div>
                    <input type="text" name="subject" placeholder="Subject" />
                    <textarea name="message" cols="10" rows="10" placeholder="Describe Project"></textarea>
                    <a href="#" class="btn" onclick="alert('Under Development')">Send Message</a>
                </form>
            </div>
        </div>
    </section>

    <footer>
        <p>Created By <span>Waqas Ahmed</span> | &copy; 2024 All rights reserved.</p>
    </footer>

    <!-- AOS JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <!-- Typeit -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typeit/7.0.4/typeit.min.js"></script>
    <!-- Glide js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.5.0/glide.min.js"></script>
    <!-- Custom JavaScript -->
    <script src="script.js"></script>
</body>
</html>

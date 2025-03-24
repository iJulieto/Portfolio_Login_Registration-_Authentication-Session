<?php
    include ('functions.php');
    
    if (!isset($_SESSION['username'])) {
        header('Location: login.php');
        exit();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio - About</title>
    <link rel="icon" href="images/Icon.jpg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="navbar-brand" href="dashboard.php"><img src="images/Icon.jpg" class="img-fluid " width="60" height="60" alt="Portfolio Logo"></a>
                </li>
                </ul>
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="projects.php">Projects</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="skills.php">Skills</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                <li class="nav-item">
                    <h5><a class="nav-link active" href="account.php"><i class="fa-solid fa-user"></i></a></h5>
                </li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="py-3 bg-light">
        <div class="container mb-5">
            <a href="dashboard.php" class="btn btn-dark">Go to Dashboard</a>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 mb-4 mb-lg-0">
                    <h2 class="mb-4">About Me</h2>
                    <p class="lead">A passionate developer and a student leader.</p>
                    
                    <p>I'm a student leader and web developer that simutaneously blends leadership, creativity, and technical expertise to inspire peers and drive digital innovation. I take initiative in organizing projects, solving problems, and fostering teamwork while developing functional, user-friendly websites and applications. </p>
                    <h2 class="mt-4 mb-3">My Leadership Journey</h2>
                    <div class="timeline">
                        <div class="timeline-item mb-4">
                            <h4 class="h5">SSC - Grade 11 TVL Representative</h4>
                            <p class="text-muted">Pmftci - Supreme Student Council</p>
                            <p>(2021 - 2022)</p>
                        </div>
                        <div class="timeline-item mb-4">
                            <h4 class="h5">SSC - Grade 12 Event Committee</h4>
                            <p class="text-muted">Pmftci - Supreme Student Council</p>
                            <p>(2022 - 2023)</p>
                        </div>
                        <div class="timeline-item mb-4">
                            <h4 class="h5">SSC - Assistant Sports Chairperson</h4>
                            <p class="text-muted">Pmftci - Supreme Student Council</p>
                            <p>(2023 - 2024)</p>
                        </div>
                        <div class="timeline-item mb-4">
                            <h4 class="h5">Youth Participation - Member</h4>
                            <p class="text-muted">Oriental Mindoro Parliament of Youth Leaders</p>
                            <p>(2023 - 2024)</p>
                        </div>
                        <div class="timeline-item mb-4">
                            <h4 class="h5">SSC - Sports Chairperson</h4>
                            <p class="text-muted">Pmftci - Supreme Student Council</p>
                            <p>(2024 - Present)</p>
                        </div>
                        <div class="timeline-item mb-4">
                            <h4 class="h5">FPJ Youth - Member</h4>
                            <p class="text-muted">FPJ Panday Bayanihan Partylist</p>
                            <p>(2025 - Present)</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <img src="images/Pose.jpg" alt="Profile Image" width="1000" height="300" class="img-fluid img-thumbnail rounded mb-4">
                    
                    <div class="card">
                        <div class="card-body">
                            <h2 class="h4 mb-3">Education</h2>
                            <ul class="list-unstyled">
                                <li class="mb-3">
                                    <h4 class="h6 mb-1">Bachelor of Science Major in Information Technology</h4>
                                    <i class="text-muted mb-0 ">Pinamalayan Maritime Foundation and Technological College, Inc.</i>
                                    <p>(2023 - Present)</p>
                                </li>
                                <li class="mb-3">
                                    <h4 class="h6 mb-1">TVL - Information Communication Technology</h4>
                                    <i class="text-muted mb-0 ">Pinamalayan Maritime Foundation and Technological College, Inc.</i>
                                    <p>(2021 - 2023)</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="row g-4">
                
                <div class="col-md-6 col-lg-3 col-sm-6">
                    <h4 class="footer-heading">Location</h4>
                    <ul class="footer-contact-info">
                        <li>
                            <i class="fas fa-map-marker-alt mb-4 me-2"></i> 
                            <p>Pinamalayan, Oriental Mindoro, Philippines</p>
                        </li>
                    </ul>
                </div>

                <div class="col-md-6 col-lg-3 col-sm-6">
                    <h4 class="footer-heading">Contact Info</h4>
                    <ul class="footer-contact-info">
                        <li>
                            <i class="fas fa-phone"></i>
                            (+639)49-308-9229
                        </li>
                        <li>
                            <i class="fas fa-envelope"></i>
                            julietolirazan2@gmail.com
                        </li>
                    </ul>
                </div>

                <div class="col-md-6 col-lg-3 col-sm-6">
                    <h4 class="footer-heading">Quick Links</h4>
                    <ul class="footer-contact-info">
                        <li><a href="about.html" class="text-white text-decoration-none">About</a></li>
                        <li><a href="projects.html" class="text-white text-decoration-none">Projects</a></li>
                        <li><a href="skills.html" class="text-white text-decoration-none">Skills</a></li>
                        <li><a href="contact.html" class="text-white text-decoration-none">Contact</a></li>
                    </ul>
                </div>

                <div class="col-md-3 col-lg-3 col-sm-6">
                    <h4 class="footer-heading">Connect With Me</h4>
                    <div class="footer-social-links">
                        <a href="https://www.facebook.com/iJulieto" class="social-link" title="Facebook">
                            <i class="fab fa-facebook"></i>
                        </a>
                        <a href="https://www.instagram.com/julietooq/" class="social-link" title="Instagram">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="https://www.messenger.com/t/julietooq" class="social-link" title="Messenger">
                            <i class="fab fa-facebook-messenger"></i>
                        </a>
                    </div>
                    <p class="mt-3 mb-0">Follow me on Social Media!</p>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-12 text-center">
                    <p class="mb-0">&copy; 2025 Julieto C. Lirazan. All rights reserved.</p>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

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
    <title>Portfolio - Projects</title>
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
                        <a class="nav-link" href="about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="projects.php">Projects</a>
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
            <h2 class="mb-4">My Projects</h2>
                <ul class="nav nav-pills mb-4">
                    <li class="nav-item">
                        <button class="nav-link active" data-bs-toggle="pill" data-bs-target="#all">All</button>
                    </li>
                    <li class="nav-item">
                        <button class="nav-link" data-bs-toggle="pill" data-bs-target="#web">Web</button>
                        
                    </li>
                    <li class="nav-item">
                        <button class="nav-link" data-bs-toggle="pill" data-bs-target="#desktop">Desktop</button>
                    </li>
                </ul>
            
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="all">
                        <div class="row g-4">
                            <div class="col-md-6 col-lg-4">
                                <div class="card project-card">
                                    <img src="images/LMS.jpg" class="card-img-top" alt="Project 1">
                                    <div class="card-body">
                                        <h5 class="card-title mb-3">Learning Management System</h5>
                                        <div class="d-flex gap-2">
                                            <a href="#" class="btn btn-outline-dark btn-sm">View Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="card project-card">
                                    <img src="images/Vans Store.jpg" class="card-img-top" alt="Project 2">
                                    <div class="card-body">
                                        <h5 class="card-title mb-3">Van Store</h5>
                                        <div class="d-flex gap-2">
                                            <a href="#" class="btn btn-outline-dark btn-sm">View Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="card project-card">
                                    <img src="images/MIS.jpg" class="card-img-top" alt="Project 3">
                                    <div class="card-body">
                                        <h5 class="card-title mb-3">Municipal Information System</h5>
                                        <div class="d-flex gap-2">
                                            <a href="#" class="btn btn-outline-dark btn-sm">View Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                
                    <div class="tab-pane fade" id="web">
                        <div class="row g-4">
                            <div class="col-md-6 col-lg-4">
                                <div class="card project-card">
                                    <img src="images/LMS.jpg" class="card-img-top" alt="Project 1">
                                    <div class="card-body">
                                        <h5 class="card-title mb-3">Learning Management System</h5>
                                        <div class="d-flex gap-2">
                                            <a href="#" class="btn btn-outline-dark btn-sm">View Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="card project-card">
                                    <img src="images/Vans Store.jpg" class="card-img-top" alt="Project 2">
                                    <div class="card-body">
                                        <h5 class="card-title mb-3">Van Store</h5>
                                        <div class="d-flex gap-2">
                                            <a href="#" class="btn btn-outline-dark btn-sm">View Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="desktop">
                        <div class="col-md-6 col-lg-4">
                            <div class="card project-card">
                                <img src="images/MIS.jpg" class="card-img-top" alt="Project 3">
                                <div class="card-body">
                                    <h5 class="card-title mb-3">Municipal Information System</h5>
                                    <div class="d-flex gap-2">
                                        <a href="#" class="btn btn-outline-dark btn-sm">View Demo</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="row g-4">
                
                <div class="col-md-6 col-sm-6 col-lg-3">
                    <h4 class="footer-heading">Location</h4>
                    <ul class="footer-contact-info">
                        <li>
                            <i class="fas fa-map-marker-alt mb-4 me-2"></i>
                            <p>Pinamalayan, Oriental Mindoro, Philippines</p>
                        </li>
                    </ul>
                </div>

                <div class="col-md-6 col-sm-6 col-lg-3">
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

                <div class="col-md-6 col-sm-6 col-lg-3">
                    <h4 class="footer-heading">Quick Links</h4>
                    <ul class="footer-contact-info">
                        <li><a href="about.html" class="text-white text-decoration-none">About</a></li>
                        <li><a href="projects.html" class="text-white text-decoration-none">Projects</a></li>
                        <li><a href="skills.html" class="text-white text-decoration-none">Skills</a></li>
                        <li><a href="contact.html" class="text-white text-decoration-none">Contact</a></li>
                    </ul>
                </div>

                <div class="col-md-6 col-sm-6 col-lg-3">
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
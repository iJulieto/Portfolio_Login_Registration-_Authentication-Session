<?php
    include('functions.php');

    if (isset($_SESSION['username'])) {
        header('Location: dashboard.php');
        exit();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio - Home</title>
    <link rel="icon" href="images/Icon.jpg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
        <div class="container">
            <a class="navbar-brand" href="index.php"><img src="images/Icon.jpg" class="img-fluid" width="60" height="60" alt="Portfolio Logo"></a>
            <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" >
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item ms-2 mt-2 mb-2">
                        <a class="btn btn-dark" href="login.php">Login</a>
                    </li>
                    <li class="nav-item ms-2 mt-2 mb-2">
                        <a class="btn btn-dark" href="register.php">Register</a>
                    </li>
                </ul>
                
            </div>
        </div>
    </nav>

    <section class="hero-section">
        <div class="container pt-5">
            <div class="row">
                <div class="col-lg-8">
                    <h1 class="display-4 mb-4">Hello, I am Je-ar</h1>
                    <p class="lead mb-4">A student leader and web developer that combines leadership and technical skills, inspiring peers while designing and maintaining innovative digital solutions.</p>
                    <a href="login.php" class="btn btn-dark">Learn More</a>
                </div>
                <div class="col-lg-4">
                    <img src="images/Sample.png" class="img-fluid float-end rounded-circle" alt="Image">
                </div>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <h2 class="mb-4">Featured Work</h2>
            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="card card-hover">
                        <img src="images/LMS.jpg" class="card-img-top" alt="Project 1">
                        <div class="card-body">
                            <h4 class="card-title">Learning Management System</h4>
                            <p class="card-text">A <i class="text-decoration-underline">Learning Management System</i> (LMS) is a digital platform for creating, delivering, and tracking educational content, improving learning accessibility and efficiency.</p>
                            <a href="login.php" class="btn btn-outline-dark">View Project</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card card-hover">
                        <img src="images/Vans Store.jpg" class="card-img-top" alt="Project 2">
                        <div class="card-body">
                            <h4 class="card-title">Vans Store</h4>
                            <p class="card-text">A <i class="text-decoration-underline">Vans Store</i> offers iconic skate shoes, apparel, and accessories, featuring classic and modern styles for all ages, plus exclusive collections, collaborations, and skate-inspired fashion.</p>
                            <a href="login.php" class="btn btn-outline-dark">View Project</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card card-hover">
                        <img src="images/MIS.jpg" class="card-img-top" alt="Project 3">
                        <div class="card-body">
                            <h4 class="card-title">Municipal Information System</h4>
                            <p class="card-text">A <i class="text-decoration-underline">Municipal Information System</i> (MIS) streamlines municipal operations, enhancing efficiency, transparency, automation, data management, and citizen engagement.</p>
                            <a href="login.php" class="btn btn-outline-dark">View Projects</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-5">My Leadership Journey</h2>
            <div id="developmentCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#developmentCarousel" data-bs-slide-to="0" class="active"></button>
                    <button type="button" data-bs-target="#developmentCarousel" data-bs-slide-to="1"></button>
                    <button type="button" data-bs-target="#developmentCarousel" data-bs-slide-to="2"></button>
                    <button type="button" data-bs-target="#developmentCarousel" data-bs-slide-to="3"></button>
                    <button type="button" data-bs-target="#developmentCarousel" data-bs-slide-to="4"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <img src="images/SSC.jpg" class="img-fluid rounded shadow-sm" alt="SSC (2021 - 2022)">
                            </div>
                            <div class="col-md-6">
                                <div class="carousel-content text-start p-4">
                                    <h3 class="mb-3">Supreme Student Council</h3>
                                    <h5><i>(2021 - 2022)</i></h5>
                                    <p class="lead">My first time of being a representative in my department of Supreme Student Council. Experienced in managing multiple projects simultaneously, from initial concept to final deployment.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                <div class="carousel-inner">
                    <div class="carousel-item">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <img src="images/SSC1.jpg" class="img-fluid rounded shadow-sm" alt="SSC (2022 - 2023)">
                            </div>
                            <div class="col-md-6">
                                <div class="carousel-content text-start p-4">
                                    <h3 class="mb-3">Supreme Student Council</h3>
                                    <h5><i>(2022 - 2023)</i></h5>
                                    <p class="lead">Since my first time of being a representative in my department of Supreme Student Council, I've developed a strong communication and team management skill.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <img src="images/SSC2.jpg" class="img-fluid rounded shadow-sm" alt="SSC (2023 - 2024)">
                            </div>
                            <div class="col-md-6">
                                <div class="carousel-content text-start p-4">
                                    <h3 class="mb-3">Supreme Student Council</h3>
                                    <h5><i>(2023 - 2024)</i></h5>
                                    <p class="lead">As I approach my 2 year mark, I find myself more confident in my abilities and a stronger connection with my peers.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <img src="images/OMPYL.jpg" class="img-fluid rounded shadow-sm" alt="OMPYL (2023)">
                            </div>
                            <div class="col-md-6">
                                <div class="carousel-content text-start p-4">
                                    <h3 class="mb-3">Oriental Mindoro Parliament of Youth Leaders</h3>
                                    <h5><i>(2023)</i></h5>
                                    <p class="lead">Then, I took my first step into the world of leadership by being a representative in my department of OMPYL.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <img src="images/SSC3.jpg" class="img-fluid rounded shadow-sm" alt="SSC (2025 - Present)">
                            </div>
                            <div class="col-md-6">
                                <div class="carousel-content text-start p-4">
                                    <h3 class="mb-3">Supreme Student Council (2024 - 2025)</h3>
                                    <h5><i>(2024 - 2025)</i></h5>
                                    <p class="lead">As of now, I find myself more confident in my abilities and a stronger connection with my peers.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#developmentCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#developmentCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
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
                        <li><a href="login.php" class="text-white text-decoration-none">About</a></li>
                        <li><a href="login.php" class="text-white text-decoration-none">Projects</a></li>
                        <li><a href="login.php" class="text-white text-decoration-none">Skills</a></li>
                        <li><a href="login.php" class="text-white text-decoration-none">Contact</a></li>
                    </ul>
                </div>

                <div class="col-md-6 col-lg-3 col-sm-6">
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
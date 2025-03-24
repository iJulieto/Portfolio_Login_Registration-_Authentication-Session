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
    <title>Portfolio - Contact</title>
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
                        <a class="nav-link" href="projects.php">Projects</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="skills.php">Skills</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="contact.php">Contact</a>
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
            <div class="row mb-5">
                <div class="col-lg-6">
                    <h2 class="mb-4">Get in Touch</h2>
                    <p class="lead mb-4">Have a project in mind? Let's work together to bring your ideas to life.</p>
                    
                    <form class="needs-validation" novalidate>
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" required>
                            <div class="invalid-feedback">
                                Please provide your name.
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" required>
                            <div class="invalid-feedback">
                                Please provide a valid email.
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="subject" class="form-label">Subject</label>
                            <select class="form-select" id="subject" required>
                                <option value="">Choose...</option>
                                <option value="project">Project Inquiry</option>
                                <option value="collaboration">Collaboration</option>
                                <option value="other">Other</option>
                            </select>
                            <div class="invalid-feedback">
                                Please select a subject.
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Message</label>
                            <textarea class="form-control" id="message" rows="5" required></textarea>
                            <div class="invalid-feedback">
                                Please provide your message.
                            </div>
                        </div>
                        <button type="submit" class="btn btn-dark">Send Message</button>

                        <div class="alert alert-success d-none" id="submitAlert" role="alert" style="position: fixed; top: 100px; right: 20px; z-index: 1000; width: 450px;">
                            Thank you for your message! We'll get back to you soon.
                        </div>                        
                    </form>
                </div>
                
                <div class="col-lg-6">
                    <div class="row g-4 mt-4 mt-lg-0">
                        <div class="col-md-6">
                            <div class="card contact-info-card">
                                <div class="card-body">
                                    <h5 class="card-title">Location</h5>
                                    <p class="card-text">Pinamalayan, Oriental Mindoro, Philippines</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card contact-info-card">
                                <div class="card-body">
                                    <h5 class="card-title">Phone</h5>
                                    <p class="card-text">(+639)49-308-9229</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="card contact-info-card">
                                <div class="card-body">
                                    <h5 class="card-title">Email</h5>
                                    <p class="card-text">julietolirazan2@gmail.com</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-12">
                            <div class="card contact-info-card">
                                <div class="card-body">
                                    <h5 class="card-title">Social Media</h5>
                                    <div class="d-flex gap-2">
                                        <a href="https://www.facebook.com/iJulieto" class="btn btn-outline-dark btn-sm">Facebook</a>
                                        <a href="https://www.instagram.com/julietooq/" class="btn btn-outline-dark btn-sm">Instagram</a>
                                        <a href="https://www.messenger.com/t/julietooq" class="btn btn-outline-dark btn-sm">Messenger</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="card mt-4">
                        <div class="card-body">
                            <h5 class="card-title">Availability</h5>
                            <p class="card-text">Currently available for small freelance projects and collaborations.</p>
                            <div class="alert alert-info mb-0">
                                <small>Response Time: Within 24-48 hours</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        (function() {
            'use strict'
            const form = document.querySelector('.needs-validation');
            
            form.addEventListener('submit', function(event) {
                event.preventDefault();
                
                if (!form.checkValidity()) {
                    event.stopPropagation();
                    form.classList.add('was-validated');
                } else {
                    showAlert();
                    form.classList.remove('was-validated');
                    form.reset();
                }
            }, false);
        })();
        
        function showAlert() {
            const alert = document.getElementById('submitAlert');

            alert.classList.remove('d-none');
            
            setTimeout(() => {
                alert.classList.add('d-none');
            }, 3000);
        }
        </script>
</body>
</html>
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
    <title>Portfolio - Skills</title>
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
                        <a class="nav-link active" href="skills.php">Skills</a>
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
            <h2 class="mb-4">Skills & Expertise</h2>
            <div class="row mb-5">
                <div class="col-lg-6">
                    <h3 class="h4 mb-4">Technical Skills</h3>
                    <div class="mb-4">
                        <div class="d-flex justify-content-between mb-1">
                            <span>HTML/CSS/Bootstrap</span>
                            <span>75%</span>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-dark" style="width: 75%"></div>
                        </div>
                    </div>
                    <div class="mb-4">
                      <div class="d-flex justify-content-between mb-1">
                          <span>Javascript</span>
                          <span>50%</span>
                      </div>
                      <div class="progress">
                          <div class="progress-bar bg-dark" style="width: 50%"></div>
                      </div>
                  </div>
                    <div class="mb-4">
                      <div class="d-flex justify-content-between mb-1">
                          <span>Java</span>
                          <span>75%</span>
                      </div>
                      <div class="progress">
                          <div class="progress-bar bg-dark" style="width: 75%"></div>
                      </div>
                  </div>
                  <div class="mb-4">
                    <div class="d-flex justify-content-between mb-1">
                        <span>C#</span>
                        <span>85%</span>
                    </div>
                    <div class="progress">
                        <div class="progress-bar bg-dark" style="width: 80%"></div>
                    </div>
                </div>
                </div>
                <div class="col-lg-6">
                    <h3 class="h4 mb-4">Tools & Technologies</h3>
                    <div class="row g-4">
                        <div class="col-md-6">
                            <div class="card skill-card">
                                <div class="card-body">
                                    <h5 class="card-title">Development</h5>
                                    <ul class="list-unstyled mb-0">
                                        <li> • Microsoft Visual Studio Code</li>
                                        <li> • Microsoft Visual Studio</li>
                                        <li> • Eclipse</li>
                                        <li> • Windsurf</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <h3 class="h4 mb-4">Certifications</h3>
            <div class="row g-4">
                <div class="col-md-6">
                    <div class="card skill-card">
                        <div class="card-body">
                            <h5 class="card-title">Computer System Servicing - National Certificate II</h5>
                            <i class="text-muted">TESDA (2023)</i>
                            <p class="mb-0">Completed hardware and software maintenance tasks. Setup and configuration of computer systems, including networking, operating systems, and hardware components.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card skill-card">
                        <div class="card-body">
                            <h5 class="card-title">Fundamentals of Hardware, Software & Networking</h5>
                            <i class="text-muted">Frogwebz / MLAYA IT Solutions (2023)</i>
                            <p class="mb-0">Completed comprehensive 240-hours training workshop in Computer Hardware, Software and Networking</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                  <div class="card skill-card">
                      <div class="card-body">
                          <h5 class="card-title">Leadership Trainings</h5>
                          <i class="text-muted">PMFTCI / PMFTCI - Supreme Student Council (2021, 2022, 2023, 2024 - Present)</i>
                          <p class="mb-0">Completed the two-day SSC Leadership Trainings, Team Building Activities and Seminars about leadership.</p>
                      </div>
                  </div>
              </div>
              <div class="col-md-6">
                <div class="card skill-card">
                    <div class="card-body">
                        <h5 class="card-title">Oriental Mindoro Parliament of Youth Leaders</h5>
                        <i class="text-muted">Provincial Youth Development Council (2023)</i>
                        <p class="mb-0">Completed comprehensive 240-hours training workshop in Computer Hardware, Software and Networking</p>
                    </div>
                </div>
            </div>
            </div>

            <h3 class="h4 my-4">Leadership Skills</h3>
<div class="accordion" id="softSkillsAccordion">
    <div class="accordion-item">
        <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#leadershipSkills">
                Leadership & Team Management
            </button>
        </h2>
        <div id="leadershipSkills" class="accordion-collapse collapse" data-bs-parent="#softSkillsAccordion">
            <div class="accordion-body">
                <ul class="list-unstyled mb-0">
                    <li> • Team Leadership</li>
                    <li> • Project Management</li>
                    <li> • Strategic Planning</li>
                    <li> • Mentoring</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="accordion-item">
        <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#communicationSkills">
                Communication
            </button>
        </h2>
        <div id="communicationSkills" class="accordion-collapse collapse" data-bs-parent="#softSkillsAccordion">
            <div class="accordion-body">
                <ul class="list-unstyled mb-0">
                    <li> • Technical Writing</li>
                    <li> • Client Communication</li>
                    <li> • Public Speaking</li>
                    <li> • Documentation</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="accordion-item">
        <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#practicalitySkills">
                Practicality
            </button>
        </h2>
        <div id="practicalitySkills" class="accordion-collapse collapse" data-bs-parent="#softSkillsAccordion">
            <div class="accordion-body">
                <ul class="list-unstyled mb-0">
                    <li> • Accountability</li>
                    <li> • Responsibility</li>
                    <li> • Adaptability</li>
                    <li> • Decision Making</li>
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
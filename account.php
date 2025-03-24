<?php
include('functions.php');

    if (!isset($_SESSION['username'])) {
        header('Location: login.php');
        exit();
    }

    $fullname = isset($_SESSION['fullname']) ? $_SESSION['fullname'] : 'User';
    $username = $_SESSION['username'];
    $firstName = isset($_SESSION['firstName']) ? $_SESSION['firstName'] : '';
    $middleName = isset($_SESSION['middleName']) ? $_SESSION['middleName'] : '';
    $lastName = isset($_SESSION['lastName']) ? $_SESSION['lastName'] : '';
    $age = isset($_SESSION['age']) ? $_SESSION['age'] : '';
    $gender = isset($_SESSION['gender']) ? $_SESSION['gender'] : '';
    $nationality = isset($_SESSION['nationality']) ? $_SESSION['nationality'] : '';
    $contactNumber = isset($_SESSION['contactNumber']) ? $_SESSION['contactNumber'] : '';
    $email = isset($_SESSION['email']) ? $_SESSION['email'] : '';
    $address = isset($_SESSION['address']) ? $_SESSION['address'] : '';
    $user_type = isset($_SESSION['user_type']) ? $_SESSION['user_type'] : 'user';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio - Profile</title>
    <link rel="icon" href="images/Icon.jpg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container mt-3">
        <a href="dashboard.php" class="btn btn-dark"><i class="fa-solid fa-arrow-left-long"></i></a>
    </div>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card shadow">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="images/User.jpg" class="img-fluid rounded-start h-100 object-fit-cover" alt="User Image">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h3 class="card-title"><?php echo $fullname ?></h3>
                                <h6 class="card-subtitle mb-3 text-muted"><i><?php echo $username ?></i></h6>
                                
                                <div class="row mb-2">
                                    <div class="col-md-6">
                                        <p class="mb-1"><strong>First Name:</strong></p>
                                        <p class="text-muted"><?php echo $firstName ?></p>
                                    </div>
                                    <div class="col-md-6">
                                        <p class="mb-1"><strong>Middle Name:</strong></p>
                                        <p class="text-muted"><?php echo $middleName ?></p>
                                    </div>
                                </div>
                                
                                <div class="row mb-2">
                                    <div class="col-md-6">
                                        <p class="mb-1"><strong>Last Name:</strong></p>
                                        <p class="text-muted"><?php echo $lastName ?></p>
                                    </div>
                                    <div class="col-md-6">
                                        <p class="mb-1"><strong>Age:</strong></p>
                                        <p class="text-muted"><?php echo $age ?></p>
                                    </div>
                                </div>
                                
                                <div class="row mb-2">
                                    <div class="col-md-6">
                                        <p class="mb-1"><strong>Gender:</strong></p>
                                        <p class="text-muted"><?php echo $gender ?></p>
                                    </div>
                                    <div class="col-md-6">
                                        <p class="mb-1"><strong>Nationality:</strong></p>
                                        <p class="text-muted"><?php echo $nationality ?></p>
                                    </div>
                                </div>
                                
                                <div class="row mb-2">
                                    <div class="col-md-6">
                                        <p class="mb-1"><strong>Contact Number:</strong></p>
                                        <p class="text-muted"><?php echo $contactNumber ?></p>
                                    </div>
                                    <div class="col-md-6">
                                        <p class="mb-1"><strong>Email:</strong></p>
                                        <p class="text-muted"><?php echo $email ?></p>
                                    </div>
                                </div>
                                
                                <div class="mb-2">
                                    <p class="mb-1"><strong>Address:</strong></p>
                                    <p class="text-muted"><?php echo $address ?></p>
                                </div>
                            </div>
                            <div class="card-footer text-muted">
                                <a href="logout.php" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#logoutModal">Logout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="logoutModal" tabindex="-1" aria-labelledby="logoutModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="logoutModalLabel">Confirm Logout</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Are you sure you want to log out?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <a href="logout.php" class="btn btn-danger">Confirm</a>
            </div>
        </div>
    </div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
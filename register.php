<?php
include('functions.php');

if (isset($_SESSION['username'])) {
    header('Location: index.php');
    exit();
}

$error = '';
$success = '';


if (isset($_POST['register'])) {
    $firstName = trim($_POST['firstName']);
    $middleName = trim($_POST['middleName']);
    $lastName = trim($_POST['lastName']);
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $nationality = $_POST['nationality'];
    $contactNumber = trim($_POST['contactNumber']);
    $email = trim($_POST['email']);
    $address = trim($_POST['address']);
    $username = trim($_POST['username']);
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    
    if ($password !== $cpassword) {
        $error = "Passwords do not match";
    } else {
        if (register($firstName, $middleName, $lastName, $age, $gender, $nationality, $contactNumber, $email, $address, $username, $password)) {
            $success = "Registration successful! Please login to continue.";
        } else {
            $error = "Username already exists";
        }
    }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio - Registration</title>
    <link rel="icon" href="images/Icon.jpg">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        .login-container {
            max-width: 750px;
            margin: 50px auto;
            padding: 40px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
        }
        .error-message {
            color: #ff6b6b;
            text-align: center;
            margin-bottom: 15px;
        }
        .success-message {
            color: #51cf66;
            text-align: center;
            margin-bottom: 15px;
        }
        .input-group-text {
            background-color: #f8f9fa;
            border-right: none;
        }
        .contact-input {
            border-left: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="login-container bg-dark text-white">
            <div>
                <a href="login.php" class="btn btn-light mb-3"><i class="fa-solid fa-arrow-left"></i></a>
            </div>
            <h2 class="form-title mb-4">Create Account</h2>
            <?php if (!empty($error)): ?>
                <div class="error-message"><?php echo $error; ?></div>
            <?php endif; ?>
            <?php if (!empty($success)): ?>
                <div class="success-message"><?php echo $success; ?></div>
            <?php endif; ?>
            <form action="register.php" method="post" class="needs-validation" novalidate>
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <label for="firstName" class="form-label">First Name:</label>
                        <input type="text" class="form-control" name="firstName" minlength="2" pattern="[A-Za-z\s]+" required>
                        <div class="invalid-feedback">First name must be at least 2 characters (letters only).</div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="middleName" class="form-label">Middle Name:</label>
                        <input type="text" class="form-control" name="middleName" pattern="[A-Za-z\s]*" required>
                        <div class="invalid-feedback">Middle name can only contain letters (optional).</div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="lastName" class="form-label">Last Name:</label>
                        <input type="text" class="form-control" name="lastName" minlength="2" pattern="[A-Za-z\s]+" required>
                        <div class="invalid-feedback">Last name must be at least 2 characters (letters only).</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <label for="age" class="form-label">Age:</label>
                        <input type="number" class="form-control" name="age" min="13" max="100" required>
                        <div class="invalid-feedback">Age must be between 13 and above.</div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="gender" class="form-label">Gender:</label>
                        <select class="form-select" name="gender" required>
                            <option value="" selected disabled>Select Gender</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Other">Other</option>
                        </select>
                        <div class="invalid-feedback">Please select a gender.</div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="nationality" class="form-label">Nationality:</label>
                        <select class="form-select" name="nationality" required>
                            <option value="" selected disabled>Select Nationality</option>
                            <option value="Afghan">Afghan</option>
                            <option value="Albanian">Albanian</option>
                            <option value="Afghan">Afghan</option>
                            <option value="Albanian">Albanian</option>
                            <option value="Algerian">Algerian</option>
                            <option value="American">American</option>
                            <option value="Andorran">Andorran</option>
                            <option value="Angolan">Angolan</option>
                            <option value="Antiguan">Antiguan</option>
                            <option value="Argentine">Argentine</option>
                            <option value="Armenian">Armenian</option>
                            <option value="Australian">Australian</option>
                            <option value="Austrian">Austrian</option>
                            <option value="Azerbaijani">Azerbaijani</option>
                            <option value="Bahamian">Bahamian</option>
                            <option value="Bahraini">Bahraini</option>
                            <option value="Bangladeshi">Bangladeshi</option>
                            <option value="Barbadian">Barbadian</option>
                            <option value="Belarusian">Belarusian</option>
                            <option value="Belgian">Belgian</option>
                            <option value="Belizean">Belizean</option>
                            <option value="Beninese">Beninese</option>
                            <option value="Bhutanese">Bhutanese</option>
                            <option value="Bolivian">Bolivian</option>
                            <option value="Bosnian">Bosnian</option>
                            <option value="Brazilian">Brazilian</option>
                            <option value="British">British</option>
                            <option value="Bruneian">Bruneian</option>
                            <option value="Bulgarian">Bulgarian</option>
                            <option value="Burkinabe">Burkinabe</option>
                            <option value="Burmese">Burmese</option>
                            <option value="Burundian">Burundian</option>
                            <option value="Cambodian">Cambodian</option>
                            <option value="Cameroonian">Cameroonian</option>
                            <option value="Canadian">Canadian</option>
                            <option value="Cape Verdean">Cape Verdean</option>
                            <option value="Central African">Central African</option>
                            <option value="Chadian">Chadian</option>
                            <option value="Chilean">Chilean</option>
                            <option value="Chinese">Chinese</option>
                            <option value="Colombian">Colombian</option>
                            <option value="Comoran">Comoran</option>
                            <option value="Congolese">Congolese</option>
                            <option value="Costa Rican">Costa Rican</option>
                            <option value="Croatian">Croatian</option>
                            <option value="Cuban">Cuban</option>
                            <option value="Cypriot">Cypriot</option>
                            <option value="Czech">Czech</option>
                            <option value="Danish">Danish</option>
                            <option value="Djibouti">Djibouti</option>
                            <option value="Dominican">Dominican</option>
                            <option value="Dutch">Dutch</option>
                            <option value="East Timorese">East Timorese</option>
                            <option value="Ecuadorean">Ecuadorean</option>
                            <option value="Egyptian">Egyptian</option>
                            <option value="Emirian">Emirian</option>
                            <option value="Equatorial Guinean">Equatorial Guinean</option>
                            <option value="Eritrean">Eritrean</option>
                            <option value="Estonian">Estonian</option>
                            <option value="Ethiopian">Ethiopian</option>
                            <option value="Fijian">Fijian</option>
                            <option value="Filipino">Filipino</option>
                            <option value="Finnish">Finnish</option>
                            <option value="French">French</option>
                            <option value="Gabonese">Gabonese</option>
                            <option value="Gambian">Gambian</option>
                            <option value="Georgian">Georgian</option>
                            <option value="German">German</option>
                            <option value="Ghanaian">Ghanaian</option>
                            <option value="Greek">Greek</option>
                            <option value="Grenadian">Grenadian</option>
                            <option value="Guatemalan">Guatemalan</option>
                            <option value="Guinea-Bissauan">Guinea-Bissauan</option>
                            <option value="Guinean">Guinean</option>
                            <option value="Guyanese">Guyanese</option>
                            <option value="Haitian">Haitian</option>
                            <option value="Honduran">Honduran</option>
                            <option value="Hungarian">Hungarian</option>
                            <option value="Icelander">Icelander</option>
                            <option value="Indian">Indian</option>
                            <option value="Indonesian">Indonesian</option>
                            <option value="Iranian">Iranian</option>
                            <option value="Iraqi">Iraqi</option>
                            <option value="Irish">Irish</option>
                            <option value="Israeli">Israeli</option>
                            <option value="Italian">Italian</option>
                            <option value="Ivorian">Ivorian</option>
                            <option value="Jamaican">Jamaican</option>
                            <option value="Japanese">Japanese</option>
                            <option value="Jordanian">Jordanian</option>
                            <option value="Kazakhstani">Kazakhstani</option>
                            <option value="Kenyan">Kenyan</option>
                            <option value="Kiribati">Kiribati</option>
                            <option value="Kuwaiti">Kuwaiti</option>
                            <option value="Kyrgyz">Kyrgyz</option>
                            <option value="Laotian">Laotian</option>
                            <option value="Latvian">Latvian</option>
                            <option value="Lebanese">Lebanese</option>
                            <option value="Liberian">Liberian</option>
                            <option value="Libyan">Libyan</option>
                            <option value="Liechtensteiner">Liechtensteiner</option>
                            <option value="Lithuanian">Lithuanian</option>
                            <option value="Luxembourger">Luxembourger</option>
                            <option value="Macedonian">Macedonian</option>
                            <option value="Malagasy">Malagasy</option>
                            <option value="Malawian">Malawian</option>
                            <option value="Malaysian">Malaysian</option>
                            <option value="Maldivian">Maldivian</option>
                            <option value="Malian">Malian</option>
                            <option value="Maltese">Maltese</option>
                            <option value="Marshallese">Marshallese</option>
                            <option value="Mauritanian">Mauritanian</option>
                            <option value="Mauritian">Mauritian</option>
                            <option value="Mexican">Mexican</option>
                            <option value="Micronesian">Micronesian</option>
                            <option value="Moldovan">Moldovan</option>
                            <option value="Monacan">Monacan</option>
                            <option value="Mongolian">Mongolian</option>
                            <option value="Moroccan">Moroccan</option>
                            <option value="Mosotho">Mosotho</option>
                            <option value="Motswana">Motswana</option>
                            <option value="Mozambican">Mozambican</option>
                            <option value="Namibian">Namibian</option>
                            <option value="Nauruan">Nauruan</option>
                            <option value="Nepalese">Nepalese</option>
                            <option value="New Zealander">New Zealander</option>
                            <option value="Nicaraguan">Nicaraguan</option>
                            <option value="Nigerian">Nigerian</option>
                            <option value="Nigerien">Nigerien</option>
                            <option value="North Korean">North Korean</option>
                            <option value="Northern Irish">Northern Irish</option>
                            <option value="Norwegian">Norwegian</option>
                            <option value="Omani">Omani</option>
                            <option value="Pakistani">Pakistani</option>
                            <option value="Palauan">Palauan</option>
                            <option value="Panamanian">Panamanian</option>
                            <option value="Papua New Guinean">Papua New Guinean</option>
                            <option value="Paraguayan">Paraguayan</option>
                            <option value="Peruvian">Peruvian</option>
                            <option value="Polish">Polish</option>
                            <option value="Portuguese">Portuguese</option>
                            <option value="Qatari">Qatari</option>
                            <option value="Romanian">Romanian</option>
                            <option value="Russian">Russian</option>
                            <option value="Rwandan">Rwandan</option>
                            <option value="Saint Lucian">Saint Lucian</option>
                            <option value="Salvadoran">Salvadoran</option>
                            <option value="Samoan">Samoan</option>
                            <option value="San Marinese">San Marinese</option>
                            <option value="Sao Tomean">Sao Tomean</option>
                            <option value="Saudi">Saudi</option>
                            <option value="Scottish">Scottish</option>
                            <option value="Senegalese">Senegalese</option>
                            <option value="Serbian">Serbian</option>
                            <option value="Seychellois">Seychellois</option>
                            <option value="Sierra Leonean">Sierra Leonean</option>
                            <option value="Singaporean">Singaporean</option>
                            <option value="Slovakian">Slovakian</option>
                            <option value="Slovenian">Slovenian</option>
                            <option value="Solomon Islander">Solomon Islander</option>
                            <option value="Somali">Somali</option>
                            <option value="South African">South African</option>
                            <option value="South Korean">South Korean</option>
                            <option value="Spanish">Spanish</option>
                            <option value="Sri Lankan">Sri Lankan</option>
                            <option value="Sudanese">Sudanese</option>
                            <option value="Surinamer">Surinamer</option>
                            <option value="Swazi">Swazi</option>
                            <option value="Swedish">Swedish</option>
                            <option value="Swiss">Swiss</option>
                            <option value="Syrian">Syrian</option>
                            <option value="Taiwanese">Taiwanese</option>
                            <option value="Tajik">Tajik</option>
                            <option value="Tanzanian">Tanzanian</option>
                            <option value="Thai">Thai</option>
                            <option value="Togolese">Togolese</option>
                            <option value="Tongan">Tongan</option>
                            <option value="Trinidadian or Tobagonian">Trinidadian or Tobagonian</option>
                            <option value="Tunisian">Tunisian</option>
                            <option value="Turkish">Turkish</option>
                            <option value="Tuvaluan">Tuvaluan</option>
                            <option value="Ugandan">Ugandan</option>
                            <option value="Ukrainian">Ukrainian</option>
                            <option value="Uruguayan">Uruguayan</option>
                            <option value="Uzbekistani">Uzbekistani</option>
                            <option value="Venezuelan">Venezuelan</option>
                            <option value="Vietnamese">Vietnamese</option>
                            <option value="Welsh">Welsh</option>
                            <option value="Yemenite">Yemenite</option>
                            <option value="Zambian">Zambian</option>
                            <option value="Zimbabwean">Zimbabwean</option>
                        </select>
                        <div class="invalid-feedback">Please select a nationality.</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="contactNumber" class="form-label">Contact Number:</label>
                        <div class="input-group">
                            <span class="input-group-text">+639</span>
                            <input type="text" class="form-control contact-input" name="contactNumber" pattern="[0-9]{9,10}" maxlength="10" placeholder="ex. 9493089229"required>
                            <div class="invalid-feedback">Must be 9-10 digits.</div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="email" class="form-label">Email:</label>
                        <input type="email" class="form-control" name="email" required>
                        <div class="invalid-feedback">Please enter a valid email address.</div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="address" class="form-label">Address:</label>
                    <textarea class="form-control" name="address" rows="3" minlength="10" required></textarea>
                    <div class="invalid-feedback">Address must be at least 10 characters long.</div>
                </div>
                <div class="mb-3">
                    <label for="username" class="form-label">Create Username:</label>
                    <input type="text" class="form-control" name="username" minlength="5" pattern="[A-Za-z0-9]+" required>
                    <div class="invalid-feedback">Username must be at least 5 characters (letters and numbers only).</div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="password" class="form-label">Create Password:</label>
                        <input type="password" class="form-control" name="password" minlength="8" pattern="(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]+" required>
                        <div class="invalid-feedback">Password must be at least 8 characters with letters and numbers.</div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="cpassword" class="form-label">Confirm Password:</label>
                        <input type="password" class="form-control" name="cpassword" minlength="8" pattern="(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]+" required>
                        <div class="invalid-feedback">Password must be at least 8 characters with letters and numbers.</div>
                    </div>
                </div>
                <div class="d-grid mt-5 mb-4">
                    <button type="submit" class="btn btn-primary" name="register">Register</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        (function () {
            'use strict';
            const forms = document.querySelectorAll('.needs-validation');
            Array.from(forms).forEach(form => {
                form.addEventListener('submit', event => {
                    if (!form.checkValidity()) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        })();
    </script>
</body>
</html>
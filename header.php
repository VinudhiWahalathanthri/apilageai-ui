<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wings - Home</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
    
    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.16.14/dist/css/uikit.min.css" />
    
    <!-- Favicon -->
    <link rel="icon" href="./assets/images/wings logo.png">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">

    <style>
        body {
            font-family: 'Montserrat', sans-serif;
        }

        .navbar-custom {
            padding: 1.5rem 0;
        }

        .nav-link-custom {
            color: #ffffff;
            font-weight: 500;
            transition: color 0.3s ease;
            cursor: pointer;
            margin: 0 0.5rem;
        }

        .nav-link-custom:hover {
            color: #ff1500;
        }

        .btn-get-started {
            background-color: #ffffff;
            color: #333;
            padding: 0.75rem 2rem;
            border-radius: 50px;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .btn-get-started:hover {
            background-color: #ffffff;
            color: black;
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(234, 113, 113, 0.3);
        }

        .btn-get-started i {
            margin-left: 0.5rem;
            transition: transform 0.3s ease;
        }

        .btn-get-started:hover i {
            transform: translateX(5px);
        }

        .logo-img {
            max-width: 250px;
            height: auto;
        }
    </style>
</head>

<body>
    <nav class="navbar-custom">
        <div class="container-fluid">
            <div class="row w-100 d-flex justify-content-center align-items-center">
                <div class="col-lg-2 col-md-3 col-12 text-center mb-3 mb-md-0">
                    <img src="./assets/images/full-logo.png" alt="Wings Logo" class="logo-img">
                </div>
                
                <div class="col-lg-8 col-md-6 col-12">
                    <div class="row justify-content-center">
                        <div class="col-auto">
                            <p class="nav-link-custom mb-0">Home</p>
                        </div>
                        <div class="col-auto">
                            <p class="nav-link-custom mb-0">About</p>
                        </div>
                        <div class="col-auto">
                            <p class="nav-link-custom mb-0">Features</p>
                        </div>
                        <div class="col-auto">
                            <p class="nav-link-custom mb-0">Pricing</p>
                        </div>
                        <div class="col-auto">
                            <p class="nav-link-custom mb-0">Blog</p>
                        </div>
                    </div>
                </div>
                
                <!-- CTA Button -->
                <div class="col-lg-2 col-md-3 col-12 text-center mt-3 mt-md-0">
                    <button class="btn-get-started">
                        Get Started <i class="bi bi-arrow-right fs-5"></i>
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <!-- UIkit JS -->
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.16.14/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.16.14/dist/js/uikit-icons.min.js"></script>
    
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
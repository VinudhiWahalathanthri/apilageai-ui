<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wings - Home</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.16.14/dist/css/uikit.min.css" />
    <link rel="icon" href="./assets/images/wings logo.png">
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            margin: 0;
            padding: 0;
            min-height: 100vh;
        }

        .navbar-custom {
            padding: 1.5rem 0;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1000;
            transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
            background: transparent;
        }

        /* Glassmorphism effect - scrolled state */
        .navbar-custom.scrolled {
            top: auto;
            bottom: 20px;
            left: 50%;
            transform: translateX(-50%);
            width: auto;
            max-width: fit-content;
            
            /* Glass effect */
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(20px) saturate(180%);
            -webkit-backdrop-filter: blur(20px) saturate(180%);
            
            border-radius: 50px;
            padding: 0.8rem 2rem;
            color: black;
            /* Glass border */
            border: 1px solid rgba(255, 255, 255, 0.2);
            
            /* Enhanced shadow for depth */
            box-shadow: 
                0 8px 32px 0 rgba(171, 171, 171, 0.37),
                inset 0 1px 1px 0 rgba(255, 255, 255, 0.3);
        }

        /* Hide logo when scrolled */
        .navbar-custom.scrolled .logo-col,
        .navbar-custom.scrolled .cta-col {
            display: none !important;
        }

        /* Adjust navigation links color when scrolled */
        .navbar-custom.scrolled .nav-link-custom {
            color: #000000;
            font-weight: 600;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .navbar-custom.scrolled .nav-link-custom:hover {
            color: #ffd700;
            transform: translateY(-2px);
        }

        .nav-link-custom {
            color: #ffffff;
            font-weight: 500;
            transition: all 0.3s ease;
            cursor: pointer;
            margin: 0 0.5rem;
            position: relative;
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
            border: none;
            cursor: pointer;
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
            transition: all 0.4s ease;
        }

        /* Container adjustments for scrolled state */
        .navbar-custom.scrolled .container-fluid {
            padding: 0;
        }

        .navbar-custom.scrolled .row {
            margin: 0;
        }

        .navbar-custom.scrolled .nav-col {
            width: 100%;
            max-width: 100%;
            flex: 0 0 100%;
        }

        /* Compact navigation on scroll */
        .navbar-custom.scrolled .nav-link-custom {
            font-size: 0.95rem;
            margin: 0 0.6rem;
            padding: 0.5rem 0;
        }

        /* Demo content for scrolling */
        .demo-content {
            min-height: 200vh;
            padding: 120px 20px 20px;
        }

        .demo-content h1 {
            color: white;
            text-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
        }

        .demo-content p {
            color: rgba(255, 255, 255, 0.9);
        }

        /* Animation for smooth appearance */
        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translateX(-50%) translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateX(-50%) translateY(0);
            }
        }

        .navbar-custom.scrolled {
            animation: slideUp 0.4s ease-out;
        }

        /* Responsive Design */
        @media (max-width: 992px) {
            .logo-img {
                max-width: 180px;
            }

            .nav-link-custom {
                margin: 0 0.3rem;
                font-size: 0.9rem;
            }
        }

        @media (max-width: 768px) {
            .navbar-custom {
                padding: 1rem 0;
            }

            .logo-img {
                max-width: 150px;
            }

            /* Default state mobile */
            .nav-col .row {
                flex-wrap: wrap;
                gap: 0.5rem;
            }

            .nav-link-custom {
                font-size: 0.85rem;
                margin: 0 0.2rem;
            }

            .btn-get-started {
                padding: 0.6rem 1.5rem;
                font-size: 0.9rem;
            }

            /* Scrolled state mobile */
            .navbar-custom.scrolled {
                bottom: 10px;
                padding: 0.6rem 1.2rem;
                max-width: 95%;
                border-radius: 40px;
            }

            .navbar-custom.scrolled .nav-link-custom {
                font-size: 0.8rem;
                margin: 0 0.3rem;
                padding: 0.4rem 0;
            }

            .navbar-custom.scrolled .nav-col .row {
                gap: 0.3rem;
            }
        }

        @media (max-width: 576px) {
            .logo-img {
                max-width: 120px;
            }

            .nav-link-custom {
                font-size: 0.75rem;
                margin: 0 0.15rem;
            }

            .btn-get-started {
                padding: 0.5rem 1.2rem;
                font-size: 0.85rem;
            }

            .btn-get-started i {
                font-size: 1rem;
            }

            /* Scrolled state very small screens */
            .navbar-custom.scrolled {
                bottom: 10px;
                padding: 0.5rem 0.8rem;
                max-width: 98%;
            }

            .navbar-custom.scrolled .nav-link-custom {
                font-size: 0.7rem;
                margin: 0 0.2rem;
            }

            /* Stack some nav items on very small screens */
            .navbar-custom.scrolled .nav-col .row {
                flex-wrap: wrap;
                row-gap: 0.3rem;
            }
        }
    </style>
</head>

<body>
    <nav class="navbar-custom" id="navbar">
        <div class="container-fluid">
            <div class="row w-100 d-flex justify-content-center align-items-center">
                <div class="col-lg-2 col-md-3 col-12 text-center mb-3 mb-md-0 logo-col">
                    <img src="./assets/images/full-logo.png" alt="Wings Logo" class="logo-img">
                </div>

                <div class="col-lg-8 col-md-6 col-12 nav-col">
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
                <div class="col-lg-2 col-md-3 col-12 text-center mt-3 mt-md-0 cta-col">
                    <button class="btn-get-started">
                        Get Started <i class="bi bi-arrow-right fs-5"></i>
                    </button>
                </div>
            </div>
        </div>
    </nav>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.16.14/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.16.14/dist/js/uikit-icons.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        const navbar = document.getElementById('navbar');
        let scrollThreshold = 100; 

        window.addEventListener('scroll', () => {
            if (window.scrollY > scrollThreshold) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });
    </script>
</body>

</html>
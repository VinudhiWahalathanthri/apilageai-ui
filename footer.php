<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wings - AI-Powered Chatbot</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.16.14/dist/css/uikit.min.css" />

    <link rel="icon" href="./assets/images/wings logo.png">
    <link rel="stylesheet" href="style.css">

    <style>
        *{
                font-family: 'Montserrat', sans-serif;
        }
        body {
            font-family: 'Montserrat', sans-serif;
            overflow-x: hidden;
        }

        .footer-section {
            background-color: #ffffff;
            margin-top: 4rem;
            position: relative;
        }

        .footer-logo {
            max-width: 200px;
            margin-bottom: 1rem;
        }

        .footer-description {
            color: #6c757d;
            font-size: 0.95rem;
            line-height: 1.6;
            max-width: 600px;
        }

        .social-link {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 45px;
            height: 45px;
            background-color: white;
            border: 1px solid #dee2e6;
            border-radius: 8px;
            margin: 0 0.3rem;
            transition: all 0.3s ease;
        }

        .social-link:hover {
            transform: translateY(-3px);
          
        }

        .social-link img {
            width: 24px;
            height: 24px;
        }
        .footer-divider {
            border-top: 1px solid #b7b7b7;
            margin: 2rem 0;
        }

        .footer-heading {
            font-weight: 700;
            color: #333;
            margin-bottom: 1rem;
            font-size: 1.1rem;
        }

        .footer-text {
            color: #6c757d;
            font-size: 0.95rem;
            line-height: 1.8;
        }

        .footer-link {
            color: #6c757d;
            text-decoration: none;
            display: block;
            margin-bottom: 0.5rem;
            transition: color 0.3s ease;
        }

        .footer-link:hover {
            color: #ff4545;
            text-decoration: none;
        }

        .company-name-bg {
            font-size:14rem;
            font-weight: 900;
            margin: 3rem 0 1rem;
            user-select: none;
            background: linear-gradient(135deg, #838383 0%, #e1e1e1 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            opacity: 0.15;
            letter-spacing: -0.05em;
            line-height: 1;
            width: 100%;
        }

        .footer-columns {
            display: flex;
            gap: 3rem;
            flex-wrap: wrap;
        }

        .copyright-text {
            text-align: center;
            color: #6c757d;
            font-size: 0.9rem;
            padding: 1rem 0;
            margin: 0;
            position: absolute;
            bottom: 50;
        }

        @media (max-width: 1200px) {
            .company-name-bg {
                font-size: 6rem;
            }
        }

        @media (max-width: 768px) {
            .company-name-bg {
                font-size: 4rem;
            }

            .social-links {
                margin-top: 1.5rem;
                text-align: center;
            }

            .footer-columns {
                gap: 2rem;
            }

            .footer-column {
                min-width: 100%;
            }
        }

        @media (max-width: 480px) {
            .company-name-bg {
                font-size: 3rem;
            }
        }
    </style>
</head>

<body>
    <footer class="container-fluid">
        <div class="col-12 p-5">
            <div class="row ">
                <div class="col-lg-8 col-md-7 col-12 mb-4 mb-md-0">
                    <img src="assets/images/full-logo-black.png" style=" max-width: 250px;
            height: auto;" alt="Wings Logo" class="footer-logo">
                    <p class="footer-description">
                        AI-Powered chatbot that understands context, responds naturally, and helps teams deliver instant, accurate support - 24/7 without extra effort
                    </p>
                </div>

                <div class="col-lg-4 col-md-5 col-12 text-md-end social-links">
                    <a class="social-link" href="#" aria-label="Facebook">
                        <img src="assets/icons/fb.png" alt="Facebook">
                    </a>
                    <a class="social-link" href="#" aria-label="Instagram">
                        <img src="assets/icons/ig.png" alt="Instagram">
                    </a>
                    <a class="social-link" href="#" aria-label="WhatsApp">
                        <img src="assets/icons/whatsapp.png" alt="WhatsApp">
                    </a>
                </div>
            </div>

            <hr class="footer-divider">

            <div class="row">
                <div class="col-lg-6 col-md-6 col-12 mb-4 mb-md-0">
                </div>

                <div class="col-lg-6 col-md-6 col-12">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-3">
                                <div class="footer-column">
                                    <h5 class="footer-heading">Address</h5>
                                    <p class="footer-text">
                                        Apilage AI PVT LTD<br>
                                        Kalutara, Sri Lanka
                                    </p>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="footer-column">
                                    <h5 class="footer-heading">Company</h5>
                                    <a href="#" class="footer-link">About Us</a>
                                    <a href="#" class="footer-link">Careers</a>
                                    <a href="#" class="footer-link">Blog</a>
                                    <a href="#" class="footer-link">Contact</a>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="footer-column">
                                    <h5 class="footer-heading">Legal</h5>
                                    <a href="#" class="footer-link">Privacy Policy</a>
                                    <a href="#" class="footer-link">Terms of Service</a>
                                    <a href="#" class="footer-link">Cookie Policy</a>
                                    <a href="#" class="footer-link">GDPR</a>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="footer-column">
                                    <h5 class="footer-heading">Secure Payment</h5>
                                    <div style="justify-content: space-between;">
                                        <a href="#" class="footer-link"><img style="width:50px;" src="assets/images/visa.png" alt=""></a>
                                        <a href="#" class="footer-link"><img style="width:50px;" src="assets/images/mastercard.png" alt=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

     
            <div class="company-name-bg">
                APILAGE AI
            </div>

            <p class="copyright-text">
                © 2026 Apilage AI. All rights reserved.
            </p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/uikit@3.16.14/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.16.14/dist/js/uikit-icons.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
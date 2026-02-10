<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pocket Genius</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.16.14/dist/css/uikit.min.css" />
    <link rel="icon" href="./assets/images/logo.png">
    <style>
        :root {
            --font-primary: 'Montserrat', sans-serif;
        }

        body {
            font-family: var(--font-primary);
            line-height: 1.5;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
        }

        .pg-heading {
            font-size: clamp(2rem, 4vw, 2.625rem);
            font-weight: 600;
        }

        .pg-text {
            font-size: clamp(1rem, 1.2vw, 1.125rem);
            font-weight: 400;
            line-height: 1.6;
        }

        .pg-btn-primary {
            background-color: #172554;
            color: white;
            padding: 14px 32px;
            border-radius: 50px;
            font-weight: 600;
            border: none;
            transition: all 0.3s ease;
            font-size: 15px;
        }

        .pg-btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(255, 59, 48, 0.3);
        }

        .pg-btn-secondary {
            background-color: white;
            color: #333;
            padding: 14px 32px;
            border-radius: 50px;
            font-weight: 600;
            border: 1px solid #6e6e6e;
            transition: all 0.3s ease;
            font-size: 15px;
        }

        .pg-btn-secondary:hover {
            background-color: #f8f9fa;
            transform: translateY(-2px);
        }
        .pg-feature-badge {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 8px 24px;
            border-radius: 100px;
            border: 1px solid #d7d7d7;
            font-weight: 500;
            background-color: rgba(255, 255, 255, 0.1);
            color: white;
        }

        .pg-hero-section {
            padding: 60px 0;
        }

        .pg-hero-wrapper {
            background-image: url('assets/images/section.png');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            padding: 60px 30px;
            border-radius: 20px;
            position: relative;
        }

        .pg-hero-content {
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-wrap: wrap;
        }

        .pg-hero-text {
            max-width: 600px;
        }

        .pg-hero-text img.pg-playstore {
            margin-top: 10px;
        }

        .pg-hero-phone {
            position: absolute;
            top: -160px;
            right: 0;
            width: 520px;
            max-width: 100%;
            object-fit: cover;
        }

        @media (max-width: 992px) {
            .pg-hero-phone {
                height: 60vh;
                top: -20px;
                position: relative;
                width: auto;
                margin: 0 auto;
                display: block;
            }

            .pg-hero-text {
                text-align: center;
                margin-bottom: 30px;
            }

            .pg-feature-badge {
                justify-content: center;
            }
        }
    </style>
</head>

<body>

    <section class="pg-hero-section">
        <div class="container">
            <div class="pg-hero-wrapper mt-5">
                <div class="pg-hero-content row align-items-center">
                    <div class="col-lg-6 pg-hero-text">
                        <div class="pg-feature-badge mb-3">
                            <img src="assets/icons/diamond.png" width="20" height="20" alt="Diamond Icon">
                            <span>Advanced Features</span>
                        </div>

                        <h2 class="pg-heading text-white"><span style="font-weight:700;">Pocket Genius</span> <br>is now here!</h2>
                        <p class="pg-text text-white">Download our official mobile app from Play Store and study on the bus</p>
                        <img src="assets/images/playsotre.png" class="pg-playstore" style="width: 200px;" alt="Playstore">
                    </div>
                    <div class="col-lg-6 pg-hero-image">
                        <img src="assets/images/mobile.png" class="pg-hero-phone" alt="Mobile App">
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>

</html>
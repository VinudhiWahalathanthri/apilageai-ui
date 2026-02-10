<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


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
        }

        /* Headings */
        h1 {
            font-size: clamp(2.5rem, 5vw, 3.375rem);
            /* 40 → 54 */
            font-weight: 600;
            line-height: 1.2;
        }

        h2 {
            font-size: clamp(2rem, 4vw, 2.625rem);
            /* 32 → 42 */
            font-weight: 600;
        }

        h3 {
            font-size: clamp(1.5rem, 3vw, 1.875rem);
            /* 24 → 30 */
            font-weight: 500;
        }

        /* Body text */
        p {
            font-size: clamp(1rem, 1.2vw, 1.125rem);
            /* 16 → 18 */
            font-weight: 400;
            line-height: 1.6;
        }

        .small-text {
            font-size: 0.875rem;
        }
    </style>


    <style>
        .pricing-section {
            padding: 100px 0;
            background-color: #ffffff;

            background-image: radial-gradient(circle,
                    rgba(146, 146, 146, 0.25) 1px,
                    transparent 1px);

            background-size: 20px 20px;
        }


        .pricing-card {
            background: white;
            border: 2px solid #e0e0e0;
            border-radius: 24px;
            padding: 40px 32px;
            transition: all 0.3s ease;
            height: 100%;
            margin-top:40px;
        }

        .pricing-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 12px 40px rgba(0, 0, 0, 0.12);
        }

        .pricing-card.featured {
            border-color: #ff3b30;
            background: linear-gradient(180deg, #fff 0%, #fff5f5 100%);
        }

        .pricing-badge {
            background: #ff3b30;
            color: white;
            padding: 6px 16px;
            border-radius: 50px;
            font-size: 0.75rem;
            font-weight: 600;
            display: inline-block;
            margin-bottom: 16px;
        }

        .pricing-name {
            font-size: 1.125rem;
            font-weight: 600;
            margin-bottom: 12px;
        }

        .pricing-price {
            font-size: clamp(2rem, 4vw, 3rem);
            /* Responsive price */
            font-weight: 700;
            ;
        }

        .pricing-price span {
            font-size: 1.25rem;
            color: #727272;
        }

        .pricing-period {
            font-size: 0.875rem;
            color: #727272;
            margin-bottom: 24px;
        }

        .pricing-cta {
            width: 100%;
            padding: 14px;
            border-radius: 50px;
            font-weight: 600;
            border: none;
            font-size: 0.95rem;
            margin-bottom: 24px;
            cursor: pointer;
        }

        .pricing-cta.primary {
            background: #ff3b30;
            color: white;
        }

        .pricing-cta.secondary {
            background: #030f39;
            color: white;
        }

        .pricing-features {
            list-style: none;
            padding: 0;
        }

        .pricing-features li {
            padding: 10px 0;
            font-size: 0.875rem;
            border-bottom: 1px solid #f0f0f0;
        }

        .pricing-features li i {
            color: #28a745;
            margin-right: 8px;
        }

        .feature-badge {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 8px 24px;
            border-radius: 100px;
            border: 1px solid #d7d7d7;
            font-weight: 500;
        }
    </style>


</head>


<body>

    <div class="pricing-section">
        <div class="container">
            <div class="row justify-content-center mb-4">
                <div class="col-12 text-center">
                    <div class="feature-badge mb-3">
                        <img src="assets/icons/diamond.png" width="20" height="20" alt="Diamond Icon">
                        <span>Pricing Plans</span>
                    </div>
                    <h2 style="font-family: 'Montserrat';">Pay As You Go <img src="assets/icons/rocket.png" style="margin-left:10px;" width="45" alt=""></h2>
                    <p class="text-secondary">No Subsciptions. No Noncesnce</p>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 col-12 mb-4 mt-5">
                    <div class="pricing-card">
                        <div class="pricing-name">Standard</div>
                        <div class="pricing-price">Rs 1199 <span>/month</span></div>
                        <div class="pricing-period">Billed monthly</div>
                        <button class="pricing-cta secondary">Get Started</button>
                        <ul class="pricing-features">
                            <li><i class="bi bi-check-circle-fill"></i> Unlimited Chats</li>
                            <li><i class="bi bi-check-circle-fill"></i> Unlimited Image Analysis</li>
                            <li><i class="bi bi-check-circle-fill"></i> Unlimited Image Generation</li>
                            <li><i class="bi bi-check-circle-fill"></i> Access to all models</li>
                            <li><i class="bi bi-check-circle-fill"></i> Valid for 60 days</li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-12 mb-4">
                    <div class="pricing-card featured">
                        <div class="pricing-badge">MOST POPULAR</div>
                        <div class="pricing-name">Premium</div>
                        <div class="pricing-price">Rs 999 <span>/month</span></div>
                        <div class="pricing-period">Billed monthly</div>
                        <button class="pricing-cta primary">Get Started</button>
                        <ul class="pricing-features">
                            <li><i class="bi bi-check-circle-fill"></i> Unlimited Chats</li>
                            <li><i class="bi bi-check-circle-fill"></i> Unlimited Image Analysis</li>
                            <li><i class="bi bi-check-circle-fill"></i> Unlimited Image Generation</li>
                            <li><i class="bi bi-check-circle-fill"></i> Access to all models</li>
                            <li><i class="bi bi-check-circle-fill"></i> Access to graphing & code generation</li>
                            <li><i class="bi bi-check-circle-fill"></i> Valid for 60 days</li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-12 mb-4 mt-5">
                    <div class="pricing-card">
                        <div class="pricing-name">Power User <img src="assets/icons/spark.png" width="20" style="margin-left: 5px;margin-top:-10px;" alt=""></div>
                        <div class="pricing-price">Rs 2999 <span>/month</span></div>
                        <div class="pricing-period">Exclusive Features</div>
                        <button class="pricing-cta secondary">Get Started</button>
                        <ul class="pricing-features">
                            <li><i class="bi bi-check-circle-fill"></i>150,000 AI Tokens</li>
                            <li><i class="bi bi-check-circle-fill"></i>API Access Included</li>
                            <li><i class="bi bi-check-circle-fill"></i>Valid for 60 days</li>
                            <li><i class="bi bi-check-circle-fill"></i>Access to latest releases</li>
                            <li><i class="bi bi-check-circle-fill"></i>Access to video generation model</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        const hero = document.querySelector('.hero-section');
        const cursor = document.querySelector('.hero-cursor');

        hero.addEventListener('mouseenter', () => {
            cursor.style.opacity = '1';
        });

        hero.addEventListener('mouseleave', () => {
            cursor.style.opacity = '0';
        });

        hero.addEventListener('mousemove', (e) => {
            cursor.style.left = e.clientX + 'px';
            cursor.style.top = e.clientY + 'px';
        });
    </script>


</body>

</html>
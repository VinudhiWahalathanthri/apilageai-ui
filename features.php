<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feature Section with Blur Effect</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">


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
        body {
            padding: 50px 0;
        }

        .feature-card {
            background: rgb(252, 249, 251);
            border-radius: 18px;
            padding: 40px 30px;
            height: 100%;
            border: 2px solid #f7f4f7;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .feature-card:hover {
            transform: translateY(-5px);
        }

        .feature-image-container {
            position: relative;
            margin-bottom: 30px;
            height: 280px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .feature-image {
            width: 100%;
            height: 100%;
            object-fit: contain;
            border-radius: 12px;
        }

        /* Blur overlay effect */
        .feature-image-container::after {
            content: '';
            position: absolute;
            bottom: -30px;
            left: 0;
            right: 0;
            height: 60px;
            background: linear-gradient(to bottom, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, 0.8) 50%, rgba(255, 255, 255, 1) 100%);
            backdrop-filter: blur(8px);
            -webkit-backdrop-filter: blur(8px);
            pointer-events: none;
        }

        .feature-title {
            font-size: 1.5rem;
            font-weight: 600;
            color: #1a1a1a;
            margin-bottom: 15px;
        }

        .feature-description {
            font-size: 1rem;
            color: #666;
            line-height: 1.6;
        }

        /* Feature badge styling */
        .feature-badge {
            background: white;
            border: 1px solid #e0e0e0;
            border-radius: 25px;
            padding: 10px 20px;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            font-size: 0.9rem;
            color: #333;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
        }

        /* Content section styling */
        .content-section {
            margin-bottom: 30px;
        }

        .content-section h1 {
            font-size: 2.5rem;
            font-weight: 700;
            color: #1a1a1a;
            margin-bottom: 20px;
            line-height: 1.3;
        }

        .content-section p {
            font-size: 1.1rem;
            color: #666;
            line-height: 1.6;
        }

        /* Placeholder images with different styles */
        .placeholder-ai {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 3rem;
            width: 100%;
            height: 100%;
        }

        .placeholder-templates {
            background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 3rem;
            width: 100%;
            height: 100%;
        }

        .placeholder-seo {
            background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 3rem;
            width: 100%;
            height: 100%;
        }

        .placeholder-integrations {
            background: linear-gradient(135deg, #43e97b 0%, #38f9d7 100%);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 3rem;
            width: 100%;
            height: 100%;
        }

        .placeholder-responsive {
            background: linear-gradient(135deg, #fa709a 0%, #fee140 100%);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 3rem;
            width: 100%;
            height: 100%;
        }

        .container {
            max-width: 1200px;
        }

        /* Badge section wrapper */
        .badge-section {
            background: white;
            padding: 50px 0;
            margin-bottom: 30px;
        }

        @media (max-width: 768px) {
            .content-section h1 {
                font-size: 2rem;
            }

            .content-section p {
                font-size: 1rem;
            }
        }
    </style>
</head>

<body>
    <div class="badge-section">
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex justify-content-center">
                    <div class="feature-badge">
                        <img src="assets/icons/diamond.png" width="20" height="20" alt="Diamond Icon">
                        <span>Advanced Features</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row g-4">
            <div class="col-12 text-center content-section">
                <h1>
                    More Than Just Chat <br>
                    We visualized learning
                </h1>
                <p>
                    AI-Powered chatbot that understands context, responds naturally, and helps <br>
                    teams deliver instant, accurate support – 24/7 without extra effort
                </p>
            </div>

            <!-- AI-Powered Design Assistance -->
            <div class="col-lg-6 col-md-6">
                <div class="feature-card">
                    <div class="feature-image-container">
                        <img src="assets/images/sharewfriends.png" alt="AI Design" class="feature-image">
                    </div>
                    <h3 class="feature-title">AI-Powered Design Assistance</h3>
                    <p class="feature-description">
                        Get personalized design recommendations with AI-powered tools that helping you create a polished, professional website effortlessly.
                    </p>
                </div>
            </div>

            <!-- Customizable Templates -->
            <div class="col-lg-6 col-md-6">
                <div class="feature-card">
                    <div class="feature-image-container">
                        <div class="placeholder-templates">
                            <span>🎨</span>
                        </div>
                    </div>
                    <h3 class="feature-title">Customizable Templates</h3>
                    <p class="feature-description">
                        Choose from a wide range of professionally designed templates. Easily customize fonts, colors, and layouts to reflect your brand's.
                    </p>
                </div>
            </div>

            <!-- SEO Tools Built-In -->
            <div class="col-lg-4 col-md-6">
                <div class="feature-card">
                    <div class="feature-image-container">
                        <div class="placeholder-seo">
                            <span>📊</span>
                        </div>
                    </div>
                    <h3 class="feature-title">SEO Tools Built-In</h3>
                    <p class="feature-description">
                        Boost your website's visibility with integrated SEO tools.
                    </p>
                </div>
            </div>

            <!-- Seamless Integrations -->
            <div class="col-lg-4 col-md-6">
                <div class="feature-card">
                    <div class="feature-image-container">
                        <div class="placeholder-integrations">
                            <span>🔗</span>
                        </div>
                    </div>
                    <h3 class="feature-title">Seamless Integrations</h3>
                    <p class="feature-description">
                        easily connect with your favorite apps and services for a website experience.
                    </p>
                </div>
            </div>

            <!-- Responsive Design -->
            <div class="col-lg-4 col-md-6">
                <div class="feature-card">
                    <div class="feature-image-container">
                        <div class="placeholder-responsive">
                            <span>📱</span>
                        </div>
                    </div>
                    <h3 class="feature-title">Responsive Design</h3>
                    <p class="feature-description">
                        Create websites that look stunning on any device.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apilage AI - Sri Lanka's #1 Productivity AI Platform</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.16.14/dist/css/uikit.min.css" />
    <link rel="icon" href="./assets/images/logo.png">
    <link rel="stylesheet" href="style.css">

    <style>
        * {
            font-family: 'Montserrat', sans-serif;
        }

        .hero-section {
            margin-top: -100px;
            background-image: url('assets/images/hero-bg.png');
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
        }

        .trust-badge {
            display: inline-flex;
            align-items: center;
            gap: 12px;
            background: rgba(255, 255, 255, 0.3);
            backdrop-filter: blur(50px);
            padding: 5px 15px;
            border-radius: 50px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            margin-bottom: 30px;
        }

        .avatar-group {
            display: flex;
            align-items: center;
        }

        .avatar {
            width: 25px;
            height: 25px;
            border-radius: 50%;
            margin-left: -12px;
            object-fit: cover;
        }

        .avatar:first-child {
            margin-left: 0;
        }

        .trust-text {
            display: flex;
            align-items: center;
            gap: 6px;
            font-size: 13px;
            font-weight: 600;
            color: #ffffff;
            margin: 0;
        }

        .star-icon {
            color: #FFD700;
            font-size: 16px;
        }

        .button-container {
            display: flex;
            gap: 16px;
            margin-top: 20px;
            justify-content: center;
            flex-wrap: wrap;
        }

        .video-container {
            border-radius: 80px;
            overflow: hidden;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.15);
        }

        .video-container iframe {
            border-radius: 80px;
        }

        .feature-badge {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 8px 25px;
            margin: 20px;
            background-color: #ffffff;
            border-radius: 100px;
            border: 1px solid #d7d7d7;
            font-weight: 500;
            color: #000;
        }

        .feature-badge img {
            display: block;
        }

        .white-badge {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 8px 16px;
            background-color: #ffffff5a;
            border-radius: 100px;
            border: 1px solid #ffffff;
            font-weight: 500;
            color: white;
        }

        .white-badge img {
            display: block;
        }

        .content-section {
            padding: 80px 0;
        }

        .content-section h1 {
            font-family: 'Montserrat', sans-serif;
            font-weight: 500;
            color: #000;
            margin-bottom: 16px;
            font-size: 48px;
        }

        .content-section p {
            font-size: 16px;
            color: #727272;
            margin: 0 auto;
            max-width: 700px;
            line-height: 1.6;
        }

        .feature-card {
            background: #ffffff;
            border-radius: 24px;
            padding: 40px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
            margin-bottom: 30px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .feature-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.12);
        }

        .feature-icon {
            width: 60px;
            height: 60px;
            background: #ff3b30;
            border-radius: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 20px;
        }

        .feature-icon i {
            font-size: 28px;
            color: white;
        }

        .feature-card h3 {
            font-size: 24px;
            font-weight: 600;
            margin-bottom: 12px;
            color: #000;
        }

        .feature-card p {
            font-size: 15px;
            color: #727272;
            line-height: 1.6;
            margin: 0;
        }

        .stats-section {
            background: linear-gradient(135deg, #ff3b30 0%, #ff6b30 100%);
            padding: 80px 0;
            color: white;
        }

        .stat-item {
            text-align: center;
            padding: 20px;
        }

        .stat-number {
            font-size: 48px;
            font-weight: 700;
            margin-bottom: 8px;
        }

        .stat-label {
            font-size: 16px;
            opacity: 0.9;
        }

        .cta-section {
            background: #f8f9fa;
            padding: 100px 0;
            text-align: center;
        }

        .cta-section h2 {
            font-size: 48px;
            font-weight: 600;
            margin-bottom: 20px;
            color: #000;
        }

        .cta-section p {
            font-size: 18px;
            color: #727272;
            margin-bottom: 40px;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }

        @media (max-width: 768px) {
            .trust-badge {
                padding: 8px 15px;
                gap: 10px;
            }

            .avatar {
                width: 30px;
                height: 30px;
                margin-left: -10px;
            }

            .trust-text {
                font-size: 13px;
            }

            .button-container {
                flex-direction: column;
                align-items: center;
            }

            .video-container iframe {
                width: 100%;
                height: 300px;
            }

            .content-section h1 {
                font-size: 32px;
            }

            .content-section {
                padding: 40px 0;
            }

            .feature-card {
                padding: 30px;
            }

            .stat-number {
                font-size: 36px;
            }

            .cta-section h2 {
                font-size: 32px;
            }

            .cta-section {
                padding: 60px 20px;
            }
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row">

            <div class="col-12 hero-section">
                <?php include 'header.php'; ?>

                <div class="d-flex flex-column justify-content-center align-items-center text-center" style="height: 80vh;">

                    <div class="trust-badge">
                        <div class="avatar-group">
                            <img src="https://i.pravatar.cc/150?img=1" alt="User" class="avatar">
                            <img src="https://i.pravatar.cc/150?img=2" alt="User" class="avatar">
                            <img src="https://i.pravatar.cc/150?img=3" alt="User" class="avatar">
                            <img src="https://i.pravatar.cc/150?img=4" alt="User" class="avatar">
                        </div>
                        <p class="trust-text">
                            <i class="bi bi-star-fill star-icon"></i>
                            <span>Trusted by <strong>1,000+</strong> students</span>
                        </p>
                    </div>

                    <h1 class="text-white mb-4" style="font-size: 2.5rem; font-weight: 600; font-family: 'Montserrat', sans-serif;">Sri Lanka's #1st Productivity AI Platform</br>
                        for local students</h1>
                    <p class="text-white mb-4" style="font-size:16px; max-width: 600px; font-family: 'Montserrat', sans-serif;">Meet <b>ApilageAI</b>. The AI that actually understands us. Mindmaps, Flowcharts, and Sinhala/English support built right in.</p>

                    <div class="button-container">
                        <button class="btn-get-started text-white" style="background-color: #ff3b30;">
                            Start Learning for free
                        </button>
                        <button class="btn-get-started">
                            Try API <i class="bi bi-arrow-right fs-5"></i>
                        </button>
                    </div>
                </div>

                <div class="col-lg-10 col-12 px-3 px-lg-0" style="border:1px solid #aa7278; margin: auto; text-align: center;border-radius:16px; border-bottom-left-radius:0px; border-bottom-right-radius: 0px;">
                    <img src="assets/images/hero-ex.png" class="img-fluid" style="margin-bottom:-10px; border:8px solid #2a2a2a90; border-radius: 16px; border-bottom-left-radius: 0px; border-bottom-right-radius:0px;" alt="">
                </div>
            </div>

            <div class="col-12 bg-white d-flex justify-content-center" style="margin-top:-10px;">
                <div class="feature-badge" style="margin-top: 150px;">
                    <img src="assets/icons/diamond.png" width="20" height="20" alt="Diamond Icon">
                    <span>Advanced Features</span>
                </div>
            </div>

            <div class="col-12 text-center content-section">
                <h1>
                    More Than Just Chat <br>
                    We visualized learning
                </h1>
                <p>
                    AI-Powered chatbot that understands context, responds naturally, and helps <br class="d-none d-lg-block">
                    teams deliver instant, accurate support – 24/7 without extra effort
                </p>
            </div>

            <!-- Apilage Video Section -->
            <div class="col-12" style="background-image:url('assets/images/section.png'); background-size: cover; background-position: center;">
                <div class="row">
                    <div class="col-lg-6 col-12">
                        <div class="p-3 p-lg-5">
                            <div class="white-badge">
                                <img src="assets/icons/diamond-white.png" width="20" height="20" alt="Diamond Icon">
                                <span>Advanced Features</span>
                            </div>

                            <h1 class="text-white mt-4" style="font-size: clamp(24px, 5vw, 40px); font-weight: 400; font-family: 'Montserrat', sans-serif;">Introducing</h1>
                            <h1 class="text-white mb-4" style="font-size: clamp(36px, 8vw, 64px); font-weight: 600; font-family: 'Montserrat', sans-serif;">Apilage-Video</h1>
                            <p class="text-white mb-4" style="font-size:16px; max-width: 600px; font-family: 'Montserrat', sans-serif;">Master model can speak Sinhala like a Sri Lankan person and can answer 99.99% Sinhala accurate with complex problems like Maths, Physics, Chemistry, or any other subjects. It can generate customized videos with examples you want</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12 d-flex align-items-center justify-content-center p-3 p-lg-5">
                        <div class="video-container w-100">
                            <iframe width="100%" height="315" src="https://www.youtube.com/embed/dQw4w9WgXcQ" title="Apilage Video Demo" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Features Section -->
            <div class="col-12 bg-white">
                <div class="container content-section">
                    <div class="text-center mb-5">
                        <div class="feature-badge">
                            <img src="assets/icons/diamond.png" width="20" height="20" alt="Diamond Icon">
                            <span>Core Features</span>
                        </div>
                        <h1 class="mt-4">Everything You Need to Excel</h1>
                        <p>Powerful features designed specifically for Sri Lankan students</p>
                    </div>

                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="feature-card">
                                <div class="feature-icon">
                                    <i class="bi bi-diagram-3"></i>
                                </div>
                                <h3>Mindmaps & Flowcharts</h3>
                                <p>Visualize complex concepts with AI-generated mindmaps and flowcharts that make learning intuitive and memorable.</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="feature-card">
                                <div class="feature-icon">
                                    <i class="bi bi-translate"></i>
                                </div>
                                <h3>Sinhala & English Support</h3>
                                <p>Seamlessly switch between Sinhala and English. Our AI understands local context and language nuances perfectly.</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="feature-card">
                                <div class="feature-icon">
                                    <i class="bi bi-calculator"></i>
                                </div>
                                <h3>Subject Mastery</h3>
                                <p>Get expert help in Maths, Physics, Chemistry, and all subjects with step-by-step explanations tailored to your curriculum.</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="feature-card">
                                <div class="feature-icon">
                                    <i class="bi bi-camera-video"></i>
                                </div>
                                <h3>Custom Video Generation</h3>
                                <p>Create personalized learning videos with examples relevant to you, making complex topics easier to understand.</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="feature-card">
                                <div class="feature-icon">
                                    <i class="bi bi-chat-dots"></i>
                                </div>
                                <h3>24/7 AI Support</h3>
                                <p>Get instant answers to your questions anytime, anywhere. Never wait for a tutor again.</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="feature-card">
                                <div class="feature-icon">
                                    <i class="bi bi-lightbulb"></i>
                                </div>
                                <h3>Smart Learning Paths</h3>
                                <p>Personalized study plans that adapt to your learning style and pace for maximum efficiency.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Stats Section -->
            <div class="col-12 stats-section">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-12">
                            <div class="stat-item">
                                <div class="stat-number">1,000+</div>
                                <div class="stat-label">Active Students</div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-12">
                            <div class="stat-item">
                                <div class="stat-number">99.99%</div>
                                <div class="stat-label">Accuracy Rate</div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-12">
                            <div class="stat-item">
                                <div class="stat-number">24/7</div>
                                <div class="stat-label">Support Available</div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-12">
                            <div class="stat-item">
                                <div class="stat-number">50+</div>
                                <div class="stat-label">Subjects Covered</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- CTA Section -->
            <div class="col-12 cta-section">
                <div class="container">
                    <h2>Ready to Transform Your Learning?</h2>
                    <p>Join thousands of Sri Lankan students who are already learning smarter with ApilageAI</p>
                    <div class="button-container">
                        <button class="btn-get-started text-white" style="background-color: #ff3b30;">
                            Start Learning for Free
                        </button>
                        <button class="btn-get-started">
                            View Pricing <i class="bi bi-arrow-right fs-5"></i>
                        </button>
                    </div>
                </div>
            </div>

        </div>
        <?php include 'footer.php'; ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/uikit@3.16.14/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.16.14/dist/js/uikit-icons.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        const hero = document.querySelector('.hero-section');
        const cursor = document.querySelector('.hero-cursor');

        if (cursor) {
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
        }
    </script>

</body>

</html>
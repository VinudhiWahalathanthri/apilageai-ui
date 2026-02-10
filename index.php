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
    <link rel="stylesheet" href="style.css">

    <style>
        * {
            font-family: 'Montserrat', sans-serif;
        }

        .hero-section {
            background-image: url('assets/images/hero-bg.png');
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
            /* height: 1300px; */
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
            /* border: 3px solid white; */
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
            /* margin: 20px; */
            background-color: #ffffff5a;
            border-radius: 100px;
            border: 1px solid #ffffff;
            font-weight: 500;
            color: white;
        }

        .white-badge img {
            display: block;
        }

        /* Text section spacing */
        .content-section {
            padding-bottom: 80px;
        }

        .content-section h1 {
            font-family: 'Montserrat', sans-serif;
            font-weight: 500;
            color: #000;
            margin-bottom: 16px;
        }

        .content-section p {
            font-size: 16px;
            color: #727272;
            margin: 0 auto;
            max-width: 700px;
            line-height: 1.6;
        }
    </style>
</head>

<body>
    <div>
        <div>

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

                <div class="col-10" style="border:1px solid #aa7278; margin: auto; text-align: center;border-radius:16px; border-bottom-left-radius:0px; border-bottom-right-radius: 0px;">
                    <img src="assets/images/hero-ex.png" style="margin-bottom:-10px;width:'80%'; border:8px solid #2a2a2a90; border-radius: 16px; border-bottom-left-radius: 0px; border-bottom-right-radius:0px;" alt="">
                </div>
            </div>



            <?php include 'pricing.php'; ?>

            <?php include 'api.php'; ?>

           <?php include 'mobileapp.php'; ?>

        </div>
        <?php include 'footer.php'; ?>
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
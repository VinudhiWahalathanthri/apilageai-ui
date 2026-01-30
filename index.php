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

    <link rel="icon" href="./assets/images/wings logo.png">
    <link rel="stylesheet" href="style.css">

    <style>
        .hero-section {
            background-image: url('assets/images/hero-bg.png');
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
            height: 100vh;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row">

            <div class="col-12 hero-section">
                <?php include 'header.php'; ?>

                <!-- Hero Content -->
                <div class="d-flex flex-column justify-content-center align-items-center text-center" style="height: 80vh;">
                    <h1 class="text-white mb-4" style="font-size: 3.5rem; font-weight: 700;">Sri Lanka’s #1st Productivity AI Platform</br>
                        for local students</h1>
                    <p class="text-white mb-4" style="font-size: 1.25rem; max-width: 600px;">Meet <b>ApilageAI</b>. The AI that actually understands us. Mindmaps, Flowcharts, and Sinhala/English support built right in.</p>


                </div>
            </div>


            <?php include 'footer.php'; ?>
        </div>
    </div>
</body>

</html>
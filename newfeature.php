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
        .background-red {
            background-image: url("assets/images/section.png");
            background-repeat: no-repeat;
            background-size: cover;
        }

        .feature-badge {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            margin-left: -2px;
            padding: 8px 24px;
            border-radius: 100px;
            border: 1px solid #d7d7d7;
            font-weight: 500;
        }

        .button-container-api {
            display: flex;
            gap: 16px;
            margin-top: 20px;
            flex-wrap: wrap;
        }

        .btn-blue-custom {
            background-color: #172554;
            color: white;
            padding: 14px 32px;
            border-radius: 50px;
            font-weight: 600;
            border: none;
            transition: all 0.3s ease;
            font-size: 15px;
        }

        .btn-blue-custom:hover {
            background-color: #172554;
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(255, 59, 48, 0.3);
        }

        .btn-api-custom {
            background-color: white;
            color: #333;
            padding: 14px 32px;

            border-radius: 50px;
            font-weight: 600;
            border: 1px solid #6e6e6e;
            transition: all 0.3s ease;
            font-size: 15px;
        }

        .btn-api-custom:hover {
            background-color: #f8f9fa;
            transform: translateY(-2px);
        }
    </style>


</head>


<body>

    <div class="background-red">
        <div class="container text-white">
            <div class="row mb-4">
                <div class="col-12">
                    <div class="feature-badge mb-3">
                        <img src="assets/icons/diamond.png" width="20" height="20" alt="Diamond Icon">
                        <span>Advanced Features</span>
                    </div>
                    <div class="row mt-3">
                        <div class="col-lg-6">
                            <h3 class="text-white" style="font-family:'Montserrat';">Introducing</h3>
                            <h2 class="text-white" style="margin-top: -10px;font-family: 'Montserrat';font-weight:600;">Apilage Video</span></h2>

                            <p>Master model can speak Sinhala like a Sri Lankan person and can answer 99.99% Sinhala accurate with complex problems like Maths, Physics, Chemistry, or any other subjects.
                                <br>
                                It can generate customized videos with examples you want
                            </p>
                        </div>
                        <div class="col-lg-6">
                            <img src="assets/images/hero-ex.png" alt="Apilage Video" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <script>
        const copyBtn = document.getElementById('copyBtn');
        const codeContent = document.getElementById('codeContent');
        const tooltip = document.getElementById('tooltip');

        copyBtn.addEventListener('click', async () => {
            try {
                // Get the text content without HTML tags
                const textToCopy = codeContent.textContent;

                // Copy to clipboard
                await navigator.clipboard.writeText(textToCopy);

                // Show feedback
                copyBtn.classList.add('copied');
                tooltip.classList.add('show');

                // Reset after 2 seconds
                setTimeout(() => {
                    copyBtn.classList.remove('copied');
                    tooltip.classList.remove('show');
                }, 2000);
            } catch (err) {
                console.error('Failed to copy:', err);
            }
        });
    </script>

</body>

</html>
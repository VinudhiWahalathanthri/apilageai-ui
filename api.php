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



        /* ///API */


        .terminal-container {
            width: 100%;
            background: #172554;
            border-radius: 10px;
            box-shadow: 0 1px 1px rgba(0, 0, 0, 0.3);
            overflow: hidden;
            position: relative;
        }

        .terminal-header {
            background: #172554;
            padding: 12px 16px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .terminal-buttons {
            display: flex;
            gap: 8px;
        }

        .terminal-button {
            width: 12px;
            height: 12px;
            border-radius: 50%;
        }

        .button-red {
            background: #ff5f56;
        }

        .button-yellow {
            background: #ffbd2e;
        }

        .button-green {
            background: #27c93f;
        }

        .copy-button {
            background: transparent;
            border: none;
            cursor: pointer;
            padding: 6px;
            border-radius: 4px;
            transition: background 0.2s;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .copy-button:hover {
            background: rgba(255, 255, 255, 0.1);
        }

        .copy-button svg {
            width: 18px;
            height: 18px;
            fill: #8e9aaf;
        }

        .copy-button.copied svg {
            fill: #27c93f;
        }

        .terminal-body {
            padding: 16px;
            margin-top: -10px;
            background: #172554;
        }

        .code-block {
            font-family: 'Monaco', 'Menlo', 'Ubuntu Mono', monospace;
            font-size: 14px;
            line-height: 0.5;
            color: #ecf0f1;
            background: #172554;
            border: none;
        }

        .code-line {
            display: block;
            margin-bottom: 4px;
        }

        .command {
            color: #3498db;
        }

        .flag {
            color: #ffffff;
        }

        .string {
            color: #2ecc71;
        }

        .backslash {
            color: #ecf0f1;
        }

        .tooltip {
            position: absolute;
            top: 50px;
            right: 20px;
            background: #27c93f;
            color: white;
            padding: 6px 12px;
            border-radius: 4px;
            font-size: 12px;
            opacity: 0;
            transition: opacity 0.2s;
            pointer-events: none;
        }

        .tooltip.show {
            opacity: 1;
            transition: 0.2s ease-out;
        }
    </style>


</head>


<body>

    <div class="pricing-section">
        <div class="container">
            <div class="row mb-4">
                <div class="col-12">
                    <div class="feature-badge mb-3">
                        <img src="assets/icons/diamond.png" width="20" height="20" alt="Diamond Icon">
                        <span>Developers</span>
                    </div>
                    <div class="row mt-3">
                        <div class="col-lg-6">

                            <h2 style="font-family: 'Montserrat';">Build the Future <br>with <span style="color: #ff3b30;">Apilage AI</span></h2>
                            <!-- <p class="text-secondary">No Subsciptions. No Noncesnce</p> -->
                        </div>

                        <div class="col-lg-6">
                            <p>Integrate Sri Lanka's most powerful educational AI models directly into your LMS, website, or mobile app. Native Sinhala support out of the box.</p>
                            <div class="button-container-api">
                                <button class="btn-api-custom">
                                    Try API
                                </button>
                                <button class="btn-blue-custom">
                                    Read Docs
                                </button>
                            </div>

                        </div>
                    </div>

                    <div style="width: 100%; border: 1px solid #e0e0e0; border-radius: 10px;margin-top: 40px;">
                        <div style="width: 100%; border: 10px solid #ffffff; border-radius: 10px;">
                            <div class="terminal-container">
                                <div class="terminal-header">
                                    <div class="terminal-buttons">
                                        <div class="terminal-button button-red"></div>
                                        <div class="terminal-button button-yellow"></div>
                                        <div class="terminal-button button-green"></div>
                                    </div>
                                    <button class="copy-button" id="copyBtn" title="Copy to clipboard">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                            <path d="M16 1H4c-1.1 0-2 .9-2 2v14h2V3h12V1zm3 4H8c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h11c1.1 0 2-.9 2-2V7c0-1.1-.9-2-2-2zm0 16H8V7h11v14z" />
                                        </svg>
                                    </button>
                                </div>
                                <div class="terminal-body">
                                    <pre class="code-block" id="codeContent"><span class="code-line"><span class="command">curl</span> <span class="flag">-s -X POST</span> <span class="string">APILAGEAPI_URL</span> <span class="backslash">\</span></span>
        <span class="code-line">  <span class="flag">-H</span> <span class="string">"Content-Type: application/json"</span> <span class="backslash">\</span></span>
        <span class="code-line">  <span class="flag">-H</span> <span class="string">"Authorization: Bearer APILAGEAI_API"</span> <span class="backslash">\</span></span>
        <span class="code-line">  <span class="flag">-d</span> <span class="string">'{"message": "Explain Newton law of motion", "enableGoogleSearch": true}'</span> <span class="backslash">\</span></span>
        <span class="code-line">| <span class="command">jq</span> <span class="flag">-r</span> <span class="string">'.response'</span></span></pre>
                                </div>
                                <div class="tooltip" id="tooltip">Copied!</div>
                            </div>
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
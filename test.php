<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Google Font: Montserrat -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">

    <title>Montserrat Typography Test</title>

    <style>
        :root {
            --font-primary: 'Montserrat', sans-serif;
        }

        body {
            margin: 0;
            padding: 2rem;
            font-family: var(--font-primary);
            background: #0f172a;
            color: #ffffff;
            line-height: 1.5;
        }

        section {
            max-width: 900px;
            margin: auto;
        }

        h1 {
            font-size: clamp(2.5rem, 5vw, 3.375rem);
            /* 40 → 54 */
            font-weight: 600;
            line-height: 1.2;
            margin-bottom: 1rem;
        }

        h2 {
            font-size: clamp(2rem, 4vw, 2.625rem);
            /* 32 → 42 */
            font-weight: 600;
            line-height: 1.25;
            margin-bottom: 0.75rem;
        }

        h3 {
            font-size: clamp(1.5rem, 3vw, 1.875rem);
            /* 24 → 30 */
            font-weight: 500;
            line-height: 1.3;
            margin-bottom: 0.5rem;
        }

        p {
            font-size: clamp(1rem, 1.2vw, 1.125rem);
            /* 16 → 18 */
            max-width: 600px;
            margin-bottom: 1.25rem;
        }

        .small-text {
            font-size: 0.875rem;
            /* 14px */
            opacity: 0.75;
        }

        .box {
            border: 1px solid rgba(255, 255, 255, 0.15);
            padding: 1.5rem;
            border-radius: 12px;
            margin-bottom: 2rem;
            background: rgba(255, 255, 255, 0.03);
        }

        .label {
            font-size: 0.75rem;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            opacity: 0.6;
            margin-bottom: 0.5rem;
            display: block;
        }


        .code-container {
            position: relative;
            background-color: #1e1e2f;
            color: #d4d4d4;
            padding: 16px;
            border-radius: 8px;
            font-family: 'Fira Code', monospace;
            overflow-x: auto;
        }

        .code-container pre {
            margin: 0;
            white-space: pre-wrap;
            /* allows line wrap */
            word-break: break-word;
        }

        .copy-btn {
            position: absolute;
            top: 8px;
            right: 8px;
            background-color: #3a3a55;
            color: #fff;
            border: none;
            padding: 4px 10px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 0.9em;
        }

        .copy-btn:hover {
            background-color: #505075;
        }
    </style>
</head>

<body>
    <section>

        <div class="box">
            <span class="label">H1 – Hero Title</span>
            <h1>Sri Lanka's #1st Productivity AI Platform<br>for local students</h1>
        </div>

        <div class="box">
            <span class="label">H2 – Section Title</span>
            <h2>Meet ApilageAI</h2>
            <p>
                The AI that actually understands us. Mindmaps, Flowcharts, and
                Sinhala/English support built right in.
            </p>
        </div>

        <div class="box">
            <span class="label">H3 – Card / Subheading</span>
            <h3>Built for Students</h3>
            <p>
                Designed specifically for Sri Lankan students with localized learning
                support and productivity tools.
            </p>
        </div>

        <div class="box">
            <span class="label">Body Text</span>
            <p>
                This is standard body text. Resize your browser window to see how the
                font scales smoothly across mobile, tablet, and desktop sizes.
            </p>
            <p class="small-text">
                Small text – captions, hints, metadata, etc.
            </p>
        </div>

        <div class="code-container">
            <pre><code id="codeBlock">
curl -s -X POST APTLAGEAPI_URL \
-H "Content-Type: application/json" \
-H "Authorization: Bearer API_KEY" \
-d '{"message": "Explain Newton law of motion", "enableGoogleSearch": true}' \
| jq -r .response
  </code></pre>
            <button class="copy-btn" onclick="copyCode()">Copy</button>
        </div>

    </section>

    <script>
        function copyCode() {
            const code = document.getElementById("codeBlock").innerText;
            navigator.clipboard.writeText(code).then(() => {
                alert("Code copied to clipboard!");
            });
        }
    </script>
</body>

</html>
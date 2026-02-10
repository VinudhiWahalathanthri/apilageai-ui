<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Terminal Code Block</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
            background: #f5f5f5;
            padding: 40px 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

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
            padding: 20px;
            background: #172554;
        }

        .code-block {
            font-family: 'Monaco', 'Menlo', 'Ubuntu Mono', monospace;
            font-size: 14px;
            line-height: 1;
            color: #ecf0f1;
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
    <div style="width: 100%; border: 1px solid #cccccc; border-radius: 10px;">
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
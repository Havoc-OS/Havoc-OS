<!-- Header -->
<?php include "header.php"; ?>

<!-- Content -->
<div class="min-h-screen flex items-center justify-center px-4 mt-4 mb-8">
    <div class="max-w-5xl p-10 bg-white w-full material-card">
        <span class="font-medium text-5xl">Changelog</span>
        <script>
            async function fetchTest() {
                    let response = await fetch('https://raw.githubusercontent.com/Havoc-OS/OTA/eleven/changelog.txt');
                    let responseText = await response.text();
                    document.getElementById('result').innerHTML = responseText;
                }
                (async () => {
                    await fetchTest();
                })();
        </script>
        <pre id="result"></pre>
        <style>
            pre {
                box-sizing: border-box;
                width: 100%;
                padding: 0;
                margin-top: 32px;
                overflow: auto;
                overflow-y: hidden;
                font-size: 16px;
                font-family: google-sans;
                color: gray;
                line-height: 20px;
                background: url(lines.png) repeat 0 0;
                padding: 10px;
            }
        </style>
    </div>
</div>

<!-- Footer -->
<?php include "footer.php"; ?>
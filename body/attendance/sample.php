<!DOCTYPE html>
<html>
<head>
    <title>SecuGen Fingerprint Demo</title>
    <script src="https://example.com/secugen.sdk.js"></script> <!-- Replace with actual SDK -->
</head>
<body>
    <h1>SecuGen Fingerprint Scanner</h1>
    <button onclick="captureFingerprint()">Scan Fingerprint</button>
    <div id="status"></div>

    <script>
        function captureFingerprint() {
            const statusDiv = document.getElementById('status');
            statusDiv.textContent = "Place your finger on the scanner...";
            
            // Initialize SecuGen scanner
            const fp = new SecuGen.FP();
            fp.init().then(() => {
                return fp.capture();
            }).then((fingerprintData) => {
                statusDiv.textContent = "Fingerprint captured!";
                console.log("Fingerprint data:", fingerprintData);
                // Send to server (e.g., via fetch())
            }).catch((error) => {
                statusDiv.textContent = "Error: " + error.message;
            });
        }
    </script>
</body>
</html>
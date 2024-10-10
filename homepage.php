<?php
session_start();
include("connect.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EastInsight</title>
    <link rel="stylesheet" href="style_qr.css">
</head>
<body>
    <div class="scanner-wrapper">
        <div class="scanner-header">
            <h1>EastInsight</h1>
        </div>
        <div class="scanner-container">
            <video id="video" class="video-container"></video>
        </div>
        <div id="output" class="output">
            <p>Scan QR Code</p>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/jsqr@1.3.1/dist/jsQR.js"></script>
    <script src="script_qr.js"></script>
</body>
</html>

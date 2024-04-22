<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{asset("/assets/img/welcome.png") }}">
    <title>IFconvert</title>
    <link rel="stylesheet" href="{{ asset("/assets/css/komprespdf.css") }}">
    @extends('template')
</head>
<body>
    <div class="container">
        <h1 class="pcn">Compress PNG files</h1>
        <p>Maximize quality, minimize size: Optimize your PNGs effortlessly.</p>
        <form id="pdf-form" enctype="multipart/form-data">
            <div>
                <label for="pdf-file" class="file-input-button" style="color: #333A73; font-weight: bold;">Choose PNG File</label>
                <input type="file" id="pdf-file" accept=".png" style="display: none;" required>
                <span id="file-name" style="color: #A9A9A9;"></span>
            </div>
            <button type="submit" id="convert-btn">Convert PNG</button>
        </form>
    </div>
    <script>
        document.getElementById('pdf-form').addEventListener('submit', function(event) {
            var fileInput = document.getElementById('pdf-file');
            var fileName = fileInput.files[0].name;
            var fileExtension = fileName.split('.').pop().toLowerCase();
            if (fileExtension !== 'png') {
                event.preventDefault();
                alert('Please choose a PNG file.');
                return false;
            }
        });

        document.getElementById('pdf-file').addEventListener('change', function() {
            var fileName = this.files[0].name;
            document.getElementById('file-name').innerText = 'Selected file: ' + fileName;
        });
    </script>
</body>
</html>

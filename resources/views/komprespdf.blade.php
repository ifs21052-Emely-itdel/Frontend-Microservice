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
        <h1 class="pcn">PDF Converter</h1>
        <p>Maximize quality, minimize size: Optimize your PDFs effortlessly.</p>
        <form id="pdf-form" enctype="multipart/form-data">
            <div>
            <label for="pdf-file" class="file-input-button" style="color: #333A73; font-weight: bold;">Choose PDF File</label>
            <input type="file" id="pdf-file" accept=".pdf" style="display: none;" required>
            <span id="file-name" style="color: #A9A9A9;"></span>
        </div>
            <button type="submit" id="convert-btn">Convert PDF</button>
        </form>

    </div>
    <script src="{{ asset("/assets/js/komprespdf.js") }}"></script>
    <script>
        document.getElementById('pdf-file').addEventListener('change', function() {
            var fileName = this.files[0].name;
            document.getElementById('file-name').innerText = 'Selected file: ' + fileName;
        });
    </script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDF Converter</title>
    <link rel="stylesheet" href="{{ asset("/assets/css/komprespdf.css") }}">
    @extends('template')
</head>
<body>
    <div class="container">
        <h1 class="pcn">PDF Converter</h1>
        <p>Compress PDFs in the order you want with the easiest PDF merger available.</p>
        <form id="pdf-form" enctype="multipart/form-data">
            <input type="file" id="pdf-file" accept=".pdf" required>
            <button type="submit" id="convert-btn">Convert PDF</button>
        </form>
    </div>
    <script src="{{ asset("/assets/js/komprespdf.js") }}"></script>
</body>
</html>

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
        <h1 class="pcn">Compress PDF files</h1>
        <p>Maximize quality, minimize size: Optimize your PDFs effortlessly.</p>
        <form id="pdf-form" enctype="multipart/form-data" method="POST" action="{{route("compress.pdf")}}">
            @csrf
            <div>
            <label for="pdf-file" class="file-input-button"> click here to select your PDF file.</label>
            <input name="pedef" type="file" id="pdf-file" accept=".pdf" style="display: none;" required>
            <span id="file-name" style="color: #A9A9A9;"></span>
        </div>
            <button type="submit" id="convert-btn">Convert PDF</button>
        </form>

    </div>

    <script src="{{ asset("/assets/js/komprespdf.js") }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        document.getElementById('pdf-file').addEventListener('change', function() {
            var fileName = this.files[0].name;
            document.getElementById('file-name').innerText = 'Selected file: ' + fileName;
        });
    </script>

    <script>
        document.getElementById('convert-btn').addEventListener('click', function () {
            Swal.fire({
                title: "File PDF Sedang Di Compress",
                text: "Tunggu sampai file PDF selesai di download",
                icon: "info",
                width: 600,
                color: "#716add",
                backdrop: `
                    rgba(0,0,123,0.4)
                    url({{ asset("/assets/img/cat-nyan-cat.gif") }})
                    left top
                    no-repeat
                `
            });
        });
    </script>
</body>
</html>

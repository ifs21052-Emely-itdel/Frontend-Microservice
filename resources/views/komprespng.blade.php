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
        <h1 class="pcn">Compress Image files</h1>
        <p>Maximize quality, minimize size: Optimize your PNGs effortlessly.</p>
        <form id="pdf-form" enctype="multipart/form-data" method="POST" action="{{route("compress.image")}}">
            @csrf
            <div>
                <label for="pdf-file" class="file-input-button" >click here to select your PNG File</label>
                <input name="image" type="file" id="pdf-file" accept="image/*" style="display: none;" required>
                <span id="file-name" style="color: #A9A9A9;"></span>
            </div>
            <button type="submit" id="convert-btn">Convert PNG</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
       
        document.getElementById('pdf-form').addEventListener('submit', function(event) {
            var fileInput = document.getElementById('pdf-file');
            var fileName = fileInput.files[0].name;
            var fileExtension = fileName.split('.').pop().toLowerCase();
            
           
            var validExtensions = ['png', 'jpg', 'jpeg', 'gif', 'bmp', 'webp'];
            
           
            if (validExtensions.indexOf(fileExtension) === -1) {
                event.preventDefault();
                alert('Please choose a valid image file (png, jpg, jpeg, gif, bmp, webp).');
                return false;
            }
        });
    
       
        document.getElementById('pdf-file').addEventListener('change', function() {
            var fileName = this.files[0].name;
            document.getElementById('file-name').innerText = 'Selected file: ' + fileName;
        });
    </script>

    <script>
        document.getElementById('convert-btn').addEventListener('click', function () {
            
        });
    </script>
    
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <script>
                Swal.fire({
                    icon: "error",
                    title: "Server Error",
                    text: "{!! $error !!}",
                });
            </script>
        @endforeach
    @endif

    <script>
        document.getElementById('convert-btn').addEventListener('click', function () {
            setTimeout(function() {
                Swal.fire({
                    title: "Gambar Sedang Di Compress",
                    text: "Tunggu sampai gambar selesai di download",
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
            },);
        });
    </script>


    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const fileInput = document.getElementById('pdf-file');
            const convertBtn = document.getElementById('convert-btn');

            // Nonaktifkan tombol "Convert PDF" secara default
            convertBtn.disabled = true;

            // Tambahkan event listener untuk mendeteksi perubahan pada input file
            fileInput.addEventListener('change', function() {
                // Periksa apakah file telah dipilih
                if (fileInput.files.length > 0) {
                    // Aktifkan tombol "Convert PDF" jika file telah dipilih
                    convertBtn.disabled = false;
                    const fileName = fileInput.files[0].name;
                    document.getElementById('file-name').innerText = 'Selected file: ' + fileName;
                } else {
                    // Biarkan tombol "Convert PDF" tetap nonaktif jika tidak ada file yang dipilih
                    convertBtn.disabled = true;
                    document.getElementById('file-name').innerText = '';
                }
            });
        });
    </script>
    
</body>
</html>

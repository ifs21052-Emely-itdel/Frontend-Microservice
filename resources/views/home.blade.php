<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{ asset("/assets/css/home.css") }}">
</head>
<body>
    <nav class="navbar">
        <div class="container">
            <a href="#" class="logo">IFconvert</a>
            <ul class="nav-links">
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </div>
    </nav>
    <div class="container">
    <img src="{{ asset('/assets/img/welcome.jpg') }}" alt="Welcome Image" class="welcome-image">
        <h1>Welcome to Informatika 21</h1>
        <p>Buat file Anda lebih ringan dan lebih mudah diakses! Kompress PDF, Word, dan konversi video ke audio dengan mudah.</p>
        <div class="card-container">
            <div class="card">
                <i class="fas fa-file-pdf"></i>
                <img src="{{ asset('/assets/img/iconpdf.png') }}" alt="PDF Icon" class="card-icon">
                <h2>Kompress PDF</h2>
                <p>Kompress file PDF Anda untuk mengurangi ukuran file.</p>
            </div>
            <div class="card">
                <i class="fas fa-file-word"></i>
                <img src="{{ asset('/assets/img/iconpng.png') }}" alt="Word Icon" class="card-icon">
                <h2>Kompress Word</h2>
                <p>Kompress file Word Anda untuk mengurangi ukuran file.</p>
            </div>
            <div class="card">
                <i class="fas fa-file-video"></i>
                <img src="{{ asset('/assets/img/convert.png') }}" alt="Video to Audio Icon" class="card-icon">
                <h2>Convert Vid to Audio</h2>
                <p>Konversi video menjadi file audio.</p>
            </div>
        </div>
    </div>
    <script src="{{ asset("/assets/js/home.js") }}"></script>
</body>
</html>

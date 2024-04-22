<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset("/assets/css/home.css") }}">
    <link rel="icon" href="{{asset("/assets/img/welcome.png") }}">
    <title>IFconvert</title>
    @extends('template')
</head>
<body>
    <div class="container">
    <img src="{{ asset('/assets/img/welcome.png') }}" alt="Welcome Image" class="welcome-image">
        <h1 class="welcome centered-text font-size: 23px;" >Welcome to Informatika 21</h1>
        <p class="judul centered-text" style="color: #666; font-size: 18px;">Buat file Anda lebih ringan dan lebih mudah diakses! Kompress PDF, Word, dan konversi video ke audio dengan mudah.</p>

        <div class="card-container">
        <a href="{{ route('komprespdf') }}" class="kompres">
            <div class="card" id="komprespdf">
                <i class="fas fa-file-pdf"></i>
                <img src="{{ asset('/assets/img/iconpdf.png') }}" alt="PDF Icon" class="card-icon">
                <h2>Kompress PDF</h2>
                <p>Kompress file PDF Anda untuk mengurangi ukuran file.</p>
            </div>
        </a>
            
            <a href="{{ route('komprespdf') }}" class="kompres">
            <div class="card">
                <i class="fas fa-file-word"></i>
                <img src="{{ asset('/assets/img/iconpng.png') }}" alt="Word Icon" class="card-icon">
                <h2>Kompress PNG</h2>
                <p>Kompress file PNG Anda untuk mengurangi ukuran file.</p>
            </div>
            </a>

    <a href="{{ route('komprespdf') }}" class="kompres">
            <div class="card">
                <i class="fas fa-file-video"></i>
                <img src="{{ asset('/assets/img/convert.png') }}" alt="Video to Audio Icon" class="card-icon">
                <h2>Convert Vid to Audio</h2>
                <p>Konversi video menjadi file audio.</p>
            </div>
    </a>
    </div>
    <script src="{{ asset("/assets/js/home.js") }}"></script>
</body>
</html>

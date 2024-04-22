<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset("/assets/css/home.css") }}">
</head>
<body>
    <nav class="navbar">
        <div class="container">
            <a href="{{ route('home') }}" class="logo">IFconvert</a>
            <ul class="nav-links">
                <li><a class="kontak">Contact</a></li>
            </ul>
        </div>
    </nav>
    <footer class="footer">
        <div class="container">
            <p class="footercopy">&copy; 2024 IFconvert. All Rights Reserved.</p>
        </div>
    </footer>
    <script src="{{ asset("/assets/js/home.js") }}"></script>
</body>
</html>

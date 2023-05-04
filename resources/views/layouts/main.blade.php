<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>FindXitem | {{ $title }}</title>
    <script src="https://kit.fontawesome.com/64db69214e.js" crossorigin="anonymous"></script>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body class="d-flex flex-column">
    @include('Components.navbar')
    <div class="isi">
        @yield('container')
    </div>
    <br>
    <footer class="mt-auto">
        @include('Components.footer')
    </footer>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="../public/images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href=" {{ asset('css/app.css') }} ">
    <title>Laravel Comix</title>
</head>
<body>
    
    @include('includes.header')

    @include('includes.main')
    {{-- Banner DC --}}
    <div class="container-fluid bg-primary">
        @include('partials.banner')
    </div>

    @include('includes.footer')

    <div class="container-fluid bg-dark">
        @include('partials.bannertwo')
    </div>

    <script src=" {{ asset('js/app.js') }} "></script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet"  href="/css/app.css">
</head>
<body>
    
    <nav class="navbar navbar-expand-lg navbar-light bg-warning">
        <a class="navbar-brand" href="{{route('home')}}">Home</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="{{route('user')}}">User <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('avatar')}}">Avatar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="
                    {{-- {{route('categorie')}} --}}
                    ">Categories</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('image')}}
                    ">Images</a>
                </li>
            </ul>
        </div>
    </nav>
    @yield('content')
    <script  src="/js/app.js"></script>
</body>
</html>

















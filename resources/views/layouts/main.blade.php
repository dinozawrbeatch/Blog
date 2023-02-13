<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Блог</title>
    <link rel="stylesheet" href="{{asset('assets/vendors/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/font-awesome/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/aos/aos.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <script src="{{asset('assets/vendors/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('assets/js/loader.js')}}"></script>
</head>
<body>
<div class="edica-loader"></div>
<header class="edica-header">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light d-flex justify-content-end">
            <li class="nav-item text-black-50 d-flex mx-auto">
                <h3><a href="{{ route('main.index') }}">Блог</a></h3>
            </li>
            <li class="nav-item text-black-50 d-flex mx-auto">
                <h3><a href="{{ route('tag.index') }}">Теги</a></h3>
            </li>
            <div class="nav-item mr-3 d-flex flex-row">
                @auth()
                    @if(auth()->user()->role == 0)
                        <form action="{{ route('admin.main.index') }}" class="mr-4">
                            <input class="btn btn-primary" type="submit" value="Админ панель">
                        </form>
                    @endif
                    <form action="{{ route('logout') }}" method="post">
                        @csrf
                        <input class="btn btn-outline-danger" type="submit" value="Выйти">
                    </form>
                @endauth
                @guest()
                    <a class="text-black-50" href="{{ route('login') }}">Вход</a>
                @endguest
            </div>
            <div class="nav-item ">
                @guest()
                    <a class="text-black-50" href="{{ route('login') }}">Регистрация</a>
                @endguest
            </div>
        </nav>
    </div>
</header>
@yield('content')
<script src="{{asset('assets/vendors/popper.js/popper.min.js')}}"></script>
<script src="{{asset('assets/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/vendors/aos/aos.js')}}"></script>
<script src="{{asset('assets/js/main.js')}}"></script>
<script>
    AOS.init({
        duration: 1000
    });
</script>
</body>
</html>

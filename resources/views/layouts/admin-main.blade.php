<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Проксима | Главная</title>
    <link rel="stylesheet" href="{{asset('/styles/reset.css')}}">
    <link rel="stylesheet" href="{{asset('/styles/common.css')}}">
    <link rel="stylesheet" href="{{asset('/styles/adaptive.css')}}">
    <script src="{{asset('scripts/theme-toggler.js')}}" defer></script>
    <script src="{{asset('scripts/footer.js')}}" defer></script>
    @yield('css-js-imports')
</head>
<body  class="theme-light">
<nav class="nav-main">
        <span class="nav-main-top">
            <span class="logo-and-name">
                <img src="{{asset('images/Logo.png')}}"
                class="company-logo"
                alt="Лого">
                <h1 class="company-name">ПРОКСИМА — КАБИНЕТ АДМИНИСТРАТОРА</h1>
                </span>
                <img src="{{asset('images/MoonThemeToggler.png')}}"
                    class="theme-toggler"
                    width="56"
                    height="61"
                    alt="Переключатель тем">
                </span>
</nav>
    @yield('content')
    <footer class="footer">
                <p class="footer-p">Все изображения сгенерироываны нейросетью DALL-E. Образовательный центр и его программа вымышлены, любые совпадения случайны. Все преподаватели также вымышлены и любые совпадения являются случайными. Данный сайт является фатазией автора и создан для обучения автора дизайну и фронтенд-разработке, хотя автор понимает, что на самом деле так не бывает.</p>
    </footer>
    </body>
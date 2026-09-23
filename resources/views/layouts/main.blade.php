<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Web-backend')</title>

</head>
<body>

    <header>
        <nav>
            <a href="{{ route('home') }}">Главная</a>
            <a href="{{ route('about') }}">О нас</a>
            <a href="{{ route('contacts') }}">Контакты</a>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>ФИО: Ооржак Дандар| Группа: 251-3210</p>
    </footer>

</body>
</html>

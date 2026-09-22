<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Web-backend')</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 0; padding: 0; display: flex; flex-direction: column; min-height: 100vh; }
        header { background: #333; color: #fff; padding: 15px; }
        nav a { color: #fff; margin-right: 15px; text-decoration: none; font-weight: bold; }
        nav a:hover { text-decoration: underline; }
        main { flex: 1; padding: 20px; max-width: 800px; margin: 0 auto; }
        footer { background: #f4f4f4; text-align: center; padding: 15px; font-size: 0.9em; border-top: 1px solid #ccc; }
    </style>
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
        <p>ФИО: Перетрутов Никита| Группа: 251-3210</p>
    </footer>

</body>
</html>

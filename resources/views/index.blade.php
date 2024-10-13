<!DOCTYPE html>
<html>
<head>
    <title>Hlavní stránka</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <header>
        @include('components.navbar')
    </header>
    <main class="bg-gray-300">
        <h1>Vítejte na hlavní stránce!</h1>
    </main>
    <footer>
    </footer>
</body>
</html>



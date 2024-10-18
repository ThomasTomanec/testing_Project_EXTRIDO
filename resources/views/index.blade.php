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
        <div class="relative w-full h-[250px] md:h-[750px] overflow-hidden">
            <img src="{{ asset('mceu_23554083211724927033654.webp') }}" alt="car-background" class="w-full h-full object-cover">
            <div class="absolute inset-0 text-white bg-black bg-opacity-60 p-4">
                <div class="pl-3 flex items-center justify-evenly pt-20">
                    <div>
                        <h1 class="text-4xl md:text-7xl px-3 font-semibold text-white drop-shadow-lg text-left start">Vyberte si správný kryt <br>pro svého miláčka</h1>
                        <p class="text-lg md:text-2xl px-3 text-rose-500 font-medium drop-shadow-lg text-start md:pt-2">
                            kryty od firmy krytypodmotor.cz jsou vyráběny z materiálů nejvyšší <br>jakosti s maximální přesností, tak aby zajistili tu nejlepší ochranu motoru. </p>
                    </div>
                    <div>
                        @include('components.search_Form')
                    </div>
                </div>
            </div>
        </div>
        @include('components.product_Cards')
    </main>
    <footer>
        @include('components.footer')
    </footer>
</body>

</html>
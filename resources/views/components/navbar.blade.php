<head>
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">


        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <script src="{{ mix('js/app.js') }}" defer></script>
</head>
<header class="font-custom">

    <div class="hidden md:flex justify-around items-center text-md bg-gradient-to-t h-10 from-gray-200 to-white">
        <div class="flex items-center space-x-2">
        <svg aria-hidden="true" focusable="false" class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="1em" height="1em" fill="red"><path d="M493.4 24.6l-104-24c-11.3-2.6-22.9 3.3-27.5 13.9l-48 112c-4.2 9.8-1.4 21.3 6.9 28l60.6 49.6c-36 76.7-98.9 140.5-177.2 177.2l-49.6-60.6c-6.8-8.3-18.2-11.1-28-6.9l-112 48C3.9 366.5-2 378.1.6 389.4l24 104C27.1 504.2 36.7 512 48 512c256.1 0 464-207.5 464-464 0-11.2-7.7-20.9-18.6-23.4z"/></svg>
            <p class="text-lg font-bold">+420 000 000 000</p>
        </div>
        <div>
            @if (Route::has('login'))
            <nav>
                <ul class="flex">
                    @auth
                    <li><a href="{{ url('/dashboard') }}" class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">Dashboard</a></li>
                    @else
                    <li><a href="{{ route('login') }}" class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">Log in</a></li>
                    <li>/</li>
                    @if (Route::has('register'))
                    <li> <a href="{{ route('register') }}" class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">Register</a></li>
                </ul>
                @endif
                @endauth
            </nav>
            @endif
        </div>
    </div>

    <div class="flex justify-around items-center text-lg h-[50px] bg-rose-600  text-white" >
        <div>
            <h1 class="uppercase font-bold">Kryty pod motor</h1>
        </div>
        <div>
            <ul class="hidden md:flex">
                <li><a class="px-3 list-none">Domů</a></li>
                <li><a class="px-3 list-none">O nás</a></li>
            </ul>
        </div>
        <div class="md:hidden flex items-center">
        <button id="menu-btn" class="focus:outline-none flex">
            <h1 class="pr-1 font-bold uppercase">menu</h1>
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
              xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
            </svg>
          </button>
        </div>
    </div>

    <div id="mobile-menu" class="hidden md:hidden px-4 py-2">
        <div class="flex flex-col">
        <a class="text-black hover:bg-gray-200 py-1">Domů</a>
        <a class="text-black hover:bg-gray-200 py-1">O nás</a>
    </div>
    <div>
        
    </div>
        <div class="pt-3" >
            <p>+420 xxx xxx xxx</p>
        </div>
        <div>
            @if (Route::has('login'))
            <nav>
                <ul class="flex space-x-2 ">
                    @auth
                    <li><a href="{{ url('/dashboard') }}" class="rounded-md py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">Dashboard</a></li>
                    @else
                    <li><a href="{{ route('login') }}" class="rounded-md py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">Log in</a></li>
                    <li>/</li>
                    @if (Route::has('register'))
                    <li> <a href="{{ route('register') }}" class="rounded-md py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">Register</a></li>
                </ul>
                @endif
                @endauth
            </nav>
            @endif
        </div>
    </div>
</header>

<script>
    const menuBtn = document.getElementById('menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');

    menuBtn.addEventListener('click', () => {
      mobileMenu.classList.toggle('hidden');
    });
  </script>
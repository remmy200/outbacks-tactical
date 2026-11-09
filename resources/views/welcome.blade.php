<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name') }} | Paintball</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="antialiased bg-gray-900 text-white">

    <!-- Top bar -->
    <header class="max-w-6xl mx-auto px-6 py-5 flex items-center justify-between">
        <a href="/" class="flex items-center gap-2 font-extrabold tracking-widest uppercase">
            <span class="inline-block w-3 h-3 rounded-full bg-orange-500"></span>
            <span>Outbacks <span class="text-orange-500">Tactical</span></span>
        </a>

        <nav class="flex items-center gap-4 text-sm">
            @auth
                <a href="{{ route('dashboard') }}" class="text-gray-300 hover:text-white">Dashboard</a>
            @else
                <a href="{{ route('login') }}" class="text-gray-300 hover:text-white">Log in</a>
                <a href="{{ route('register') }}" class="bg-orange-600 hover:bg-orange-500 px-4 py-2 rounded-md font-semibold">Sign up</a>
            @endauth
        </nav>
    </header>

    <!-- Hero -->
    <main>
        <section class="max-w-6xl mx-auto px-6 py-24 text-center">
            <p class="text-orange-500 font-semibold tracking-widest uppercase text-sm">Paintball Field</p>
            <h1 class="mt-4 text-5xl md:text-7xl font-extrabold tracking-tight uppercase">
                Outbacks <span class="text-orange-500">Tactical</span>
            </h1>
            <p class="mt-6 text-lg text-gray-300 max-w-2xl mx-auto">
                Gear up, pick your squad and hit the field. Reserve your slot online and secure it with a small deposit.
            </p>

            <div class="mt-10 flex flex-col sm:flex-row gap-4 justify-center">
                @auth
                    <a href="{{ route('dashboard') }}" class="bg-orange-600 hover:bg-orange-500 px-8 py-3 rounded-md font-bold uppercase tracking-wide">
                        Book Now
                    </a>
                @else
                    <a href="{{ route('register') }}" class="bg-orange-600 hover:bg-orange-500 px-8 py-3 rounded-md font-bold uppercase tracking-wide">
                        Book Now
                    </a>
                @endauth
                <a href="#how-it-works" class="border border-gray-600 hover:border-gray-400 px-8 py-3 rounded-md font-bold uppercase tracking-wide">
                    How it works
                </a>
            </div>
        </section>

        <!-- How it works -->
        <section id="how-it-works" class="bg-gray-800">
            <div class="max-w-6xl mx-auto px-6 py-16 grid gap-8 md:grid-cols-3 text-center">
                <div>
                    <div class="text-orange-500 text-4xl font-extrabold">1</div>
                    <h3 class="mt-2 font-bold uppercase">Pick a session</h3>
                    <p class="mt-2 text-gray-400 text-sm">Choose a date and time and see how many spots are left.</p>
                </div>
                <div>
                    <div class="text-orange-500 text-4xl font-extrabold">2</div>
                    <h3 class="mt-2 font-bold uppercase">Pay a deposit</h3>
                    <p class="mt-2 text-gray-400 text-sm">Pay your deposit by M-Pesa. Your slot is confirmed once it goes through.</p>
                </div>
                <div>
                    <div class="text-orange-500 text-4xl font-extrabold">3</div>
                    <h3 class="mt-2 font-bold uppercase">Show up and play</h3>
                    <p class="mt-2 text-gray-400 text-sm">Bring your booking code. Pay the balance at the field.</p>
                </div>
            </div>
        </section>
    </main>

    <footer class="max-w-6xl mx-auto px-6 py-8 text-center text-gray-500 text-sm">
        &copy; {{ date('Y') }} {{ config('app.name') }}. All rights reserved.
    </footer>

</body>
</html>
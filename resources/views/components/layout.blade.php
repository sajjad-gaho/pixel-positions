<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@100..900&display=swap"
        rel="stylesheet">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindplus/elements@1" type="module"></script>
    <title>Pixel Positions</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="bg-dark text-white font-sans pb-20">
    <div class="px-10 w-full">
        <!-- <nav class="flex justify-between items-center py-4 pl-4 border-b border-white/10"> -->
        <nav x-data="{ open: false }" class="flex justify-between items-center py-4 pl-4 border-b border-white/10 relative">
            <div>
                <a href="/">
                    <img src="{{Vite::asset('resources/images/logo-1.svg') }}" alt="logo">
                </a>
            </div>
            <div class="hidden md:flex space-x-6 font-bold">
                <a href="{{ route('/') }}" class="hover:text-blue-400">Jobs</a>
                <a href="{{ route('pages.careers') }}" class="hover:text-blue-400">Careers</a>
                <a href="{{ route('pages.salaries') }}" class="hover:text-blue-400">Salaries</a>
                <a href="{{ route('pages.companies') }}" class="hover:text-blue-400">Companies</a>
            </div>

            @auth
            <div class="hidden md:flex space-x-6 font-bold flex">

                @if(auth()->user()->role === 'admin')
                <a href="{{ route('admin.dashboard') }}" class="hover:text-blue-400">Dashboard</a>
                <a href="/jobs/create" class="hover:text-blue-400">Post a Job</a>
                @endif

                <a href="{{ route('auth.profile') }}" class="gap-2"> {{ auth()->user()->name }} </a>
                <form action="/logout" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="hover:text-blue-400">Log Out</button>
                </form>

            </div>
            @endauth

            @guest
            <div class="space-x-6 font-bold">
                <a href="/register">Sign Up</a>
                <a href="/login">Sign In</a>
            </div>
            @endguest

            <!-- For Mobile Responsive Toggle Button Show For Navbar -->
            <div class="md:hidden flex items-center">
                <button @click="open = !open" class="text-white focus:outline-none">
                    <svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path x-show="!open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                        <path x-show="open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

            <div x-show="open" @click.away="open = false" class="absolute top-full left-0 w-full bg-[#060606] border-b border-white/10 z-50 p-6 flex flex-col space-y-4 md:hidden">
                <a href="{{ route('/') }}" class="font-bold">Jobs</a>
                <a href="{{ route('pages.careers') }}" class="font-bold">Careers</a>
                <a href="{{ route('pages.salaries') }}" class="font-bold">Salaries</a>
                <a href="{{ route('pages.companies') }}" class="font-bold">Companies</a>
                <hr class="border-white/10">
                @auth

                @if(auth()->user()->role === 'admin')
                <a href="{{route ('admin.dashboard') }}" class="font-bold text-blue-400">Dashboard</a>
                <a href="/jobs/create" class="font-bold text-blue-400">Post a Job</a>
                @endif
                <a href="{{ route('auth.profile') }}" class="gap-1"> {{ auth()->user()->name }} </a>
                <form action="/logout" method="POST">@csrf @method('DELETE') <button class="font-bold">Log Out</button></form>
                @endauth
                @guest
                <a href="/register" class="font-bold">Sign Up</a>
                <a href="/login" class="font-bold">Sign In</a>
                @endguest
            </div>

        </nav>

        <main class="mt-10 max-w-[986px] mx-auto">
            {{$slot}}
        </main>
    </div>

    <x-footer />

</body>

</html>
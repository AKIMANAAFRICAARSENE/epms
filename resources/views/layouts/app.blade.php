<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>SmartPark EPMS</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased bg-white text-black">
        <div class="min-h-screen bg-white">
            <nav class="bg-black p-4 shadow-md">
                <div class="container mx-auto flex flex-wrap items-center justify-between">
                    <a href="/dashboard" class="text-orange-500 font-bold text-xl">EPMS</a>
                    <div class="flex space-x-4">
                        <a href="/dashboard" class="text-white hover:text-orange-400">Dashboard</a>
                        <a href="/departments" class="text-white hover:text-orange-400">Departments</a>
                        <a href="/employees" class="text-white hover:text-orange-400">Employees</a>
                        <a href="/salaries" class="text-white hover:text-orange-400">Salaries</a>
                        <a href="/reports/payroll" class="text-white hover:text-orange-400">Reports</a>
                        <form method="POST" action="{{ route('logout') }}" class="inline">
                            @csrf
                            <button type="submit" class="text-white hover:text-orange-400 bg-transparent border-none cursor-pointer">Logout</button>
                        </form>
                    </div>
                </div>
            </nav>

            @include('layouts.navigation')

            <!-- Page Heading -->
            @isset($header)
                <header class="bg-orange-50 shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        <span class="text-2xl font-bold text-black">{{ $header }}</span>
                    </div>
                </header>
            @endisset

            <!-- Page Content -->
            <main class="bg-white min-h-[80vh] py-8">
                @yield('content')
            </main>
        </div>
    </body>
</html>

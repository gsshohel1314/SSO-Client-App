<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Software App - SSO | @yield('title')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100">
    @if(!Auth::guest())
        <nav class="bg-white border-gray-200 dark:bg-gray-900 dark:border-gray-700">
            <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
                <a href="{{route('dashboard')}}" class="flex items-center space-x-3 rtl:space-x-reverse">
                    <img src="https://flowbite.com/docs/images/logo.svg" class="h-8" alt="Flowbite Logo" />
                    <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Software App - SSO</span>
                </a>

                <form action="{{ route('logout') }}" method="POST" class="ml-4">
                    @csrf
                    <button type="submit"
                        class="block text-white bg-gray-800 hover:bg-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700 font-semibold rounded-md text-sm px-4 py-2 shadow-sm transition">
                        Sign out
                    </button>
                </form>
            </div>
        </nav>
    @endif

    <!-- Dashboard Content -->
    <main class="container mx-auto">
        @yield('content')
    </main>
</body>
</html>
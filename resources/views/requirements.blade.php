<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased text-gray-900">
    <div class="flex flex-col items-center min-h-screen pt-6 bg-gray-100 sm:justify-center sm:pt-0 dark:bg-gray-900">
        <div>
            <a href="/">
                <x-utn-logo class="w-40" />
            </a>
        </div>

        <div
            class="w-full px-6 py-4 mt-6 overflow-hidden bg-white shadow-md sm:max-w-screen-xl dark:bg-gray-800 sm:rounded-lg">
            <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
                {{ __('Requirements') }}
            </div>

            <div class="w-full dark:text-white">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. In debitis aliquam error adipisci aliquid
                molestiae laboriosam amet possimus aut rem nemo eum voluptatem suscipit quod illo voluptatibus nesciunt,
                assumenda accusantium?
            </div>
        </div>

        <div
            class="w-full px-6 py-4 mt-6 overflow-hidden bg-white shadow-md sm:max-w-screen-xl dark:bg-gray-800 sm:rounded-lg">
            <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
                {{ __('Requirements') }}
            </div>

            <div class="w-full dark:text-white">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. In debitis aliquam error adipisci aliquid
                molestiae laboriosam amet possimus aut rem nemo eum voluptatem suscipit quod illo voluptatibus nesciunt,
                assumenda accusantium?
            </div>
        </div>
    </div>
</body>

</html>

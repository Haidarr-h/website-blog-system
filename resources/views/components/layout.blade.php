<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>Document</title>
</head>

{{-- 
the HTML body structured as follows:

1. nav
    1.1 left side
        1.1.1 icons
        1.1.2 options
    1.2 right side
    1.3 mobile view
2. header
3. main

--}}

<body class="h-full">

    <div class="min-h-full">

        {{-- ? ############### NAVBAR ################## --}}
        <x-navbar></x-navbar>
        

        {{-- ? ############### HEADER ################## --}}
        <x-header>{{ $title }}</x-header>

        <main>
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">

                {{ $slot }}

            </div>
        </main>
    </div>


</body>

</html>

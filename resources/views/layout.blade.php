    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="icon" href="images/favicon.ico" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
            integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src="//unpkg.com/alpinejs" defer></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @vite('resources/js/app.js')

        <title>Yorozuya | Dev</title>
    </head>

    <body x-data="{ darkMode: localStorage.getItem('dark') === 'true' }" x-init="$watch('darkMode', val => localStorage.setItem('dark', val))" x-bind:class="{ 'dark': darkMode }">
        @include('partials._header')
        <main class="max-w-screen-xl px-4 md:px-6 mx-auto">

            @yield('content')
        </main>


        {{-- toast --}}
        <x-toast />
    </body>

    </html>

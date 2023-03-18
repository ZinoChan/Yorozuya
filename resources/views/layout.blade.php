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
        <script src="https://cdn.tailwindcss.com"></script>
        @vite('resources/js/app.js')
        <script>
            tailwind.config = {
                darkMode: "class",
                content: [
                    "./resources/**/*.blade.php",
                    "./resources/**/*.js",
                    "./resources/**/*.vue",
                ],
                theme: {
                    extend: {
                        colors: {
                            yellow1: "#f1ee63",
                            dark1: "rgb(17, 24, 39)",
                            light1: "#f2f2f2"
                        },
                    },
                },
                plugins: [],
            };
        </script>

        <title>Yorozuya | Dev</title>
    </head>

    <body style="font-family: 'Kumbh Sans', sans-serif;" x-data="{ darkMode: localStorage.getItem('dark') === 'true' }" x-init="$watch('darkMode', val => localStorage.setItem('dark', val))"
        x-bind:class="{ 'dark dark:bg-[#111827]': darkMode }" class="bg-light1">

        @include('partials._header')

        <main class="max-w-screen-xl px-4 md:px-6 mx-auto">

            @yield('content')
        </main>


        {{-- toast --}}
        <x-toast />
    </body>

    </html>

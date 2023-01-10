    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="icon" href="images/favicon.ico" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
            integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src="https://cdn.tailwindcss.com"></script>

        <title>Yorozuya | Dev</title>
    </head>

    <body class="bg-zinc-100">
        <header  style="background-image: url(images/bg-pattern-header.svg); min-height: 160px">
            <nav class="bg-cover bg-[0_100%] bg-no-repeat py-8">
                <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl px-4 md:px-6 py-2.5">
                    <a href="/" class="flex items-center">

                        <span class="self-center text-3xl uppercase font-semibold whitespace-nowrap text-white">Yorozuya</span>
                    </a>
                    <div class="flex items-center space-x-4">
                        <span class="text-white text-lg"><i class="fa-regular fa-sun"></i></span>
                        <label class="relative inline-flex items-center cursor-pointer">
                            <input type="checkbox" class="sr-only peer">
                            <div
                                class="w-9 h-5 bg-white peer-focus:outline-none peer-focus:ring-1 peer-focus:ring-indigo-500 dark:peer-focus:ring-indigo-500 rounded-full peer  peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-indigo-500 after:border after:rounded-full after:h-4 after:w-4 after:transition-all">
                            </div>
                        </label>
                        <span class="text-white text-lg"><i class="fa-solid fa-moon"></i></span>
                    </div>
                </div>
            </nav>
        </header>
        <main>

            @yield('content')
        </main>
    </body>

    </html>

@props(['company', 'website', 'logo'])

<div class="relative -mt-10 flex bg-white dark:bg-gray-800 rounded-md max-w-screen-md mx-auto">

    <div
        class="bg-yellow1 rounded-md absolute w-12 h-12 -top-6 left-1/2  transform -translate-x-1/2 md:rounded-l-md md:h-40 md:w-40 p-4 flex items-center justify-center md:relative md:top-0 md:translate-x-0 md:left-0 ">
        <span class="capitalize text-white font-bold text-4xl">
            @if ($logo)
                <img class="w-12 h-auto" src="{{ $logo }}" alt="logo">
            @else
                {{ $company }}
            @endif
        </span>
    </div>
    <div
        class="p-8 w-full flex md:flex-row flex-col md:space-y-0 space-y-4 md:text-left text-center items-center justify-between">
        <div>
            <h3 class="font-bold text-gray-900 dark:text-white capitalize mb-2 text-2xl">
                {{ $company }}
            </h3>
            <span class="text-gray-400 dark:text-gray-200 text-sm font-medieum">
                {{ $website }}
            </span>
        </div>
        <button type="button"
            class="capitalize text-indigo-500 md:w-auto w-full bg-indigo-100 hover:bg-indigo-200 font-bold rounded-md px-6 py-2.5 focus:outline-none">
            <a href="{{ $website }}">
                company site</a>
        </button>
    </div>
</div>

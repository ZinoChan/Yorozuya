@if (session()->has('success'))
    <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 2000)" x-show="show"
        class="fixed top-10 left-1/2 transform -translate-x-1/2 flex items-center w-full max-w-xs p-4 mb-4 text-gray-500 bg-white rounded-lg shadow dark:text-gray-400 dark:bg-gray-800">
        <div
            class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-green-500 bg-green-100 rounded-lg dark:bg-green-800 dark:text-green-200">
            <span><i class="fa-solid fa-check"></i></span>
            <span class="sr-only">Check icon</span>
        </div>
        <div class="ml-3 font-bold text-green-500">
            {{ session('success') }}
        </div>

    </div>
@endif

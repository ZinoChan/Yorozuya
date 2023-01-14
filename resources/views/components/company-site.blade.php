@props(['company', 'website', 'id'])

<div class="relative -mt-10 flex bg-white rounded-md max-w-screen-md mx-auto">
    <div class="absolute -top-4 right-4 flex items-center space-x-3">
        <button class="text-white bg-blue-500 text-lg rounded py-1 px-2">
            <a href="/jobs/{{ $id }}/edit">
                <i class="fa-regular fa-pen-to-square"></i>
            </a>
        </button>

        <form method="POST" action="/jobs/{{ $id }}">
            @csrf
            @method('DELETE')
            <button type="submit" class="text-white bg-red-500 text-lg rounded py-1 px-2 ">
                <i class="fa-solid fa-trash-can"></i>
            </button>
        </form>
    </div>
    <div class="bg-pink-400 rounded-l-md h-40 w-40 p-4 flex items-center justify-center">
        <span class="capitalize text-white font-bold text-4xl">
            logo
        </span>
    </div>
    <div class="p-8 w-full flex  items-center justify-between">
        <div>
            <h3 class="font-bold text-gray-900 capitalize mb-2 text-2xl">
                {{ $company }}
            </h3>
            <span class="text-gray-400 text-sm font-medieum">
                {{ $website }}
            </span>
        </div>
        <button type="button"
            class="capitalize text-indigo-500 bg-indigo-100 hover:bg-indigo-200 font-bold rounded-md px-6 py-2.5 focus:outline-none">
            <a href="{{ $website }}">
                company site</a>
        </button>
    </div>
</div>

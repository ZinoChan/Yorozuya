@props(['job'])

<div class="rounded bg-white relative py-6 px-4 block max-w-sm p-6  border border-gray-100 shadow-md hover:bg-gray-50 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
    <div
        class="absolute flex items-center justify-center text-sm font-bold text-white p-1 rounded-lg w-10 h-10 -top-5 left-6 bg-yellow1">
        @if ($job->logo)
            <img class="w-6 h-auto" src="{{ asset('storage/' . $job->logo) }}" alt="logo">
        @else
            {{ $job->company }}
        @endif
    </div>
    <div class="mb-6">
        <div class="text-gray-400 dark:text-gray-100 capitalize mb-3 flex items-center space-x-3">
            <span>5h ago</span>
            <span class="bg-gray-400 dark:bg-gray-100 w-1 h-1 rounded-full flex">

            </span>
            <span>
                {{ $job->contract }}
            </span>
        </div>
        <h2 class="font-bold capitalize dark:text-white text-xl text-gray-900 mb-3">
            {{ $job->position }}
        </h2>
        <span class="text-gray-400 dark:text-gray-200 capitalize">
            {{ $job->company }}
        </span>
    </div>
    <h3 class="font-bold text-sm text-indigo-500 capitalize">
        {{ $job->location }}
    </h3>
</div>

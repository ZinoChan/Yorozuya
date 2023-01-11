@props(['job'])
<div class="rounded bg-white relative py-10 px-6">
    <div class="absolute flex items-center justify-center text-sm font-bold text-white p-1 rounded-lg w-12 h-12 -top-6 left-10 bg-pink-500">
        {{$job->company}}
    </div>
    <div class="mb-6">
        <div class="text-gray-400 capitalize mb-3 flex items-center space-x-3">
            <span>5h ago</span>
            <span class="bg-gray-400 w-1 h-1 rounded-full flex">
               
            </span>
            <span>
                {{$job->contract}}
            </span>
        </div>
        <h2 class="font-bold capitalize text-xl text-gray-900 mb-3">
            {{$job->position}}
        </h2>
        <span class="text-gray-400 capitalize">
            {{$job->company}}
        </span>
    </div>
    <h3 class="font-bold text-sm text-indigo-500 capitalize">
        {{$job->location}}
    </h3>
</div>

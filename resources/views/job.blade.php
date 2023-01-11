@extends('layout')
@section('content')

    <x-company-site :company="$job->company" :website="$job->website" />

    <div class="rounded-md bg-white max-w-screen-md mx-auto p-10 my-10">
        <div class="flex items-center justify-between mb-6">
            <div>
                <div class="text-gray-400 capitalize mb-2 flex items-center space-x-3">
                    <span>5h ago</span>
                    <span class="bg-gray-400 w-1 h-1 rounded-full flex"></span>
                    <span>
                        {{ $job->contract }}
                    </span>
                </div>
                <h2 class="font-bold capitalize text-xl text-gray-900 mb-2">
                    {{ $job->position }}
                </h2>
                <h3 class="font-bold text-sm text-indigo-500 capitalize">
                    {{ $job->location }}
                </h3>
            </div>

            <button type="button"
                class="text-white bg-indigo-500 hover:bg-indigo-400 font-bold rounded-md px-6 py-2.5 focus:outline-none">Apply</button>
        </div>
        <p class="text-gray-500 leading-normal mb-6">
            {{ $job->description }}
        </p>

        <div class="mb-8">
            <h4 class="mb-4 capitalize font-bold text-xl text-gray-900">
                requirement
            </h4>
            <p class="text-gray-500 mb-4">
                {{ $job->expertise }}
            </p>
            <x-list :listItems="$job->expertiseTags" />
        </div>
        <div>
            <h4 class="mb-4 capitalize font-bold text-xl text-gray-900">

                what will you do
            </h4>
            <p class="text-gray-500 mb-4">
                {{ $job->role }}
            </p>
            <x-list :listItems="$job->roleTags" />
        </div>
    </div>
   
@endsection

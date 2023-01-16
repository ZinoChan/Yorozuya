@extends('layout')
@section('content')
    <section class="py-20">

        <h1 class="text-3xl text-indigo-500 font-bold mb-6 text-center">
            All Jobs
        </h1>

        <div class="relative overflow-x-auto">
            @unless($jobs->isEmpty())
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Position
                            </th>
                            <th scope="col" class="px-6 py-3">
                                contract
                            </th>
                            <th scope="col" class="px-6 py-3">
                                location
                            </th>
                            <th scope="col" class="px-6 py-3">
                                action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($jobs as $job)
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $job->position }}
                                </th>
                                <td class="px-6 py-4">
                                    {{ $job->contract }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $job->location }}
                                </td>
                                <td class="flex items-center space-x-3 px-6 py-4">
                                    {{-- Edit Job Btn --}}
                                    <button class="text-white bg-blue-500 text-lg rounded py-1 px-2">
                                        <a href="/jobs/{{ $job->id }}/edit">
                                            <i class="fa-regular fa-pen-to-square"></i>
                                        </a>
                                    </button>
                                    {{-- Delete Job Btn  --}}
                                    <form method="POST" action="/jobs/{{ $job->id }}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-white bg-red-500 text-lg rounded py-1 px-2 ">
                                            <i class="fa-solid fa-trash-can"></i>
                                        </button>
                                    </form>

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endunless
        </div>
    </section>
@endsection

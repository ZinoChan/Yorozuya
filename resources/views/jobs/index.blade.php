@extends('layout')
@section('content')

    @include('partials._search')
    <section class="py-20">
        @unless(count($jobs) == 0)
            <div class="grid grid-cols-3 gap-12">
                @foreach ($jobs as $job)
                    <a class="block" href="/jobs/{{ $job['id'] }}">
                        <x-job-card :job="$job" />
                    </a>
                @endforeach
            </div>
        @else
            <p>no jobs found</p>
        @endunless
        <div class="max-w-xs  mt-10 mx-auto">
            {{$jobs->links()}}
        </div>
    </section>
@endsection

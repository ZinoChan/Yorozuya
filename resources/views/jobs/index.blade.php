@extends('layout')
@section('content')

    @include('partials._search')
    <section class="py-20 max-w-screen-lg mx-auto">
        @unless(count($jobs) == 0)
            <div class="grid gap-12 xl:grid-cols-3 md:grid-cols-2 grid-cols-1 items-stretch">
                @foreach ($jobs as $job)
                    <a class="inline-flex" href="/jobs/{{ $job['id'] }}">
                        <x-job-card :job="$job" />
                    </a>
                @endforeach
            </div>
        @else
            <p>no jobs found</p>
        @endunless
        <div class="max-w-xs  mt-10 mx-auto">
            {{ $jobs->links() }}
        </div>
    </section>
@endsection

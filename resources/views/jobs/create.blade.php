@extends('layout')
@section('content')
    <section class="pb-20">


        <div class="max-w-2xl p-10 mx-auto rounded-md bg-white relative -mt-12">
            <div class="mb-8 text-center">

                <h2 class="text-4xl text-indigo-500 font-bold uppercase mb-1">
                    New Job
                </h2>
                <span class="text-sm text-gray-400">post a job and find a developer</span>
            </div>

            <form method="POST" action="/jobs">
                @csrf
                <div class="mb-6">
                    <label for="company" class="inline-block mb-2 text-gray-600 font-bold text-sm">Company Name</label>
                    <input type="text"
                        class="border border-gray-200 focus:outline-none focus:border-indigo-400 rounded p-2 w-full text-gray-900"
                        name="company" value="{{ old('company') }}" />
                    @error('company')
                        <p class="text-red-600 mt-1">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="position" class="inline-block mb-2 text-gray-600 font-bold text-sm">Job Position</label>
                    <input type="text"
                        class="border border-gray-200 focus:outline-none focus:border-indigo-400 rounded p-2 w-full text-gray-900"
                        name="position" placeholder="Example: Senior Laravel Developer" value="{{ old('position') }}" />
                    @error('position')
                        <p class="text-red-600 mt-1">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="location" class="inline-block mb-2 text-gray-600 font-bold text-sm">Job Location</label>
                    <input type="text"
                        class="border border-gray-200 focus:outline-none focus:border-indigo-400 rounded p-2 w-full text-gray-900"
                        name="location" placeholder="Example: Remote, Boston MA, etc" value="{{ old('location') }}" />
                    @error('location')
                        <p class="text-red-600 mt-1">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                {{-- <div class="mb-6">
                    <label for="email" class="inline-block mb-2 text-gray-600 font-bold text-sm">Contact Email</label>
                    <input type="text"
                        class="border border-gray-200 focus:outline-none focus:border-indigo-400 rounded p-2 w-full text-gray-900"
                        name="email" />
                </div> --}}

                <div class="mb-6">
                    <label for="website" class="inline-block mb-2 text-gray-600 font-bold text-sm">
                        Website/Application URL
                    </label>
                    <input type="text"
                        class="border border-gray-200 focus:outline-none focus:border-indigo-400 rounded p-2 w-full text-gray-900"
                        name="website" value="{{ old('website') }}" />
                    @error('website')
                        <p class="text-red-600 mt-1">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
                <div class="mb-6">
                    <label for="contract" class="inline-block mb-2 text-gray-600 font-bold text-sm">
                        contract
                    </label>
                    <select
                        class="border border-gray-200 focus:outline-none focus:border-indigo-400 rounded p-2 w-full text-gray-900"
                        name="contract" value="{{ old('contract') }}">
                        <option>full time</option>
                        <option>part time</option>
                    </select>
                    @error('contract')
                        <p class="text-red-600 mt-1">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                {{-- <div class="mb-6">
                    <label for="logo" class="inline-block mb-2 text-gray-600 font-bold text-sm">
                        Company Logo
                    </label>
                    <input type="file"
                        class="border border-gray-200 focus:outline-none focus:border-indigo-400 rounded p-2 w-full text-gray-900"
                        name="logo" />
                </div> --}}

                <div class="mb-6">
                    <label for="description" class="inline-block mb-2 text-gray-600 font-bold text-sm">
                        Job Description
                    </label>
                    <textarea class="border border-gray-200 focus:outline-none focus:border-indigo-400 rounded p-2 w-full text-gray-900"
                        name="description" rows="6" placeholder="Include tasks, requirements, salary, etc">
                    {{ old('description') }}
                    </textarea>
                    @error('description')
                        <p class="text-red-600 mt-1">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
                <div class="mb-6">
                    <label for="expertise" class="inline-block mb-2 text-gray-600 font-bold text-sm">
                        job requirement
                    </label>
                    <textarea class="border border-gray-200 focus:outline-none focus:border-indigo-400 rounded p-2 w-full text-gray-900"
                        name="expertise" rows="6" placeholder="Include tasks, requirements, salary, etc">
                    {{ old('expertise') }}
                    </textarea>
                    @error('expertise')
                        <p class="text-red-600 mt-1">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
                <div class="mb-6">
                    <label for="expertise tags" class="inline-block mb-2 text-gray-600 font-bold text-sm">
                        Job requirement list (comma separated)
                    </label>
                    <textarea class="border border-gray-200 focus:outline-none focus:border-indigo-400 rounded p-2 w-full text-gray-900"
                        name="expertiseTags" rows="6" placeholder="strong communications skills, proficiency in javascript,  etc">
                    {{ old('expertiseTags') }}
                    </textarea>
                    @error('expertiseTags')
                        <p class="text-red-600 mt-1">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
                <div class="mb-6">
                    <label for="role" class="inline-block mb-2 text-gray-600 font-bold text-sm">
                        Job role
                    </label>
                    <textarea class="border border-gray-200 focus:outline-none focus:border-indigo-400 rounded p-2 w-full text-gray-900"
                        name="role" rows="6">
                    {{ old('role') }}
                    </textarea>
                    @error('role')
                        <p class="text-red-600 mt-1">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
                <div class="mb-6">
                    <label for="roleTags" class="inline-block mb-2 text-gray-600 font-bold text-sm">
                        Job role list (comma separated)
                    </label>
                    <textarea class="border border-gray-200 focus:outline-none focus:border-indigo-400 rounded p-2 w-full text-gray-900"
                        name="roleTags" rows="6" placeholder="strong communications skills, proficiency in javascript,  etc">
                    {{ old('roleTags') }}</textarea>
                    @error('roleTags')
                        <p class="text-red-600 mt-1">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <div class="mb-6">
                    <button type="submit"
                        class="mr-3 text-white capitalize bg-indigo-500 hover:bg-indigo-400 font-bold rounded-md px-6 py-2.5 focus:outline-none">create
                        job
                    </button>

                    <button type="button"
                        class="capitalize text-indigo-500 bg-indigo-100 hover:bg-indigo-200 font-bold rounded-md px-6 py-2.5 focus:outline-none">
                        <a href="/">
                            back
                        </a>
                    </button>
                </div>
            </form>
        </div>
    </section>
@endsection

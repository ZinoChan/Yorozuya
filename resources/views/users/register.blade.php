@extends('layout')
@section('content')
    <section class="pb-20">
        <div class="max-w-2xl p-10 mx-auto rounded-md bg-white relative -mt-12">
            <div class="mb-8 text-center">

                <h2 class="text-4xl text-indigo-500 font-bold uppercase mb-1">
                    Register
                </h2>
                <span class="text-sm text-gray-400">sign up and start posting jobs</span>
            </div>

            <form method="POST" action="/users">
                @csrf
                <div class="mb-6">
                    <label for="name" class="inline-block mb-2 text-gray-600 font-bold text-sm">Full Name</label>
                    <input type="text"
                        class="border border-gray-200 focus:outline-none focus:border-indigo-400 rounded p-2 w-full text-gray-900"
                        name="name" value="{{ old('name') }}" />
                    @error('name')
                        <p class="text-red-600 mt-1">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
                <div class="mb-6">
                    <label for="email" class="inline-block mb-2 text-gray-600 font-bold text-sm">email</label>
                    <input type="email"
                        class="border border-gray-200 focus:outline-none focus:border-indigo-400 rounded p-2 w-full text-gray-900"
                        name="email" value="{{ old('email') }}" />
                    @error('email')
                        <p class="text-red-600 mt-1">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
                <div class="mb-6">
                    <label for="password" class="inline-block mb-2 text-gray-600 font-bold text-sm">password</label>
                    <input type="password"
                        class="border border-gray-200 focus:outline-none focus:border-indigo-400 rounded p-2 w-full text-gray-900"
                        name="password"  />
                    @error('password')
                        <p class="text-red-600 mt-1">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
                <div class="mb-6">
                    <label for="password_confirmation" class="inline-block mb-2 text-gray-600 font-bold text-sm">confirm
                        password</label>
                    <input type="password"
                        class="border border-gray-200 focus:outline-none focus:border-indigo-400 rounded p-2 w-full text-gray-900"
                        name="password_confirmation" />
                    @error('password_confirmation')
                        <p class="text-red-600 mt-1">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
                <button type="submit"
                    class="mr-3 text-white capitalize bg-indigo-500 hover:bg-indigo-400 font-bold rounded-md px-6 py-2.5 focus:outline-none">
                    Submit
                </button>
            </form>
        </div>
    </section>
@endsection

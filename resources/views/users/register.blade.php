@extends('layout')
@section('content')
    <section class="pb-20">
        <div class="max-w-xl p-10 mx-auto rounded-md bg-white relative -mt-12 dark:bg-gray-800">
            <div class="mb-8 text-center">
                <h2 class="text-4xl text-indigo-500 font-bold uppercase">
                    Register
                </h2>
                <p class="mt-4 capitalize text-gray-500 dark:text-gray-200">
                    have an account ? <a href="/login" class="text-red-600 hover:underline dark:text-red-500">Login</a>
                </p>
            </div>


            <form method="POST" action="/users">
                @csrf
                <div class="mb-6">
                    <label for="name" class="inline-block mb-2 text-gray-600 dark:text-gray-200 font-bold text-sm">Full
                        Name</label>
                    <input type="text"
                        class="border border-gray-200 bg-transparent dark:border-gray-700 dark:text-white focus:outline-none focus:border-indigo-400 rounded p-2 w-full text-gray-900"
                        name="name" value="{{ old('name') }}" />
                    @error('name')
                        <p class="text-red-600 mt-1">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
                <div class="mb-6">
                    <label for="email"
                        class="inline-block mb-2 text-gray-600 dark:text-gray-200 font-bold text-sm">email</label>
                    <input type="email"
                        class="border border-gray-200 bg-transparent dark:border-gray-700 dark:text-white focus:outline-none focus:border-indigo-400 rounded p-2 w-full text-gray-900"
                        name="email" value="{{ old('email') }}" />
                    @error('email')
                        <p class="text-red-600 mt-1">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
                <div class="mb-6">
                    <label for="password"
                        class="inline-block mb-2 text-gray-600 dark:text-gray-200 font-bold text-sm">password</label>
                    <input type="password"
                        class="border border-gray-200 bg-transparent dark:border-gray-700 dark:text-white focus:outline-none focus:border-indigo-400 rounded p-2 w-full text-gray-900"
                        name="password" />
                    @error('password')
                        <p class="text-red-600 mt-1">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
                <div class="mb-6">
                    <label for="password_confirmation"
                        class="inline-block mb-2 text-gray-600 dark:text-gray-200 font-bold text-sm">confirm
                        password</label>
                    <input type="password"
                        class="border border-gray-200 bg-transparent dark:text-white dark:border-gray-700 focus:outline-none focus:border-indigo-400 rounded p-2 w-full text-gray-900"
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

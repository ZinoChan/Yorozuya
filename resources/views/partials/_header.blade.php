<header class="bg-cover bg-[0_100%] bg-no-repeat"
    style="background-image: url(/images/bg-pattern-header.svg); min-height: 162px">
    <nav class=" py-8">
        <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl px-4 md:px-6 py-2.5">
            <a href="/" class="flex items-center">
                <span class="self-center text-2xl uppercase font-bold whitespace-nowrap text-[#f1ee63]">Yorozuya</span>
            </a>
            <div class="flex items-center space-x-8">
                <div class="flex items-center space-x-4">
                    {{-- Theme toggler --}}
                    <span class="text-white text-sm"><i class="fa-regular fa-sun"></i></span>
                    <label class="relative inline-flex items-center cursor-pointer">
                        <input @click="darkMode = !darkMode" type="checkbox" class="sr-only peer">
                        <div
                            class="w-8 h-4 bg-white peer-focus:outline-none peer-focus:ring-1 peer-focus:ring-indigo-500 dark:peer-focus:ring-indigo-500 rounded-full peer  peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[0.1px] after:left-[1px] after:bg-indigo-500 after:border after:rounded-full after:h-4 after:w-4 after:transition-all">
                        </div>
                    </label>
                    <span class="text-white text-sm"><i class="fa-solid fa-moon"></i></span>
                </div>
                @auth
                    <div class=" flex items-center space-x-3">
                        <span class=" font-bold text-white capitalize">
                            {{ auth()->user()->name }}
                        </span>
                        <x-dropdown>
                            <button class="w-full">
                                <a href="/jobs/create"
                                    class="flex items-center w-full px-4 py-2.5 text-left text-sm hover:bg-gray-100 ">
                                    New Job
                                </a>
                            </button>
                            <button class="w-full">
                                <a href="/profile/jobs"
                                    class="flex items-center w-full px-4 py-2.5 text-left text-sm hover:bg-gray-100 ">
                                    Manage Jobs
                                </a>
                            </button>
                            <form method="POST" action="/logout" class="inline">
                                @csrf

                                <button class="w-full">
                                    <span
                                        class="flex items-center w-full px-4 py-2.5 text-left text-sm text-indigo-500 hover:bg-gray-100 ">
                                        Log Out
                                    </span>
                                </button>
                            </form>

                        </x-dropdown>
                    </div>
                @else
                    <button
                        class="text-indigo-500 bg-white hover:bg-gray-100 font-bold rounded-md px-4 py-2 focus:outline-none">
                        <a href="/register">
                            Register
                        </a>
                    </button>
                @endauth
            </div>
        </div>
    </nav>
</header>

<div class="max-w-screen-lg mx-auto rounded-md bg-white  px-4 relative -mt-12">

    <form action="/" class="flex justify-between items-center">

        <div class="relative">
            <div class="absolute inset-y-0 left-0 text-indigo-500 text-lg flex items-center pl-3 pointer-events-none">
                <i class="fa-solid fa-magnifying-glass"></i>
            </div>
            <input type="search" name="search"
                class="block w-full p-6 pl-10 focus:outline-none text-sm text-gray-800 bg-white placeholder-neutral-500 dark:placeholder-neutral-400 dark:text-white"
                placeholder="Search Mockups, Logos...">

        </div>
        <div class='flex items-center space-x-4 border-l border-gray-100 border-r px-4'>
            <span class="text-indigo-500 text-lg">
                <i class="fa-solid fa-location-dot"></i>
            </span>
            <select class="text-neutral-500 focus:outline-none text-sm  block px-4 py-6 bg-white max-w-lg">
                <option selected>Choose a location</option>
                <option value="US"> United State </option>
                <option value="CA">Canada</option>
                <option value="FR">France</option>
                <option value="DE">Germany</option>
            </select>
        </div>
        <div class="flex items-center py-6 space-x-4">
            <input type="checkbox" class="w-5 h-5 text-indigo-500 bg-gray-400 border-zinc-200 rounded dark:bg-gray-700">
            <label class="font-bold text-gray-900 dark:text-gray-300 capitalize">full time only</label>

            <button type="submit"
                class="text-white bg-indigo-500 hover:bg-indigo-400 font-bold rounded-md px-6 py-2.5 focus:outline-none">Search</button>
        </div>
    </form>

</div>

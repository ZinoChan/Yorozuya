<div class="fixed z-10 inset-0 invisible overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true"
    id="interestModal">
    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
        <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>
        <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">​</span>
        <div
            class="relative inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
            <div
                class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                <div>

                    <div class="flex space-y-6 flex-col overflow-hidden">
                        <div class="w-full flex items-center">
                            <span class="text-indigo-500 text-lg">
                                <i class="fa-solid fa-location-dot"></i>
                            </span>
                            <select
                                class="w-full min-h-[24] p-4 text-neutral-500 dark:text-gray-200 dark:placeholder:text-slate-200">
                                <option value="false">Filter by location…</option>
                                <option value="Germany">Germany</option>
                                <option value="Japan">Japan</option>
                                <option value="New Zealand">New Zealand</option>
                                <option value="Russia">Russia</option>
                                <option value="Singapore">Singapore</option>
                                <option value="United Kingdom">United Kingdom</option>
                                <option value="United States">United States</option>
                            </select>
                        </div>

                        <label class="flex mr-24 cursor-pointer text-gray-900 dark:text-gray-200">
                            <input type="checkbox" class="mr-4">
                            <span>Full
                                Time<span>&nbsp;Only</span>
                            </span>
                        </label>
                        <button type="submit"
                            class="text-white w-full bg-indigo-500 hover:bg-indigo-400 font-bold rounded-md px-6 py-2.5 focus:outline-none">Search</button>
                        <button type="button"
                            class="closeModal text-white w-full bg-red-500 hover:bg-red-400 font-bold rounded-md px-6 py-2.5 focus:outline-none">Cancel</button>

                    </div>

                </div>
            </div>

        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function() {
        $('.openModal').on('click', function(e) {
            $('#interestModal').removeClass('invisible');
        });
        $('.closeModal').on('click', function(e) {
            $('#interestModal').addClass('invisible');
        });
    });
</script>

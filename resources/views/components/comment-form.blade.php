<!-- comment form -->
    <form class="w-full rounded-lg border bg-gray-100 px-4 pt-2">
        <div class="-mx-3 mb-6 flex flex-wrap">
            <h2 class="px-4 pt-3 pb-2 text-lg text-gray-800">Add a new comment</h2>
            <div class="mt-2 mb-2 w-full px-3 md:w-full">
                <textarea name="body" class="h-20 w-full resize-none rounded border border-gray-200 bg-gray-50 px-3 py-2 font-medium leading-normal placeholder-gray-700 focus:bg-white focus:outline-none" required></textarea>
            </div>
            <div class="flex w-full items-start px-3 md:w-full">
                <div class="mr-auto flex w-1/2 items-start px-2 text-gray-700">
                    <svg fill="none" class="mr-1 h-5 w-5 text-gray-600" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    <p class="pt-px text-xs md:text-sm">Some HTML is okay.</p>
                </div>
                <div class="-mr-1">
                    <input type='submit' class="mr-1 cursor-pointer rounded-lg bg-blue-500 px-4 py-1 font-medium tracking-wide text-white hover:bg-blue-600" value='Post Comment'>
                </div>
            </div>
    </form>
</div>

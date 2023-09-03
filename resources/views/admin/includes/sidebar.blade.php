<aside id="sidebar" class="fixed top-0 left-0 z-20 flex hidden h-full w-64 flex-shrink-0 flex-col pt-16 duration-75 transition-width lg:flex" aria-label="Sidebar">
    <div class="relative flex min-h-0 flex-1 flex-col border-r border-gray-200 bg-gray-100 pt-0">
        <div class="flex flex-1 flex-col overflow-y-auto pt-5 pb-4">
            <div class="flex-1 bg-gray-100 px-3 divide-y space-y-1">
                <ul class="pb-2 space-y-2">
                    <li>
                        <form action="#" method="GET" class="lg:hidden">
                            <label for="mobile-search" class="sr-only">Search</label>
                            <div class="relative">
                                <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                    <svg class="h-5 w-5 text-gray-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path>
                                    </svg>
                                </div>
                                <input type="text" name="email" id="mobile-search" class="block w-full rounded-lg border border-gray-300 bg-gray-50 pl-10 text-sm text-gray-900 p-2.5 focus:ring-blue-600" placeholder="Search">
                            </div>
                        </form>
                    </li>
                    <li>
                        <a href="/admin/dashboard" class="flex items-center {{ request()->is('admin/dashboard') ? 'bg-white' : '' }} rounded-lg p-2 text-base font-normal text-gray-900 group hover:bg-white">
                            <svg class="h-6 w-6 text-gray-500 transition {{ request()->is('admin/dashboard') ? 'text-gray-900' : '' }} duration-75 group-hover:text-gray-900" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                                <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
                            </svg>
                            <span class="ml-3">Dashboard</span>
                        </a>
                    </li>

                    <button type="button" class="flex items-center p-2 w-full text-base font-medium text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700" aria-controls="dropdown-posts" data-collapse-toggle="dropdown-posts">
                        <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4zm2 6a1 1 0 011-1h6a1 1 0 110 2H7a1 1 0 01-1-1zm1 3a1 1 0 100 2h6a1 1 0 100-2H7z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="flex-1 ml-3 text-left whitespace-nowrap">Posts</span>
                        <svg aria-hidden="true" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                    </button>
                    <ul id="dropdown-posts" class="{{ request()->is('admin/posts*') ? '' : 'hidden' }} py-2 space-y-2">
                        <li>
                            <a href="/admin/posts/create" 
                            class="flex items-center p-2 pl-11 w-full {{ request()->is('admin/posts/create') ? 'bg-white' : '' }} text-base font-medium text-gray-900 rounded-lg transition duration-75 group hover:bg-white dark:text-white dark:hover:bg-gray-700"
                            >Create</a>
                        </li>
                        <li>
                            <a href="/admin/posts" 
                            class="flex items-center p-2 pl-11 w-full {{ request()->is('admin/posts') ? 'bg-white' : '' }} text-base font-medium text-gray-900 rounded-lg transition duration-75 group hover:bg-white dark:text-white dark:hover:bg-gray-700"
                            >All Posts</a>
                        </li>
                    </ul>
                    </li>

                    <li>
                        <a href="#" class="flex items-center rounded-lg p-2 text-base font-normal text-gray-900 group hover:bg-white">
                            <svg class="h-6 w-6 flex-shrink-0 text-gray-500 transition duration-75 group-hover:text-gray-900" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.707 7.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l2-2a1 1 0 00-1.414-1.414L11 7.586V3a1 1 0 10-2 0v4.586l-.293-.293z"></path>
                                <path d="M3 5a2 2 0 012-2h1a1 1 0 010 2H5v7h2l1 2h4l1-2h2V5h-1a1 1 0 110-2h1a2 2 0 012 2v10a2 2 0 01-2 2H5a2 2 0 01-2-2V5z"></path>
                            </svg>
                            <span class="ml-3 flex-1 whitespace-nowrap">Categories</span>
                            <span class="ml-3 inline-flex items-center justify-center rounded-full bg-gray-200 px-2 text-sm font-medium text-gray-800">+</span>
                        </a>
                    </li>
                    <li>
                        <a href="/admin/users" class="flex items-center rounded-lg p-2 text-base font-normal text-gray-900 group hover:bg-white">
                            <svg class="h-6 w-6 flex-shrink-0 text-gray-500 transition duration-75 group-hover:text-gray-900" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                            </svg>
                            <span class="ml-3 flex-1 whitespace-nowrap">Users</span>
                            <span class="ml-3 inline-flex items-center justify-center rounded-full bg-gray-200 px-2 text-sm font-medium text-gray-800">+</span>

                        </a>
                    </li>

                </ul>

            </div>
        </div>
    </div>
</aside>
<div class="fixed inset-0 z-10 hidden bg-gray-900 opacity-50" id="sidebarBackdrop"></div>
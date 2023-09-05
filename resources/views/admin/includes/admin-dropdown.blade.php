<button id="dropdownAvatarNameButton" data-dropdown-toggle="dropdownAvatarName"
        class="flex items-center text-sm font-medium text-gray-900 rounded-full hover:text-blue-600 dark:hover:text-blue-500 md:mr-0 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:text-white"
        type="button">
    <span class="sr-only">Open user menu</span>
    <img class="w-8 h-8 mr-2 rounded-full" src="{{ asset('storage/' . auth()->user()->profile_pic) }}" alt="user photo">
    {{ auth()->user()->name }}
    <svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
         viewBox="0 0 10 6">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="m1 1 4 4 4-4"/>
    </svg>
</button>

<!-- Dropdown menu -->
<div id="dropdownAvatarName"
     class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
    <div class="px-4 py-3 text-sm text-gray-900 dark:text-white">
        <div class="truncate">{{ auth()->user()->email }}</div>
    </div>
    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
        aria-labelledby="dropdownInformdropdownAvatarNameButtonationButton">

        <li>
            <a href="#"
               class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Profile</a>
        </li>

        @admin
        <li>
            <a href="/admin/dashboard"
               class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
        </li>

        <li>
            <a href="#"
               class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
        </li>
        @endadmin
    </ul>
    <div class="">

        <a href="#"
           x-data="{}"
           @click.prevent="document.querySelector('#logout-form').submit()"
           class="block text-sm px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
        >Log Out</a>

        <form method="POST" action="/logout"
              id="logout-form"
              class="hidden">
            @csrf
        </form>
    </div>
</div>

@extends('admin.dashboard')

@section('title')
    Manage Categories
@endsection

@section('content')
    <!-- Card -->
    <div class="flex flex-col">
        <div class="-m-1.5 overflow-x-auto">
            <div class="p-1.5 min-w-full inline-block align-middle">
                <div
                    class="bg-white pb-4 border border-gray-200 rounded-xl shadow-sm  overflow-hidden dark:bg-slate-900 dark:border-gray-700">
                    <!-- Header -->
                    <div
                        class="px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center border-b border-gray-200 dark:border-gray-700">
                        <div>
                            <h2 class="text-xl font-semibold text-gray-800 dark:text-gray-200">
                                Categories
                            </h2>
                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                Manage categories, edit and more.
                            </p>
                        </div>

                        <div>
                            <div class="inline-flex gap-x-2">
                                <a class="py-2 px-3 inline-flex justify-center items-center gap-2 rounded-md border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-blue-600 transition-all text-sm dark:bg-slate-900 dark:hover:bg-slate-800 dark:border-gray-700 dark:text-gray-400 dark:hover:text-white dark:focus:ring-offset-gray-800"
                                   href="#">
                                    View all
                                </a>

                                <a class="py-2 px-3 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-blue-500 text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800"
                                   href="/admin/categories/create">
                                    <svg class="w-3 h-3" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                         viewBox="0 0 16 16" fill="none">
                                        <path d="M2.63452 7.50001L13.6345 7.5M8.13452 13V2" stroke="currentColor"
                                              stroke-width="2" stroke-linecap="round"/>
                                    </svg>
                                    Create category
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- End Header -->

                    <!-- Table -->
                    <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                        <thead class="bg-gray-50 dark:bg-slate-800">
                        <tr>
                            <th scope="col" class="pl-6 py-3 text-left">
                                <div class="flex items-center gap-x-2">
                                        <span
                                            class="text-xs font-semibold  tracking-wide text-gray-800 dark:text-gray-200">
                                            #ID
                                        </span>
                                </div>
                            </th>

                            <th scope="col" class="px-6 py-3 text-left">
                                <div class="flex items-center gap-x-2">
                                        <span
                                            class="text-xs font-semibold  tracking-wide text-gray-800 dark:text-gray-200">
                                            Name
                                        </span>
                                </div>
                            </th>

                            <th scope="col" class="px-6 py-3 text-left">
                                <div class="flex items-center gap-x-2">
                                        <span
                                            class="text-xs font-semibold  tracking-wide text-gray-800 dark:text-gray-200">
                                            Slug
                                        </span>
                                </div>
                            </th>


                            <th scope="col" class="px-6 py-3 text-left">
                                <div class="flex items-center gap-x-2">
                                        <span
                                            class="text-xs font-semibold  tracking-wide text-gray-800 dark:text-gray-200">
                                            Created At
                                        </span>
                                </div>
                            </th>

                            <th scope="col" class="px-6 py-3 text-right">
                                <div class="flex items-center gap-x-2">
                                        <span
                                            class="text-xs font-semibold  tracking-wide text-gray-800 dark:text-gray-200">
                                            Action
                                        </span>
                                </div>
                            </th>
                        </tr>
                        </thead>

                        <tbody class="divide-y divide-gray-200 dark:divide-gray-700">

                        @foreach ($categories as $category)
                            <tr>

                                <td class="h-px w-px whitespace-nowrap">
                                    <div class="px-6 py-3">
                                        <span class="text-sm text-gray-500">{{ $category->id }}</span>
                                    </div>
                                </td>


                                <td class="h-px w-px whitespace-nowrap">
                                    <div class="px-6 py-3">
                                        <span class="text-sm text-gray-500">{{ $category->name }}</span>
                                    </div>
                                </td>


                                <td class="h-px w-px whitespace-nowrap">
                                    <div class="px-6 py-3">
                                        <span class="text-sm text-gray-500">{{ $category->slug }}</span>
                                    </div>
                                </td>


                                <td class="h-px w-px whitespace-nowrap">
                                    <div class="px-6 py-3">
                                        <span class="text-sm text-gray-500">{{ $category->created_at }}</span>
                                    </div>
                                </td>


                                <td class="h-px w-px whitespace-nowrap">
                                    <div class="px-6 py-1.5">
                                        <a class="py-1 px-2 inline-flex justify-center items-center gap-2 rounded-md border border-transparent bg-blue-500 text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all text-xs dark:focus:ring-offset-gray-800"
                                           href="/admin/categories/{{ $category->id }}/edit">
                                            Edit
                                        </a>
                                        <form method="POST" action="/admin/categories/{{ $category->id }}" class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button
                                                class="py-1 px-2 inline-flex justify-center items-center gap-2 rounded-md border border-transparent bg-red-400 text-white hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all text-xs dark:focus:ring-offset-gray-800">
                                                Delete
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                    <!-- End Table -->

                    <!-- Footer -->
                    <div class="p-3 pb-0">
                        {{ $categories->links() }}
                    </div>
                    <!-- End Footer -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Card -->
@endsection

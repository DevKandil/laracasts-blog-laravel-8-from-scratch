@extends('admin.dashboard')

@section('title')
    Manage Post
@endsection

@section('content')

    <!-- Card Section -->
    <div class="mx-auto">
        <!-- Grid -->
        <div class="grid sm:grid-cols-4 lg:grid-cols-4 gap-4 sm:gap-6">


            <!-- Card -->
            <div class="flex flex-col bg-white border shadow-sm rounded-xl dark:bg-slate-900 dark:border-gray-800">
                <div class="p-4 md:p-5">
                    <div class="flex items-center gap-x-2">
                        <p class="text-xs uppercase tracking-wide text-gray-500">
                            Total Users
                        </p>
                    </div>

                    <div class="mt-1 flex items-center">
                        <h3 class="text-xl sm:text-2xl font-medium text-gray-800 dark:text-gray-200">
                            {{ $users->count() }}
                        </h3>
                    </div>
                </div>
            </div>
            <!-- End Card -->

            <!-- Card -->
            <div class="flex flex-col bg-white border shadow-sm rounded-xl dark:bg-slate-900 dark:border-gray-800">
                <div class="p-4 md:p-5">
                    <div class="flex items-center gap-x-2">
                        <p class="text-xs uppercase tracking-wide text-gray-500">
                            Total Posts
                        </p>
                    </div>

                    <div class="mt-1 flex items-center">
                        <h3 class="text-xl sm:text-2xl font-medium text-gray-800 dark:text-gray-200">
                            {{ $posts->count() }}
                        </h3>
                    </div>
                </div>
            </div>
            <!-- End Card -->

            <!-- Card -->
            <div class="flex flex-col bg-white border shadow-sm rounded-xl dark:bg-slate-900 dark:border-gray-800">
                <div class="p-4 md:p-5">
                    <div class="flex items-center gap-x-2">
                        <p class="text-xs uppercase tracking-wide text-gray-500">
                            Total Comments
                        </p>
                    </div>

                    <div class="mt-1 flex items-center">
                        <h3 class="text-xl sm:text-2xl font-medium text-gray-800 dark:text-gray-200">
                            {{ $comments->count() }}
                        </h3>
                    </div>
                </div>
            </div>
            <!-- End Card -->

            <!-- Card -->
            <div class="flex flex-col bg-white border shadow-sm rounded-xl dark:bg-slate-900 dark:border-gray-800">
                <div class="p-4 md:p-5">
                    <div class="flex items-center gap-x-2">
                        <p class="text-xs uppercase tracking-wide text-gray-500">
                            Total Views
                        </p>
                    </div>

                    <div class="mt-1 flex items-center">
                        <h3 class="text-xl sm:text-2xl font-medium text-gray-800 dark:text-gray-200">
                            92,913
                        </h3>
                    </div>
                </div>
            </div>
            <!-- End Card -->


        </div>
        <!-- End Grid -->
    </div>
    <!-- End Card Section -->

@endsection

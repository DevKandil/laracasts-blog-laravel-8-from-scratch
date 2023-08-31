<x-layout>
    <section class="px-6 py-8">

        <section class="">
            <div class="mx-auto flex flex-col items-center justify-center px-6 py-8">
                <h1 class="mb-10 text-xl font-bold leading-tight tracking-tight text-gray-700 dark:text-white md:text-2xl">
                    Register
                </h1>
                <div
                    class="w-full rounded-lg bg-gray-50 shadow dark:border dark:border-gray-700 dark:bg-gray-800 sm:max-w-md md:mt-0 xl:p-0">
                    <div class="p-6 space-y-4 sm:p-8 md:space-y-6">

                        <form action="/register" method="POST" class="space-y-4 md:space-y-6">
                            @csrf
                            <div>
                                <label for="name" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Name</label>
                                <input type="text" name="name" id="name" value="{{ old('name') }}"
                                       class="block w-full rounded-lg border border-gray-300 text-gray-900 p-2.5 focus:border-blue-600 focus:ring-blue-600 dark:placeholder-gray-400 dark:border-gray-600 dark:bg-gray-700 dark:text-white sm:text-sm dark:focus:border-blue-500 dark:focus:ring-blue-500"
                                       placeholder="Your name" required="">

                                {{-- If You Need To Display Each Error Under It's Input--}}
                                {{--                                @error('name')--}}
                                {{--                                <p class="mt-1 text-xs text-red-500">{{ $message }}</p>--}}
                                {{--                                @enderror--}}
                            </div>

                            <div>
                                <label for="username"
                                       class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Username</label>
                                <input type="text" name="username" id="username" value="{{ old('username') }}"
                                       class="block w-full rounded-lg border border-gray-300 text-gray-900 p-2.5 focus:border-blue-600 focus:ring-blue-600 dark:placeholder-gray-400 dark:border-gray-600 dark:bg-gray-700 dark:text-white sm:text-sm dark:focus:border-blue-500 dark:focus:ring-blue-500"
                                       placeholder="Username" required="">
                                {{--                                @error('username')--}}
                                {{--                                <p class="mt-1 text-xs text-red-500">{{ $message }}</p>--}}
                                {{--                                @enderror--}}
                            </div>

                            <div>
                                <label for="email" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Your
                                    email</label>
                                <input type="email" name="email" id="email" value="{{ old('email') }}"
                                       class="block w-full rounded-lg border border-gray-300 text-gray-900 p-2.5 focus:border-blue-600 focus:ring-blue-600 dark:placeholder-gray-400 dark:border-gray-600 dark:bg-gray-700 dark:text-white sm:text-sm dark:focus:border-blue-500 dark:focus:ring-blue-500"
                                       placeholder="name@company.com" required="">
                                {{--                                @error('email')--}}
                                {{--                                <p class="mt-1 text-xs text-red-500">{{ $message }}</p>--}}
                                {{--                                @enderror--}}
                            </div>

                            <div>
                                <label for="password"
                                       class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Password</label>
                                <input type="password" name="password" id="password" placeholder="••••••••"
                                       class="block w-full rounded-lg border border-gray-300 text-gray-900 p-2.5 focus:border-blue-600 focus:ring-blue-600 dark:placeholder-gray-400 dark:border-gray-600 dark:bg-gray-700 dark:text-white sm:text-sm dark:focus:border-blue-500 dark:focus:ring-blue-500"
                                       required="">
                                {{--                                @error('password')--}}
                                {{--                                <p class="mt-1 text-xs text-red-500">{{ $message }}</p>--}}
                                {{--                                @enderror--}}
                            </div>


                            {{-- Display All Error Under Form Inputs--}}
                            @if($errors->any())

                                <div
                                    class="mb-4 flex rounded-lg bg-red-50 p-4 text-sm text-red-800 dark:bg-gray-800 dark:text-red-400"
                                    role="alert">
                                    <svg class="mr-3 inline h-4 w-4 flex-shrink-0 mt-[2px]" aria-hidden="true"
                                         xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                                    </svg>
                                    <span class="sr-only">Danger</span>
                                    <div>
                                        <span class="font-medium">Ensure that these requirements are met:</span>
                                        <ul class="ml-4 list-inside list-disc mt-1.5">

                                            @foreach($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach

                                        </ul>
                                    </div>
                                </div>
                            @endif


                            <div class="flex items-start">
                                <div class="flex h-5 items-center">
                                    <input id="terms" aria-describedby="terms" type="checkbox"
                                           class="h-4 w-4 rounded border border-gray-300 focus:ring-3 focus:ring-blue-300 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-blue-600"
                                           required="">
                                </div>
                                <div class="ml-3 text-sm">
                                    <label for="terms" class="font-light text-gray-500 dark:text-gray-300">I accept the
                                        <a class="font-medium text-blue-600 hover:underline dark:text-blue-500"
                                           href="#">Terms and Conditions</a></label>
                                </div>
                            </div>
                            <button type="submit"
                                    class="w-full rounded-lg bg-blue-600 px-5 text-center text-sm font-medium text-white py-2.5 hover:bg-blue-700 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Create an account
                            </button>
                            <p class="text-sm font-light text-gray-500 dark:text-gray-400">
                                Already have an account? <a href="/login"
                                                            class="font-medium text-blue-600 hover:underline dark:text-blue-500">Login
                                    here</a>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </section>

    </section>
</x-layout>

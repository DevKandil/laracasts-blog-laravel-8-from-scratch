<x-layout>
    <section class="px-6 py-8">

        <section class="">
            <div class="mx-auto flex flex-col items-center justify-center px-6 py-8">
                <h1 class="mb-10 text-xl font-bold leading-tight tracking-tight text-gray-700 dark:text-white md:text-2xl">
                    Login
                </h1>
                <div
                    class="w-full rounded-lg bg-gray-50 shadow dark:border dark:border-gray-700 dark:bg-gray-800 sm:max-w-md md:mt-0 xl:p-0">
                    <div class="p-6 space-y-4 sm:p-8 md:space-y-6">

                        <form action="/login" method="POST" class="space-y-4 md:space-y-6">
                            @csrf

                            <div>
                                <label for="email" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">
                                    Email</label>
                                <input type="email" name="email" id="email" value="{{ old('email') }}"
                                       class="block w-full rounded-lg border border-gray-300 @error('email') border-red-500 @enderror text-gray-900 p-2.5 focus:border-blue-600 focus:ring-blue-600 dark:placeholder-gray-400 dark:border-gray-600 dark:bg-gray-700 dark:text-white sm:text-sm dark:focus:border-blue-500 dark:focus:ring-blue-500"
                                       placeholder="name@company.com" required="">
                                @error('email')
                                <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label for="password"
                                       class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Password</label>
                                <input type="password" name="password" id="password" placeholder="••••••••"
                                       class="block w-full rounded-lg border border-gray-300 @error('password') border-red-500 @enderror text-gray-900 p-2.5 focus:border-blue-600 focus:ring-blue-600 dark:placeholder-gray-400 dark:border-gray-600 dark:bg-gray-700 dark:text-white sm:text-sm dark:focus:border-blue-500 dark:focus:ring-blue-500"
                                       required="">
                                @error('password')
                                <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="flex items-center justify-between">
                                <div class="flex items-start">
                                    <div class="flex items-center h-5">
                                        <input id="remember" name="remember" aria-describedby="remember" type="checkbox" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-primary-600 dark:ring-offset-gray-800">
                                    </div>
                                    <div class="ml-3 text-sm">
                                        <label for="remember" class="text-gray-500 dark:text-gray-300">Remember me</label>
                                    </div>
                                </div>
                                <a href="#" class="text-sm font-medium text-blue-600 hover:underline dark:text-blue-500">Forgot password?</a>
                            </div>


                            <button type="submit"
                                    class="w-full rounded-lg bg-blue-600 px-5 text-center text-sm font-medium text-white py-2.5 hover:bg-blue-700 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Login
                            </button>
                            <p class="text-sm font-light text-gray-500 dark:text-gray-400">
                                Don’t have an account yet? <a href="/register"
                                                            class="font-medium text-blue-600 hover:underline dark:text-blue-500"
                                >Register</a>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </section>

    </section>
</x-layout>

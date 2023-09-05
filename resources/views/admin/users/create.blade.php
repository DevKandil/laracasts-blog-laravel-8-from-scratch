@extends('admin.dashboard')

@section('title')
    Create User
@endsection

@section('content')

            <section>
                <div>
                    <h2 class="text-xl font-semibold text-gray-700 dark:text-gray-200">
                        Create New User
                    </h2>
{{--                    <p class="text-sm text-gray-600 dark:text-gray-400">--}}
{{--                        Add posts--}}
{{--                    </p>--}}
                </div>
                <div class="mx-auto max-w-2xl px-4 py-8 lg:py-16">
                    <form action="/admin/users" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">

                            <x-form.input name="name" type="text" :value="old('email')" required />

                            <x-form.input name="username" type="text" :value="old('username')" required />

                            <x-form.input name="email" type="email" :value="old('email')" required />

                            <x-form.file-input name="profile_pic" />

                            <x-form.input name="password" type="password"  required />





                        </div>
                        <button type="submit" class="mt-4 inline-flex items-center rounded-lg bg-blue-500 px-5 text-center text-sm font-medium text-white py-2.5 hover:bg-blue-600 focus:ring-4 focus:ring-blue-200 sm:mt-6 dark:focus:ring-blue-900">
                            Create
                        </button>
                    </form>
                </div>
            </section>



@endsection

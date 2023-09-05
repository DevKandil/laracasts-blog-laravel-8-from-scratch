@extends('admin.dashboard')

@section('title')
    Add Categories
@endsection

@section('content')

            <section>
                <div>
                    <h2 class="text-xl font-semibold text-gray-700 dark:text-gray-200">
                        Add New Category
                    </h2>
{{--                    <p class="text-sm text-gray-600 dark:text-gray-400">--}}
{{--                        Add posts--}}
{{--                    </p>--}}
                </div>
                <div class="mx-auto max-w-2xl px-4 py-8 lg:py-16">
                    <form action="/admin/categories" method="POST">
                        @csrf
                        <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">

                            <x-form.input name="name" type="text" :value="old('name')" required />

                            <x-form.input name="slug" type="text" :value="old('slug')" required />


                        </div>
                        <button type="submit" class="mt-4 inline-flex items-center rounded-lg bg-blue-500 px-5 text-center text-sm font-medium text-white py-2.5 hover:bg-blue-600 focus:ring-4 focus:ring-blue-200 sm:mt-6 dark:focus:ring-blue-900">
                            Create
                        </button>
                    </form>
                </div>
            </section>



@endsection

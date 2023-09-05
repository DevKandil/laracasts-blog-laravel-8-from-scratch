@extends('admin.dashboard')

@section('title')
    Edit Category
@endsection

@section('content')

    <section>
        <div>
            <h2 class="text-xl font-semibold text-gray-700 dark:text-gray-200">
                Edit Category
            </h2>
        </div>
        <div class="mx-auto max-w-2xl px-4 py-8 lg:py-16">
            <form action="/admin/categories/{{ $category->id }}" method="POST" >
                @csrf
                @method('PATCH')
                <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">

                    <x-form.input name="name" type="text" :value="old('name', $category->name)" required/>

                    <x-form.input name="slug" type="text" :value="old('slug', $category->slug)" required/>


                </div>
                <button type="submit"
                        class="mt-4 inline-flex items-center rounded-lg bg-blue-500 px-5 text-center text-sm font-medium text-white py-2.5 hover:bg-blue-600 focus:ring-4 focus:ring-blue-200 sm:mt-6 dark:focus:ring-blue-900">
                    Update
                </button>
            </form>
        </div>
    </section>

@endsection

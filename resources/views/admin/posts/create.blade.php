@extends('admin.dashboard')

@section('title')
    Add Post
@endsection

@section('content')

            <section>
                <h1 class="text-xl leading-tight tracking-tight text-gray-700 dark:text-white md:text-2xl">
                    Add a new Post
                </h1>
                <div class="mx-auto max-w-2xl px-4 py-8 lg:py-16">
                    <form action="/admin/posts" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">

                            <x-form.input name="title" />

                            <x-form.input name="slug" />

                            <x-form.file-input name="thumbnail" />

                            <x-form.textarea name="excerpt" rows="4" />

                            <x-form.textarea name="body" rows="10" />



                            <div>
                                <x-form.label name="category" />
                                <select
                                    id="category"
                                    name="category_id"
                                    class="block w-full rounded-lg border border-gray-300 bg-gray-50 text-sm text-gray-900 p-2.5 focus:border-blue-500 focus:ring-blue-500 dark:placeholder-gray-400 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:focus:border-blue-500 dark:focus:ring-blue-500">
                                    <option selected="">Select category</option>
                                    @foreach (\App\Models\Category::all() as $category)
                                        <option
                                            value="{{ $category->id }}"
                                            {{ old('category_id') == $category->id ? 'selected' : '' }}
                                        >{{ ucwords($category->name) }}</option>
                                    @endforeach
                                </select>

                                <x-form.error name="category_id" />
                            </div>


                        </div>
                        <button type="submit" class="mt-4 inline-flex items-center rounded-lg bg-blue-500 px-5 text-center text-sm font-medium text-white py-2.5 hover:bg-blue-600 focus:ring-4 focus:ring-blue-200 sm:mt-6 dark:focus:ring-blue-900">
                            Publish
                        </button>
                    </form>
                </div>
            </section>



@endsection

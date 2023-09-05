@extends('admin.dashboard')

@section('title')
    Edit Post
@endsection

@section('content')

    <section>
        <div>
            <h2 class="text-xl font-semibold text-gray-700 dark:text-gray-200">
                Edit Post
            </h2>
        </div>
        <div class="mx-auto max-w-2xl py-2">
            <form action="/admin/posts/{{ $post->id }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">

                    <div class="sm:col-span-2 mx-auto">
                        <img src="{{ asset('storage/' . $post->thumbnail) }}" alt="" class="rounded-xl"
                             width="400">
                    </div>

                    <x-form.input name="title" type="text" :value="old('title', $post->title)" required/>

                    <x-form.input name="slug" type="text" :value="old('title', $post->slug)" required/>

                    <x-form.file-input name="thumbnail" :value="old('thumbnail', $post->thumbnail)"/>

                    <x-form.textarea name="excerpt" rows="4">{{ old('excerpt', $post->excerpt) }}</x-form.textarea>

                    <x-form.textarea name="body" rows="10">{{ old('excerpt', $post->body) }}</x-form.textarea>


                    <div>
                        <x-form.label name="category"/>
                        <select
                            id="category"
                            name="category_id"
                            class="block w-full rounded-lg border border-gray-300 bg-gray-50 text-sm text-gray-900 p-2.5 focus:border-blue-500 focus:ring-blue-500 dark:placeholder-gray-400 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:focus:border-blue-500 dark:focus:ring-blue-500">
                            <option selected="">Select category</option>
                            @foreach (\App\Models\Category::all() as $category)
                                <option
                                    value="{{ $category->id }}"
                                    {{ old('category_id', $post->category_id) == $category->id ? 'selected' : '' }}
                                >{{ ucwords($category->name) }}</option>
                            @endforeach
                        </select>

                        <x-form.error name="category_id"/>
                    </div>


                </div>
                <button type="submit"
                        class="mt-4 inline-flex items-center rounded-lg bg-blue-500 px-5 text-center text-sm font-medium text-white py-2.5 hover:bg-blue-600 focus:ring-4 focus:ring-blue-200 sm:mt-6 dark:focus:ring-blue-900">
                    Update
                </button>
            </form>
        </div>
    </section>

@endsection

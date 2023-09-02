<x-layout>
    <section class="px-6 py-8">
        <section>
                <h1 class="mx-auto mt-10 text-center text-xl font-bold leading-tight tracking-tight text-gray-700 dark:text-white md:text-2xl">
                    Add a new Post
                </h1>
                <div class="mx-auto max-w-2xl px-4 py-8 lg:py-16">
                    <form action="/admin/posts" method="POST">
                        @csrf
                        <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                            <div class="sm:col-span-2">
                                <label for="title" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Title</label>
                                <input
                                    type="text"
                                    value="{{ old('title') }}"
                                    name="title"
                                    id="title"
                                    class="block w-full rounded-lg border border-gray-300 bg-gray-50 text-sm text-gray-900 p-2.5 focus:border-blue-600 focus:ring-blue-600 dark:placeholder-gray-400 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:focus:border-blue-500 dark:focus:ring-blue-500"
                                    placeholder="Type post title"
                                    required
                                >
                                @error('title')
                                <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="sm:col-span-2">
                                <label for="slug" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Slug</label>
                                <input
                                    type="text"
                                    value="{{ old('slug') }}"
                                    name="slug"
                                    id="slug"
                                    class="block w-full rounded-lg border border-gray-300 bg-gray-50 text-sm text-gray-900 p-2.5 focus:border-blue-600 focus:ring-blue-600 dark:placeholder-gray-400 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:focus:border-blue-500 dark:focus:ring-blue-500"
                                    placeholder="Type post slug"
                                    required
                                >
                                @error('slug')
                                <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="sm:col-span-2">
                                <label for="excerpt" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Excerpt</label>
                                <textarea
                                    id="excerpt"
                                    name="excerpt"
                                    rows="4"
                                    class="block w-full rounded-lg border border-gray-300 bg-gray-50 text-sm text-gray-900 p-2.5 focus:border-blue-500 focus:ring-blue-500 dark:placeholder-gray-400 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:focus:border-blue-500 dark:focus:ring-blue-500"
                                    placeholder="Your post excerpt"
                                    required>{{ old('excerpt') }}</textarea>
                                @error('excerpt')
                                <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="sm:col-span-2">
                                <label for="body" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Body</label>
                                <textarea
                                    id="body"
                                    name="body"
                                    rows="10"
                                    class="block w-full rounded-lg border border-gray-300 bg-gray-50 text-sm text-gray-900 p-2.5 focus:border-blue-500 focus:ring-blue-500 dark:placeholder-gray-400 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:focus:border-blue-500 dark:focus:ring-blue-500"
                                    placeholder="Your post body here"
                                    required>{{ old('body') }}</textarea>
                                @error('body')
                                <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                                @enderror
                            </div>


                            <div>
                                <label for="category_id" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Category</label>
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
                                @error('category')
                                <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                                @enderror
                            </div>


                        </div>
                        <button type="submit" class="mt-4 inline-flex items-center rounded-lg bg-blue-500 px-5 text-center text-sm font-medium text-white py-2.5 hover:bg-blue-600 focus:ring-4 focus:ring-blue-200 sm:mt-6 dark:focus:ring-blue-900">
                            Publish
                        </button>
                    </form>
                </div>
        </section>
    </section>
</x-layout>

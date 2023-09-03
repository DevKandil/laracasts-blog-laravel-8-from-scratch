@props(['name', 'rows' => 4])

<div class="sm:col-span-2">

    <x-form.label name="{{ $name }}" />

    <textarea
        id="{{ $name }}"
        name="{{ $name }}"
        rows="{{ $rows }}"
        class="block w-full rounded-lg border border-gray-300 bg-gray-50 text-sm text-gray-900 p-2.5 focus:border-blue-500 focus:ring-blue-500 dark:placeholder-gray-400 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:focus:border-blue-500 dark:focus:ring-blue-500"
        placeholder="Your post {{ $name }}"
        required>{{ old($name) }}</textarea>

    <x-form.error name="{{ $name }}" />

</div>

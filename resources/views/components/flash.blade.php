@if (session('success'))
    <div x-data="{ show: true }"
         x-init="setTimeout(() => show = false, 4000)"
         x-show="show"
         class="fixed right-4 bottom-4 rounded-xl bg-green-500 px-5 py-3 text-sm text-white"
    >
        <p>{{ session('success') }}</p>
    </div>
@endif

@if (session('success'))

    <div x-data="{ show: true }"
         x-init="setTimeout(() => show = false, 4000)"
         x-show="show"
         role="alert"
         class="fixed right-4 bottom-4 rounded-xl border border-green-500 bg-white p-4"
    >
        <div class="flex items-start gap-4">
    <span>
      <svg
          xmlns="http://www.w3.org/2000/svg"
          fill="none"
          viewBox="0 0 24 24"
          stroke-width="1.5"
          stroke="#22c55e"
          class="h-6 w-6"
      >
        <path
            stroke-linecap="round"
            stroke-linejoin="round"
            d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"
        />
      </svg>
    </span>

            <div class="flex-1">
                <strong class="block font-medium text-gray-900"> Changes saved </strong>

                <p class="mt-1 text-sm text-gray-700">
                    {{ session('success') }}
                </p>
            </div>

            <button
                @click="show = false"
                class="text-gray-500 transition hover:text-gray-600"
            >
                <span class="sr-only">Dismiss popup</span>

                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    class="h-6 w-6"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M6 18L18 6M6 6l12 12"
                    />
                </svg>
            </button>
        </div>
    </div>
@endif

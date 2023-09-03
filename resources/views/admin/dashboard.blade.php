<!doctype html>
<html lang="en">
<head>
    <title>@yield('title')</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
        html {
            scroll-behavior: smooth;
        }
    </style>
</head>
<body style="font-family: Open Sans, sans-serif">

    @include('admin.includes.navbar')

    <div class="flex overflow-hidden bg-white pt-16">
        @include('admin.includes.sidebar')
        <div id="main-content" class="relative h-full w-full overflow-y-auto bg-white lg:ml-64">
            <main>
                <div class="px-4 pt-6">

                    @yield('content')

                </div>
            </main>

            @include('admin.includes.footer')

        </div>
    </div>


    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <script src="https://demo.themesberg.com/windster/app.bundle.js"></script>
    <script defer src="https://unpkg.com/alpinejs@3.12.3/dist/cdn.min.js"></script>
</body>
</html>

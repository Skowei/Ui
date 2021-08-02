<div class="wrapper bg-pink-900">
    <div class="wave bg-gray-200 dark:bg-gray-800"></div>
</div>
<div class="relative xl:min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0">
    <div>
        {{ $logo }}
    </div>

    <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-gray-100 dark:bg-gray-900 shadow-md overflow-hidden sm:rounded-lg">
        {{ $slot }}
    </div>
</div>

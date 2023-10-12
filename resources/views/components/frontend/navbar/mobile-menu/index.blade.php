<div {{ $attributes->class(['w-full h-[90vh] overflow-y-auto py-2 px-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10 dark:bg-gray-900']) }}>
    <div class="mt-6 flow-root">
        <div class="-my-6 divide-y divide-gray-500/10">
            {{ $slot }}
        </div>
    </div>
</div>

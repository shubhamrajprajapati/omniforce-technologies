<a {{ $attributes->class(['-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:text-blue-700 hover:bg-blue-50 dark:text-gray-400 dark:hover:text-blue-500 dark:hover:bg-black/10'])->merge(['href' => 'javascript:;']) }}>
    {{ $slot }}
</a>

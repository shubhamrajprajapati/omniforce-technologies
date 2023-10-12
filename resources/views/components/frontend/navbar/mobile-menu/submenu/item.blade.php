<a {{ $attributes->class(['block rounded-lg py-2 pl-6 pr-3 text-sm font-semibold leading-7 text-gray-700 hover:text-fuchsia-700 hover:bg-fuchsia-50 dark:text-gray-400 dark:hover:text-fuchsia-500 dark:hover:bg-black/10'])->merge(['href' => 'javascript:;']) }}>
    {{ $slot }}
</a>
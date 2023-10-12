<a {{ $attributes->class(['text-base font-semibold leading-6 hover:text-blue-700 dark:hover:text-blue-400'])->merge(['href' => 'javascript:;']) }}>
    {{ $slot }}
</a>

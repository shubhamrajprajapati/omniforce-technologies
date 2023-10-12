<div
    {{ $attributes->class(['ease-out duration-200 opacity-0 top-[-300vh] translate-y-1 absolute -left-8 z-1 mt-3 w-screen max-w-md overflow-hidden rounded-3xl bg-white dark:bg-gray-900 shadow-lg ring-1 ring-gray-900/5 navbar-collapse dark:[text-shadow:none] dark:[text-shadow:none]'])->merge(['id' => 'exampleNavbar']) }}>

    {{ $slot }}

</div>

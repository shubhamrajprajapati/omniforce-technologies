<!-- 'Product' sub-menu, show/hide based on menu state. -->
<div {{ $attributes->class(['space-y-1 pl-6 hidden navbar-collapse duration-500'])->merge(['id' => 'exampleNavbar']) }}>
    {{ $slot }}
</div>


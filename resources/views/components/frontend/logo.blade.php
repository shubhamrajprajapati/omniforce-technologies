<span class="sr-only">{{ config('app.name') }}</span>
<img {{ $attributes->class(['md:h-18 md:w-18 h-16 w-16 duration-700 ease-in hover:translate-x-1']) }}
    src="{{ asset('assets/images/logo.png') }}" alt="{{ config('app.name') . ' official-logo' }}">

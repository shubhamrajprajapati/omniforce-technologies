<div
    {{ $attributes->class(['relative flex flex-col items-center text-center p-3 rounded-xl hover:bg-slate-100 dark:hover:bg-slate-900 cursor-pointer shadow-sm hover:shadow-md border']) }}>

    <img src="{{ $img ?? '' }}" alt="{{ $productName ?? 'default alt text' }}"
        class="h-20 w-20 md:h-24 md:w-24 object-contain rounded-full shadow-md bg-white bg-gradient-to-r from-fuchsia-100 to-green-100 hover:bg-gradient-to-r hover:from-yellow-100 hover:to-red-100 m-3">
    <div class="text-base font-medium">{{ $productName ?? '' }}</div>
</div>

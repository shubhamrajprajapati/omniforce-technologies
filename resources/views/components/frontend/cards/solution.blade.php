<div
    {{ $attributes->class(['max-w-sm p-6 border rounded-lg shadow-sm hover:shadow-md cursor-pointer bg-gradient-to-r from-fuchsia-100 dark:from-transparent to-green-100 dark:to-transparent hover:bg-gradient-to-r hover:from-yellow-100 hover:to-red-100 hover:scale-[1.02] duration-300 hover:text-blue-800 dark:hover:text-blue-500 border-gray-200 bg-white dark:bg-gray-800 dark:border-gray-700 relative isolate overflow-hidden']) }}>
    
        <svg viewBox="0 0 1024 1024"
            class="absolute left-1/2 top-1/2 -z-10 h-[64rem] w-[64rem] -translate-y-1/2 [mask-image:radial-gradient(closest-side,white,transparent)] sm:left-full sm:-ml-80 lg:left-1/2 lg:ml-0 lg:-translate-x-1/2 lg:translate-y-0"
            aria-hidden="true">
            <circle cx="512" cy="512" r="512" fill="url(#759c1415-0410-454c-8f7c-9a820de03641)"
                fill-opacity="0.7" />
            <defs>
                <radialGradient id="759c1415-0410-454c-8f7c-9a820de03641">
                    <stop stop-color="#7775D6" />
                    <stop offset="1" stop-color="#E935C1" />
                </radialGradient>
            </defs>
        </svg>

    <i class="bi {{ $icon ?? "" }} text-5xl mb-3 drop-shadow-lg text-gray-500 text-inherit dark:text-inherit dark:text-gray-400"></i>
    <h5 class="mt-3 mb-2 text-2xl font-semibold tracking-tight text-gray-900 text-inherit dark:text-inherit dark:text-white">{{$title ?? ""}}</h5>
    <p class="mb-3 text-sm font-normal text-gray-500 dark:text-gray-400">{{$subTitle ?? ""}}</p>
</div>

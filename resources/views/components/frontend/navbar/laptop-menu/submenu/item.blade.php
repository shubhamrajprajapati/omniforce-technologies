<div class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm leading-6 hover:bg-gray-50 dark:hover:bg-black/10">
    <div class="flex h-11 w-11 flex-none items-center justify-center rounded-lg bg-gray-50 dark:bg-black/10 group-hover:bg-white dark:group-hover:bg-black/20">
        {{$svg ?? ""}}
    </div>
    <div class="flex-auto">
        <a href="#" class="block font-semibold text-gray-900 dark:text-gray-400">
            {{$title ?? "Default Title"}}
            <span class="absolute inset-0"></span>
        </a>
        <p class="mt-1 text-gray-600">{{$subTitle ?? "Some body text"}}</p>
    </div>
</div>

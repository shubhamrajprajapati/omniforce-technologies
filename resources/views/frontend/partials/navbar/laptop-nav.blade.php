<nav-pc class="flex items-center md:justify-around justify-between p-5 lg:px-8">
    <div class="flex">
        <a href="{{ URL('/') }}" class="-m-1.5">
            <x-frontend.logo />
        </a>
    </div>
    <x-frontend.navbar.laptop-menu.index>
        <x-frontend.navbar.laptop-menu.item href="{{ route('home') }}">Home</x-frontend.navbar.laptop-menu.item>
        <div class="relative">
            <x-frontend.navbar.laptop-menu.item class="flex items-center gap-x-1" data-bs-toggle="flyout"
                data-bs-target="#product_laptop_submenu" aria-controls="product_laptop_submenu" aria-expanded="false"
                aria-label="Toggle submenu navigation">
                Services
                <x-frontend.icons.svgs.arrow-down class="text-inherit duration-300" />
            </x-frontend.navbar.laptop-menu.item>

            <x-frontend.navbar.laptop-menu.submenu.index id="product_laptop_submenu">
                <div class="p-4 max-h-[500px] overflow-auto">
                    <x-frontend.navbar.laptop-menu.submenu.item>
                        <x-slot:svg>
                            <x-frontend.icons.svgs.analytics />
                        </x-slot:svg>
                        <x-slot name="title">Salesforce CRM</x-slot>
                        <x-slot name="subTitle"></x-slot>
                    </x-frontend.navbar.laptop-menu.submenu.item>

                    <x-frontend.navbar.laptop-menu.submenu.item>
                        <x-slot:svg>
                            <x-frontend.icons.svgs.engagement />
                        </x-slot:svg>
                        <x-slot name="title">Salesforce Sales Cloud</x-slot>
                        <x-slot name="subTitle"></x-slot>
                    </x-frontend.navbar.laptop-menu.submenu.item>

                    <x-frontend.navbar.laptop-menu.submenu.item>
                        <x-slot:svg>
                            <x-frontend.icons.svgs.security />
                        </x-slot:svg>
                        <x-slot name="title">Salesforce Service Cloud</x-slot>
                        <x-slot name="subTitle"></x-slot>
                    </x-frontend.navbar.laptop-menu.submenu.item>

                    <x-frontend.navbar.laptop-menu.submenu.item>
                        <x-slot:svg>
                            <x-frontend.icons.svgs.integration />
                        </x-slot:svg>
                        <x-slot name="title">Salesforce Community Cloud</x-slot>
                        <x-slot name="subTitle"></x-slot>
                    </x-frontend.navbar.laptop-menu.submenu.item>

                    <x-frontend.navbar.laptop-menu.submenu.item>
                        <x-slot:svg>
                            <x-frontend.icons.svgs.automation />
                        </x-slot:svg>
                        <x-slot name="title">Salesforce Marketing Cloud</x-slot>
                        <x-slot name="subTitle"></x-slot>
                    </x-frontend.navbar.laptop-menu.submenu.item>

                    <x-frontend.navbar.laptop-menu.submenu.item>
                        <x-slot:svg>
                            <x-frontend.icons.svgs.automation />
                        </x-slot:svg>
                        <x-slot name="title">Salesforce Data Migration</x-slot>
                        <x-slot name="subTitle"></x-slot>
                    </x-frontend.navbar.laptop-menu.submenu.item>

                    <x-frontend.navbar.laptop-menu.submenu.item>
                        <x-slot:svg>
                            <x-frontend.icons.svgs.automation />
                        </x-slot:svg>
                        <x-slot name="title">Salesforce 360 degree Solutions</x-slot>
                        <x-slot name="subTitle"></x-slot>
                    </x-frontend.navbar.laptop-menu.submenu.item>

                    <x-frontend.navbar.laptop-menu.submenu.item>
                        <x-slot:svg>
                            <x-frontend.icons.svgs.automation />
                        </x-slot:svg>
                        <x-slot name="title">Zoho Services</x-slot>
                        <x-slot name="subTitle"></x-slot>
                    </x-frontend.navbar.laptop-menu.submenu.item>

                    <x-frontend.navbar.laptop-menu.submenu.item>
                        <x-slot:svg>
                            <x-frontend.icons.svgs.automation />
                        </x-slot:svg>
                        <x-slot name="title">MuleSoft</x-slot>
                        <x-slot name="subTitle"></x-slot>
                    </x-frontend.navbar.laptop-menu.submenu.item>
                </div>
                <div class="grid grid-cols-2 divide-x divide-gray-900/5 bg-gray-50 dark:bg-gray-900">
                    <a href="#"
                        class="flex items-center justify-center gap-x-2.5 p-3 text-sm font-semibold leading-6 text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:bg-black/20 dark:hover:bg-black/30">
                        <svg class="h-5 w-5 flex-none text-gray-400" viewBox="0 0 20 20" fill="currentColor"
                            aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M2 10a8 8 0 1116 0 8 8 0 01-16 0zm6.39-2.908a.75.75 0 01.766.027l3.5 2.25a.75.75 0 010 1.262l-3.5 2.25A.75.75 0 018 12.25v-4.5a.75.75 0 01.39-.658z"
                                clip-rule="evenodd" />
                        </svg>
                        Watch demo
                    </a>
                    <a href="#"
                        class="flex items-center justify-center gap-x-2.5 p-3 text-sm font-semibold leading-6 text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:bg-black/20 dark:hover:bg-black/30">
                        <svg class="h-5 w-5 flex-none text-gray-400" viewBox="0 0 20 20" fill="currentColor"
                            aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M2 3.5A1.5 1.5 0 013.5 2h1.148a1.5 1.5 0 011.465 1.175l.716 3.223a1.5 1.5 0 01-1.052 1.767l-.933.267c-.41.117-.643.555-.48.95a11.542 11.542 0 006.254 6.254c.395.163.833-.07.95-.48l.267-.933a1.5 1.5 0 011.767-1.052l3.223.716A1.5 1.5 0 0118 15.352V16.5a1.5 1.5 0 01-1.5 1.5H15c-1.149 0-2.263-.15-3.326-.43A13.022 13.022 0 012.43 8.326 13.019 13.019 0 012 5V3.5z"
                                clip-rule="evenodd" />
                        </svg>
                        Contact sales
                    </a>
                </div>
            </x-frontend.navbar.laptop-menu.submenu.index>
        </div>
        <div class="relative">
            <x-frontend.navbar.laptop-menu.item class="flex items-center gap-x-1" data-bs-toggle="flyout"
                data-bs-target="#about_us_laptop_submenu" aria-controls="about_us_laptop_submenu" aria-expanded="false"
                aria-label="Toggle submenu navigation">
                About Us
                <x-frontend.icons.svgs.arrow-down class="text-inherit duration-300" />
            </x-frontend.navbar.laptop-menu.item>

            <x-frontend.navbar.laptop-menu.submenu.index id="about_us_laptop_submenu">
                <div class="p-4 max-h-[500px] overflow-auto">
                    <x-frontend.navbar.laptop-menu.submenu.item>
                        <x-slot:svg>
                            <i class="bi bi-eye text-2xl text-gray-600 group-hover:text-indigo-600"></i>
                        </x-slot:svg>
                        <x-slot name="title">Omniforce Overview</x-slot>
                        <x-slot name="subTitle"></x-slot>
                    </x-frontend.navbar.laptop-menu.submenu.item>

                    <x-frontend.navbar.laptop-menu.submenu.item>
                        <x-slot:svg>
                            <i class="bi bi-bullseye text-xl text-gray-600 group-hover:text-indigo-600"></i>
                        </x-slot:svg>
                        <x-slot name="title">Mission & Vision</x-slot>
                        <x-slot name="subTitle"></x-slot>
                    </x-frontend.navbar.laptop-menu.submenu.item>

                    <x-frontend.navbar.laptop-menu.submenu.item>
                        <x-slot:svg>
                            <i class="bi bi-question text-xl text-gray-600 group-hover:text-indigo-600"></i>
                        </x-slot:svg>
                        <x-slot name="title">Why Omniforce</x-slot>
                        <x-slot name="subTitle"></x-slot>
                    </x-frontend.navbar.laptop-menu.submenu.item>

                    <x-frontend.navbar.laptop-menu.submenu.item>
                        <x-slot:svg>
                            <i class="bi bi-cloud text-xl text-gray-600 group-hover:text-indigo-600"></i>
                        </x-slot:svg>
                        <x-slot name="title">Salesforce Practices</x-slot>
                        <x-slot name="subTitle"></x-slot>
                    </x-frontend.navbar.laptop-menu.submenu.item>
                </div>
            </x-frontend.navbar.laptop-menu.submenu.index>
        </div>
        <x-frontend.navbar.laptop-menu.item href="javascript:;">Blogs</x-frontend.navbar.laptop-menu.item>

    </x-frontend.navbar.laptop-menu.index>

    <div class="flex gap-x-5">
        <a href="#"
            class="md:px-4 px-2 md:py-2 py-1 border-4 rounded-full border-l-fuchsia-500 border-t-green-500 border-r-red-500 border-b-yellow-500 bg-gradient-to-r from-fuchsia-100 to-green-100 hover:bg-gradient-to-r hover:from-yellow-100 hover:to-red-100 text-xs md:text-sm font-semibold leading-6 text-gray-900 uppercase whitespace-nowrap duration-200 hover:scale-[1.02]">
            Get a free consultation
        </a>

        <div class="flex lg:hidden">
            <button type="button"
                class="inline-flex items-center justify-center p-2 text-gray-700 showMobileMenuBtn bg-blue-50 hover:bg-blue-100 hover:text-blue-700 rounded-full">
                <span class="sr-only">Open main menu</span>
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
            </button>
        </div>

        <div class="hidden lg:flex items-center whitespace-nowrap gap-2">
            <x-frontend.navbar.laptop-menu.index>
                <x-frontend.navbar.laptop-menu.item href="javascript:;">Log in <span aria-hidden="true">&rarr;</span>
                </x-frontend.navbar.laptop-menu.item>
            </x-frontend.navbar.laptop-menu.index>
            </a>
            <div class="relative">
                <button data-tooltip-target="table-head-example-toggle-dark-mode-tooltip" type="button"
                    id="theme-toggle"
                    class="flex items-center w-9 h-9 justify-center text-xs font-medium text-gray-700 bg-white border border-gray-200 rounded-lg toggle-dark-state-example hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-gray-300 dark:focus:ring-gray-500 dark:bg-gray-800 focus:outline-none dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                    <svg id="theme-toggle-dark-icon" class="hidden w-3.5 h-3.5" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
                        <path
                            d="M17.8 13.75a1 1 0 0 0-.859-.5A7.488 7.488 0 0 1 10.52 2a1 1 0 0 0 0-.969A1.035 1.035 0 0 0 9.687.5h-.113a9.5 9.5 0 1 0 8.222 14.247 1 1 0 0 0 .004-.997Z">
                        </path>
                    </svg>
                    <svg id="theme-toggle-light-icon" class="hidden w-3.5 h-3.5" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M10 15a5 5 0 1 0 0-10 5 5 0 0 0 0 10Zm0-11a1 1 0 0 0 1-1V1a1 1 0 0 0-2 0v2a1 1 0 0 0 1 1Zm0 12a1 1 0 0 0-1 1v2a1 1 0 1 0 2 0v-2a1 1 0 0 0-1-1ZM4.343 5.757a1 1 0 0 0 1.414-1.414L4.343 2.929a1 1 0 0 0-1.414 1.414l1.414 1.414Zm11.314 8.486a1 1 0 0 0-1.414 1.414l1.414 1.414a1 1 0 0 0 1.414-1.414l-1.414-1.414ZM4 10a1 1 0 0 0-1-1H1a1 1 0 0 0 0 2h2a1 1 0 0 0 1-1Zm15-1h-2a1 1 0 1 0 0 2h2a1 1 0 0 0 0-2ZM4.343 14.243l-1.414 1.414a1 1 0 1 0 1.414 1.414l1.414-1.414a1 1 0 0 0-1.414-1.414ZM14.95 6.05a1 1 0 0 0 .707-.293l1.414-1.414a1 1 0 1 0-1.414-1.414l-1.414 1.414a1 1 0 0 0 .707 1.707Z">
                        </path>
                    </svg>
                    <span class="sr-only">Toggle dark/light mode</span>
                </button>

                <div id="table-head-example-toggle-dark-mode-tooltip" role="tooltip"
                    class="absolute z-10 inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm tooltip dark:bg-gray-700 opacity-0 invisible"
                    style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate3d(1012.8px, 4800.8px, 0px);"
                    data-popper-placement="top">Toggle dark mode
                </div>
            </div>
        </div>
    </div>

</nav-pc>

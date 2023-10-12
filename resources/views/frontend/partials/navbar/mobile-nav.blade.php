<!-- Mobile menu, show/hide based on menu open state. -->
<nav-mobile class="fixed w-full left-[-100vw] right-0 lg:hidden mobileMenu bg-white duration-500" role="dialog"
    aria-modal="true">
    <!-- Background backdrop, show/hide based on slide-over state. -->

    <x-frontend.navbar.mobile-menu.index>

        <div class="space-y-2 mb-2">
            <x-frontend.navbar.mobile-menu.item href="{{ URL('/') }}">Home</x-frontend.navbar.mobile-menu.item>

            {{-- Serrvices & Its Submenu --}}
            <div class="-mx-0 overflow-hidden">
                <x-frontend.navbar.mobile-menu.item class="-mx-0 flex w-full items-center justify-between"
                    data-bs-toggle="collapse" data-bs-target="#services_mobile_submenu"
                    aria-controls="services_mobile_submenu" aria-expanded="false" aria-label="Toggle submenu navigation">

                    Services
                    <x-frontend.icons.svgs.arrow-down class="text-inherit duration-300" />
                </x-frontend.navbar.mobile-menu.item>

                <x-frontend.navbar.mobile-menu.submenu.index id="services_mobile_submenu">
                    <div class="-mx-0">
                        <x-frontend.navbar.mobile-menu.submenu.item
                            class="-mx-0 flex w-full items-center justify-between" data-bs-toggle="collapse"
                            data-bs-target="#services_salesforce_mobile_submenu"
                            aria-controls="services_salesforce_mobile_submenu" aria-expanded="false"
                            aria-label="Toggle service submenu navigation">

                            Salesforce
                            <x-frontend.icons.svgs.arrow-down class="text-inherit duration-300" />
                        </x-frontend.navbar.mobile-menu.submenu.item>

                        <x-frontend.navbar.mobile-menu.submenu.index id="services_salesforce_mobile_submenu">
                            <x-frontend.navbar.mobile-menu.submenu.item>Salesforce
                                CRM</x-frontend.navbar.mobile-menu.submenu.item>
                            <x-frontend.navbar.mobile-menu.submenu.item>Salesforce Sales
                                Cloud</x-frontend.navbar.mobile-menu.submenu.item>
                            <x-frontend.navbar.mobile-menu.submenu.item>Salesforce Service
                                Cloud</x-frontend.navbar.mobile-menu.submenu.item>
                            <x-frontend.navbar.mobile-menu.submenu.item>Salesforce Community
                                Cloud</x-frontend.navbar.mobile-menu.submenu.item>
                            <x-frontend.navbar.mobile-menu.submenu.item>Salesforce Marketing
                                Cloud</x-frontend.navbar.mobile-menu.submenu.item>
                            <x-frontend.navbar.mobile-menu.submenu.item>Salesforce Data
                                Migration</x-frontend.navbar.mobile-menu.submenu.item>
                            <x-frontend.navbar.mobile-menu.submenu.item>Salesforce 360 Degree
                                solutions</x-frontend.navbar.mobile-menu.submenu.item>
                        </x-frontend.navbar.mobile-menu.submenu.index>

                    </div>
                    <div class="-mx-0">
                        <x-frontend.navbar.mobile-menu.submenu.item
                            class="-mx-0 flex w-full items-center justify-between" data-bs-toggle="collapse"
                            data-bs-target="#services_others_mobile_submenu"
                            aria-controls="services_others_mobile_submenu" aria-expanded="false"
                            aria-label="Toggle service others submenu navigation">

                            Others
                            <x-frontend.icons.svgs.arrow-down class="text-inherit duration-300" />
                        </x-frontend.navbar.mobile-menu.submenu.item>

                        <x-frontend.navbar.mobile-menu.submenu.index id="services_others_mobile_submenu">
                            <x-frontend.navbar.mobile-menu.submenu.item>Zoho
                                Services</x-frontend.navbar.mobile-menu.submenu.item>
                            <x-frontend.navbar.mobile-menu.submenu.item>MuleSoft</x-frontend.navbar.mobile-menu.submenu.item>
                        </x-frontend.navbar.mobile-menu.submenu.index>

                    </div>
                </x-frontend.navbar.mobile-menu.submenu.index>
            </div>

            {{-- About Us and Its Submenu --}}
            <div class="-mx-0 overflow-hidden">
                <x-frontend.navbar.mobile-menu.item class="-mx-0 flex w-full items-center justify-between"
                    data-bs-toggle="collapse" data-bs-target="#about_us_mobile_submenu"
                    aria-controls="about_us_mobile_submenu" aria-expanded="false"
                    aria-label="Toggle submenu navigation">

                    About Us
                    <x-frontend.icons.svgs.arrow-down class="text-inherit duration-300" />
                </x-frontend.navbar.mobile-menu.item>

                <x-frontend.navbar.mobile-menu.submenu.index id="about_us_mobile_submenu">
                    <x-frontend.navbar.mobile-menu.submenu.item>Omniforce
                        Overview</x-frontend.navbar.mobile-menu.submenu.item>
                    <x-frontend.navbar.mobile-menu.submenu.item>Mission
                        Vision</x-frontend.navbar.mobile-menu.submenu.item>
                    <x-frontend.navbar.mobile-menu.submenu.item>Why
                        Omniforce</x-frontend.navbar.mobile-menu.submenu.item>
                    <x-frontend.navbar.mobile-menu.submenu.item>Salesforce
                        Practices</x-frontend.navbar.mobile-menu.submenu.item>
                </x-frontend.navbar.mobile-menu.submenu.index>

            </div>

            {{-- Industries & Its Submenu --}}
            {{-- <div class="-mx-3">
                <x-frontend.navbar.mobile-menu.item class="-mx-0 flex w-full items-center justify-between"
                    data-bs-toggle="collapse" data-bs-target="#industries_mobile_submenu"
                    aria-controls="industries_mobile_submenu" aria-expanded="false" aria-label="Toggle submenu navigation">

                    Industries
                    <x-frontend.icons.svgs.arrow-down class="text-inherit duration-300" />
                </x-frontend.navbar.mobile-menu.item>

                <x-frontend.navbar.mobile-menu.submenu.index id="industries_mobile_submenu">
                    <x-frontend.navbar.mobile-menu.submenu.item>Technology</x-frontend.navbar.mobile-menu.submenu.item>
                    <x-frontend.navbar.mobile-menu.submenu.item>Retail & Consumer</x-frontend.navbar.mobile-menu.submenu.item>
                    <x-frontend.navbar.mobile-menu.submenu.item>Communications</x-frontend.navbar.mobile-menu.submenu.item>
                    <x-frontend.navbar.mobile-menu.submenu.item>Financial Services</x-frontend.navbar.mobile-menu.submenu.item>
                    <x-frontend.navbar.mobile-menu.submenu.item>Education</x-frontend.navbar.mobile-menu.submenu.item>
                    <x-frontend.navbar.mobile-menu.submenu.item>Real Estate</x-frontend.navbar.mobile-menu.submenu.item>
                    <x-frontend.navbar.mobile-menu.submenu.item>E-Commerce</x-frontend.navbar.mobile-menu.submenu.item>
                    <x-frontend.navbar.mobile-menu.submenu.item>Manufacturing</x-frontend.navbar.mobile-menu.submenu.item>
                    <x-frontend.navbar.mobile-menu.submenu.item>Healthcare and Life Sciences</x-frontend.navbar.mobile-menu.submenu.item>
                    <x-frontend.navbar.mobile-menu.submenu.item>Logistics & Transportation</x-frontend.navbar.mobile-menu.submenu.item>
                    <x-frontend.navbar.mobile-menu.submenu.item>Non-profit</x-frontend.navbar.mobile-menu.submenu.item>
                    <x-frontend.navbar.mobile-menu.submenu.item>Energy & Utilities</x-frontend.navbar.mobile-menu.submenu.item>
                </x-frontend.navbar.mobile-menu.submenu.index>

            </div> --}}

            <x-frontend.navbar.mobile-menu.item>Blogs</x-frontend.navbar.mobile-menu.item>

            {{-- Contact Us & Its Submenu --}}
            {{-- <div class="-mx-3">
                <x-frontend.navbar.mobile-menu.item class="-mx-0 flex w-full items-center justify-between"
                    data-bs-toggle="collapse" data-bs-target="#contact_us_mobile_submenu"
                    aria-controls="contact_us_mobile_submenu" aria-expanded="false" aria-label="Toggle submenu navigation">

                    Contact Us
                    <x-frontend.icons.svgs.arrow-down class="text-inherit duration-300" />
                </x-frontend.navbar.mobile-menu.item>

                <x-frontend.navbar.mobile-menu.submenu.index id="contact_us_mobile_submenu">
                    <x-frontend.navbar.mobile-menu.submenu.item>Connect With Us</x-frontend.navbar.mobile-menu.submenu.item>
                    <x-frontend.navbar.mobile-menu.submenu.item>Request For Quote</x-frontend.navbar.mobile-menu.submenu.item>
                    <x-frontend.navbar.mobile-menu.submenu.item>Careers</x-frontend.navbar.mobile-menu.submenu.item>
                </x-frontend.navbar.mobile-menu.submenu.index>

            </div> --}}
        </div>
        <div class="py-2">
            <x-frontend.navbar.mobile-menu.item>Login/Sign Up</x-frontend.navbar.mobile-menu.item>
        </div>

        <div class="relative py-5">
            <button data-tooltip-target="toggle-dark-mode-tooltip" type="button" id="theme-toggle"
                class="flex items-center px-3 py-2 justify-center text-xs font-medium text-gray-700 bg-white border border-gray-200 rounded-lg toggle-dark-state-example hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-gray-300 dark:focus:ring-gray-500 dark:bg-gray-800 focus:outline-none dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                <span class="flex items-center space-x-2">
                    <svg id="theme-toggle-dark-icon" class="hidden w-3.5 h-3.5" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M17.8 13.75a1 1 0 0 0-.859-.5A7.488 7.488 0 0 1 10.52 2a1 1 0 0 0 0-.969A1.035 1.035 0 0 0 9.687.5h-.113a9.5 9.5 0 1 0 8.222 14.247 1 1 0 0 0 .004-.997Z">
                        </path>
                    </svg>
                    <span id="theme-toggle-dark-icon" class="hidden">Turn On Dark Mode</span>
                </span>
                <span class="flex items-center space-x-2">
                    <svg id="theme-toggle-light-icon" class="hidden w-3.5 h-3.5" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M10 15a5 5 0 1 0 0-10 5 5 0 0 0 0 10Zm0-11a1 1 0 0 0 1-1V1a1 1 0 0 0-2 0v2a1 1 0 0 0 1 1Zm0 12a1 1 0 0 0-1 1v2a1 1 0 1 0 2 0v-2a1 1 0 0 0-1-1ZM4.343 5.757a1 1 0 0 0 1.414-1.414L4.343 2.929a1 1 0 0 0-1.414 1.414l1.414 1.414Zm11.314 8.486a1 1 0 0 0-1.414 1.414l1.414 1.414a1 1 0 0 0 1.414-1.414l-1.414-1.414ZM4 10a1 1 0 0 0-1-1H1a1 1 0 0 0 0 2h2a1 1 0 0 0 1-1Zm15-1h-2a1 1 0 1 0 0 2h2a1 1 0 0 0 0-2ZM4.343 14.243l-1.414 1.414a1 1 0 1 0 1.414 1.414l1.414-1.414a1 1 0 0 0-1.414-1.414ZM14.95 6.05a1 1 0 0 0 .707-.293l1.414-1.414a1 1 0 1 0-1.414-1.414l-1.414 1.414a1 1 0 0 0 .707 1.707Z">
                        </path>
                    </svg>
                    <span id="theme-toggle-light-icon" class="hidden">Switch Back To Light Mode</span>
                </span>

                <span class="sr-only">Toggle dark/light mode</span>
            </button>

            <div id="toggle-dark-mode-tooltip" role="tooltip"
                class="absolute z-10 inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm tooltip dark:bg-gray-700 opacity-0 invisible"
                style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate3d(1012.8px, 4800.8px, 0px);"
                data-popper-placement="top">Toggle dark mode
            </div>
        </div>

    </x-frontend.navbar.mobile-menu.index>
</nav-mobile>

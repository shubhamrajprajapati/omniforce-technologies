@extends('layouts.frontend.index')
@section('title')
    {{ config('app.name') . ' - Home' }}
@endsection
@section('description')
    Design via tailwind css
@endsection
@section('keywords')
    Omniforce Technologies
@endsection
@section('author')
    Omniforce Technologies
@endsection
@section('content')
    <div id="animation-carousel" class="relative w-full md:-top-[5.3rem] md:-mb-[5.3rem]" data-carousel="slide">
        <!-- Carousel wrapper -->
        <div class="relative h-56 overflow-hidden sm:h-64 xl:h-80 2xl:h-[30rem]">
            <!-- Item 1 -->
            <div id="carousel-item-1" class="hidden duration-700 ease-in-out" data-carousel-item="active">
                <img src="https://wp.salesforce.com/au/blog/wp-content/uploads/sites/36/2021/07/salesforce-crm-ultimate-guide-for-enterprise-header.jpg"
                    class="absolute block w-full h-full object-fill" alt="...">
            </div>
            <!-- Item 2 -->
            <div id="carousel-item-2" class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="https://www.salesforce.com/content/dam/blogs/fi/2022/crm-vertailu.png?w=2083"
                    class="absolute block w-full h-full object-fill" alt="...">
            </div>
            <!-- Item 3 -->
            <div id="carousel-item-3" class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="https://wp.salesforce.com/es-mx/wp-content/uploads/sites/24/2023/04/chp-webinars-card.png?w=2083"
                    class="absolute block w-full h-full object-fill" alt="...">
            </div>
            <!-- Item 4 -->
            <div id="carousel-item-4" class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="https://miro.medium.com/v2/resize:fit:835/1*9scD7Fo88EyT6s8N_sjIQg.png"
                    class="absolute block w-full h-full object-fill" alt="...">
            </div>
        </div>
        <!-- Slider indicators -->
        <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
            <button id="carousel-indicator-1" type="button" class="w-3 h-3 rounded-full" aria-current="true"
                aria-label="Slide 1"></button>
            <button id="carousel-indicator-2" type="button" class="w-3 h-3 rounded-full" aria-current="false"
                aria-label="Slide 2"></button>
            <button id="carousel-indicator-3" type="button" class="w-3 h-3 rounded-full" aria-current="false"
                aria-label="Slide 3"></button>
            <button id="carousel-indicator-4" type="button" class="w-3 h-3 rounded-full" aria-current="false"
                aria-label="Slide 4"></button>
        </div>
        <!-- Slider indicators -->
        <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
            <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
                data-carousel-slide-to="0"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
                data-carousel-slide-to="1"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
                data-carousel-slide-to="2"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4"
                data-carousel-slide-to="3"></button>
        </div>
        <!-- Slider controls -->
        <button id="data-carousel-prev" type="button"
            class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
            data-carousel-prev>
            <span
                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M5 1 1 5l4 4" />
                </svg>
                <span class="hidden">Previous</span>
            </span>
        </button>
        <button id="data-carousel-next" type="button"
            class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
            data-carousel-next>
            <span
                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 9 4-4-4-4" />
                </svg>
                <span class="hidden">Next</span>
            </span>
        </button>
    </div>

    {{-- Hero Section --}}
    {{-- <x-frontend.section.simple-gradiant>
        <div class="mx-auto max-w-7xl py-12 sm:py-40 lg:py-10">
            <div class="hidden sm:mb-8 sm:flex sm:justify-center">
                <div
                    class="relative rounded-full px-3 py-1 text-sm leading-6 text-gray-600 ring-1 ring-gray-900/10 hover:ring-gray-900/20 dark:ring-gray-300/10 dark:hover:ring-gray-300/20 dark:text-gray-200 dark:hover:text-gray-50">
                    🎉 Stand a Chance to Win Salesforce Certification Vouchers worth $5000 🎉 <a href="#"
                        class="font-semibold text-indigo-500 hover:text-indigo-600 dark:text-indigo-500 dark:hover:text-indigo-400"><span
                            class="absolute inset-0" aria-hidden="true"></span>Learn
                        More! <span aria-hidden="true">&rarr;</span></a>
                </div>
            </div>
            <div class="relative isolate overflow-hidden lg:flex lg:gap-x-20">

                <div class="mx-auto max-w-3xl text-center lg:mx-0 lg:flex-auto lg:py-5 lg:text-left">
                    <div class="text-left">
                        <h1
                            class="text-4xl font-bold tracking-tight text-gray-900 dark:text-gray-100 sm:text-5xl leading-snug sm:leading-tight">
                            Launch your
                            <span
                                class="before:block before:absolute before:-inset-1 before:-skew-y-3 before:bg-gradient-to-t from-blue-500 to-blue-700 relative inline-block text-white">
                                <span class="relative text-white">dream career</span>
                            </span>
                            in Salesforce in less than 100 days
                        </h1>
                        <p class="mt-6 text-lg leading-7 text-gray-600 dark:text-gray-300">
                            Get certified, gain hands-on project experience, and be
                            comprehensively job-ready with revamped personal brand and consulting skills.
                            <br><br>
                            Our AI powered platform, global community and expert gurus come together to give you a
                            personalized,
                            immersive learning experiences to help you start and grow your career in Salesforce.
                        </p>
                        <div class="mt-10 flex items-center gap-x-6">
                            <a href="#"
                                class="rounded-full bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Explore
                                Bootcamps</a>
                            <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Learn more <span
                                    aria-hidden="true">→</span></a>
                        </div>
                    </div>
                </div>
                <div class="hidden md:block relative w-[50rem] h-120 mt-16 lg:mt-8">
                    <img class="absolute left-0 top-0 max-w-none rounded-md bg-white/5 ring-1 ring-white/10 h-full w-full object-contain"
                        src="https://wp.salesforce.com/en-in/wp-content/uploads/sites/21/2023/05/php-marquee-ai-data-crm-fg-in.png?resize=1024,1024"
                        alt="App screenshot" width="1824" height="1080">
                </div>
            </div>
        </div>
    </x-frontend.section.simple-gradiant> --}}

    {{--
    <div class="bg-white">
        <div class="mx-auto max-w-7xl py-24 sm:px-6 sm:py-32 lg:px-8">
            <div
                class="relative isolate overflow-hidden bg-gray-900 px-6 pt-16 shadow-2xl sm:rounded-3xl sm:px-16 md:pt-24 lg:flex lg:gap-x-20 lg:px-24 lg:pt-0">
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
                <div class="mx-auto max-w-md text-center lg:mx-0 lg:flex-auto lg:py-32 lg:text-left">
                    <h2 class="text-3xl font-bold tracking-tight text-white sm:text-4xl lg:text-5xl">Boost your
                        productivity.<br>Start
                        using our app today.</h2>
                    <p class="mt-6 text-lg leading-8 text-gray-300">Ac euismod vel sit maecenas id pellentesque eu
                        sed
                        consectetur. Malesuada adipiscing sagittis vel nulla.</p>
                    <div class="mt-10 flex items-center justify-center gap-x-6 lg:justify-start">
                        <a href="#"
                            class="rounded-md bg-white px-3.5 py-2.5 text-sm font-semibold text-gray-900 shadow-sm hover:bg-gray-100 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white">Get
                            started</a>
                        <a href="#" class="text-sm font-semibold leading-6 text-white">Learn more <span
                                aria-hidden="true">→</span></a>
                    </div>
                </div>
                <div class="relative mt-16 h-80 lg:mt-8">
                    <img class="absolute left-0 top-0 w-[57rem] max-w-none rounded-md bg-white/5 ring-1 ring-white/10"
                        src="https://tailwindui.com/img/component-images/dark-project-app-screenshot.png"
                        alt="App screenshot" width="1824" height="1080">
                </div>
            </div>
        </div>
    </div> --}}


    {{-- What we offer --}}
    <x-frontend.section.simple-gradiant>
        <div class="max-w-7xl mx-auto">
            <div class="text-center py-8 mb-8">
                <h2 class="text-3xl font-bold tracking-tight sm:text-4xl lg:text-5xl text-slate-900 dark:text-white mb-5">
                    What We Offer
                </h2>
                <p class="text-gray-500 dark:text-gray-400 font-base">Omniforce offers a complete set of cloud-based CRM
                    tools and services
                    aimed at supporting businesses in the management of sales, arketing, finance, customer service,
                    Industry-specific Solutions and related operations.</p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-5">

                @php
                    $offerCards = [
                        [
                            'img' => 'https://consleague.com/wp-content/uploads/2021/05/Consleague-Blog-Featured-Image.png',
                            'title' => 'Salesforce Implementation',
                            'subTitle' => 'With our proficiency in Salesforce, Omniforce provides comprehensive Salesforceimplementation services that encompass customization, integration, and platform .
                        Our goal is to empower your professional services, drive rapid outcomes, foster scalability, adaptability, and foster a competitive advantage in the market.',
                        ],
                        ['img' => 'https://addonblue.com/wp-content/uploads/2021/08/20943984-Converted-1024x1024.png', 'title' => 'Salesforce Managed Services', 'subTitle' => 'Omniforce provides Salesforce Managed Services to various customers. With a team of certified Salesforce Developers, they can help maintain and optimize your Salesforce implementation. Their expertise allows them to identify areas of improvement and provide recommendations to enhance your capabilities.'],
                        ['img' => 'https://www.fexle.com/images/new-salesforce-hire-img.webp', 'title' => 'Salesforce Consulting', 'subTitle' => 'Omniforce is a consulting firm to help organizations with their Salesforce implementations, customizations, and optimization. These consultants are  in Salesforce and can assist businesses in leveraging the to meet their specific needs and achieve their objectives.'],
                        ['img' => 'https://revsolutions.co/wp-content/uploads/2023/06/4202878-removebg-preview.png', 'title' => 'Salesforce Staff Augmentation', 'subTitle' => 'Omniforce provides Salesforce Staff  services that involve supplementing your existing Salesforce team with additional skilled resources from an external and quickly scaling up your team or acquiring specialized for a specific project or period. We have a pool of qualified who can join your team on a temporary basis.'],
                        ['img' => 'https://360degreecloud.com/wp-content/uploads/2021/09/banner-image.png', 'title' => 'Salesforce Integration Service', 'subTitle' => 'Our SFDC professionals worked on custom development and connecting Salesforce with other, systems, data sources to enable seamless data exchange and workflow automation. It involves integrating Salesforce with external systems to enhance its functionality, streamline business processes, and improve data consistency across different.'],
                        ['img' => 'https://static.wixstatic.com/media/25dfba_50ee2584517944ebbf6e4a4f709dff11~mv2.png/v1/fill/w_480,h_480,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/Pardot-Quick-Start.png', 'title' => 'Quick Start Packages', 'subTitle' => 'Omniforce provides Quick Start Packages small to mid-sized businesses or organizations new to Salesforce. It demonstrates their commitment to helping clients efficiently implement and adopt Salesforce. These packages can provide a structured and streamlined approach to getting started on Salesforce, ensuring that businesses can quickly leverage the platform\'s benefits.'],
                    ];
                @endphp

                @foreach ($offerCards as $card)
                    <x-frontend.cards.what-we-offer>
                        <x-slot:img>
                            @if (Str::contains($card['img'], 'https://'))
                                {{ $card['img'] }}
                            @else
                                {{ asset('assets/images/' . $card['img']) }}
                            @endif
                        </x-slot:img>
                        <x-slot:title>{{ $card['title'] }}</x-slot:title>
                        <x-slot:sub-title>{{ $card['subTitle'] }}</x-slot:sub-title>
                    </x-frontend.cards.what-we-offer>
                @endforeach

            </div>
        </div>
    </x-frontend.section.simple-gradiant>

    {{-- About Omniforce --}}
    {{-- <x-frontend.section.simple-gradiant>
        <div class="max-w-7xl mx-auto">
            <div class="grid grid-cols-1 gap-5">

                @php
                    $aboutCards = [
                        [
                            'img' => 'pad_pro.png',
                            'title' => 'About Omniforce Technologies',
                            'subTitle' => 'Omniforce is a Salesforce consulting company that specializes in helping
                        businesses manage customer interactions and data. Their range of professional services, including Salesforce implementation, digital, and legacy migration to Salesforce, demonstrates their expertise in guiding businesses throughout their entire operations.
                        <br>
                        With a certified technical team, Omniforce is well-equipped to engage
                        with businesses and provide optimal solutions for their digital transformation needs. Their focus on maximizing business value while reducing costs aligns with the goal of deriving tangible benefits from IT projects.
                        <br>
                        By emphasizing the importance of deriving business value, Omniforce recognizes that successful
                        IT projects should have a positive impact on the overall business operations. This customer-centric approach ensures that the implemented solutions align with the organization\'s goals and drive meaningful results.
                        <br>
                        Overall, with their Salesforce expertise, commitment to digital transformation, and focus on
                        delivering business value, Omniforce seems well-positioned to assist businesses in their journey towards optimizing their operations and achieving their desired outcomes.
                        ',
                        ],
                    ];
                @endphp

                @foreach ($aboutCards as $card)
                    <x-frontend.cards.what-we-offer>
                        <x-slot:img>
                            {{ asset('assets/images/' . $card['img']) }}
                        </x-slot:img>
                        <x-slot:title>{{ $card['title'] }}</x-slot:title>
                        <x-slot:sub-title>{!! $card['subTitle'] !!}</x-slot:sub-title>
                    </x-frontend.cards.what-we-offer>
                @endforeach

            </div>
        </div>
    </x-frontend.section.simple-gradiant> --}}

    {{-- Salesforce Solutions across Industries --}}
    <x-frontend.section.simple-gradiant>
        <div class="max-w-7xl mx-auto">
            <div class="mx-auto p-5">
                <div class="text-center py-8 mb-8">
                    <h2 class="text-3xl font-bold tracking-tight sm:text-4xl lg:text-5xl text-slate-900 dark:text-white">
                        Salesforce Solution
                        Across
                        Industries
                    </h2>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-5 p-2">
                    @php
                        $solutionCards = [
                            [
                                'icon' => 'bi-heart',
                                'title' => 'Healthcare',
                                'subTitle' => 'Streamline patient care, enhance operational efficiency,
                            and drive personalized experiences in the healthcare industry.',
                            ],
                            [
                                'icon' => 'bi-hospital',
                                'title' => 'Hospitality',
                                'subTitle' => 'Deliver exceptional guest experiences, 
                            operations, and drive customer loyalty in the industry.',
                            ],
                            ['icon' => 'bi-building', 'title' => 'State & Local Government', 'subTitle' => 'Empower agencies to deliver better citizen services, increase transparency, and improve overall efficiency.'],
                            ['icon' => 'bi-journal-bookmark-fill', 'title' => 'Education', 'subTitle' => 'Transform student, improve administrative processes, and foster in the education sector.'],
                            ['icon' => 'bi-currency-dollar', 'title' => 'Financial Services', 'subTitle' => 'Drive customer-centric experiences, increase operational efficiency, and ensure regulatory compliance in the financial services industry.'],
                            ['icon' => 'bi-shop', 'title' => 'Retail', 'subTitle' => 'Optimize omnichannel retail experiences, streamline operations, and foster customer loyalty in the retail industry.'],
                            ['icon' => 'bi-tools', 'title' => 'Manufacturing', 'subTitle' => 'Enhance manufacturing processes, improve supply chain visibility, and drive innovation in the manufacturing industry.'],
                            ['icon' => 'bi-lightning-charge', 'title' => 'Power and Utilities', 'subTitle' => 'Transform utility operations, enable renewable energy adoption, and improve customer engagement in the power and utilities sector.'],
                            ['icon' => 'bi-droplet', 'title' => 'Oil & Gas', 'subTitle' => 'Optimize exploration and production processes, ensure safety and compliance, and drive operational efficiency in the oil and gas industry.'],
                            ['icon' => 'bi-film', 'title' => 'Media & Entertainment', 'subTitle' => 'Deliver personalized content experiences, streamline operations, and drive audience engagement in the media and entertainment industry.'],
                            ['icon' => 'bi-laptop', 'title' => 'Technology', 'subTitle' => 'Drive digital transformation, enable innovation, and deliver seamless customer experiences in the technology industry.'],
                            ['icon' => 'bi-capsule', 'title' => 'Pharmaceutical', 'subTitle' => 'Accelerate drug development, ensure regulatory compliance, and improve patient outcomes in the pharmaceutical industry.'],
                            ['icon' => 'bi-chat-dots', 'title' => 'Communications', 'subTitle' => 'Enhance customer experiences, improve network management, and drive collaboration in the communications industry.'],
                            ['icon' => 'bi-speedometer2', 'title' => 'SCADA Control Systems', 'subTitle' => 'Enable real-time monitoring, optimize system performance, and ensure security in SCADA control systems.'],
                        ];
                    @endphp

                    @foreach ($solutionCards as $card)
                        <x-frontend.cards.solution>
                            <x-slot:icon>
                                {{ $card['icon'] }}
                            </x-slot:icon>
                            <x-slot:title>{{ $card['title'] }}</x-slot:title>
                            <x-slot:sub-title>{{ $card['subTitle'] }}</x-slot:sub-title>
                        </x-frontend.cards.solution>
                    @endforeach
                </div>
            </div>
        </div>
    </x-frontend.section.simple-gradiant>

    {{-- <div class="relative bg-white px-6 py-24 sm:py-32 lg:px-8">
        <div class="absolute inset-x-0 top-[-10rem] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[-20rem]"
            aria-hidden="true">
            <div class="relative left-1/2 -z-10 aspect-[1155/678] w-[36.125rem] max-w-none -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-40rem)] sm:w-[72.1875rem]"
                style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
            </div>
        </div>
        <div class="mx-auto max-w-2xl text-center">
            <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl lg:text-5xl">Contact sales</h2>
            <p class="mt-2 text-lg leading-8 text-gray-600">Aute magna irure deserunt veniam aliqua magna enim
                voluptate.
            </p>
        </div>
        <form action="#" method="POST" class="mx-auto mt-16 max-w-xl sm:mt-20">
            <div class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2">
                <div>
                    <label for="first-name" class="block text-sm font-semibold leading-6 text-gray-900">First
                        name</label>
                    <div class="mt-2.5">
                        <input type="text" name="first-name" id="first-name" autocomplete="given-name"
                            class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>
                <div>
                    <label for="last-name" class="block text-sm font-semibold leading-6 text-gray-900">Last name</label>
                    <div class="mt-2.5">
                        <input type="text" name="last-name" id="last-name" autocomplete="family-name"
                            class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>
                <div class="sm:col-span-2">
                    <label for="company" class="block text-sm font-semibold leading-6 text-gray-900">Company</label>
                    <div class="mt-2.5">
                        <input type="text" name="company" id="company" autocomplete="organization"
                            class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>
                <div class="sm:col-span-2">
                    <label for="email" class="block text-sm font-semibold leading-6 text-gray-900">Email</label>
                    <div class="mt-2.5">
                        <input type="email" name="email" id="email" autocomplete="email"
                            class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>
                <div class="sm:col-span-2">
                    <label for="phone-number" class="block text-sm font-semibold leading-6 text-gray-900">Phone
                        number</label>
                    <div class="relative mt-2.5">
                        <div class="absolute inset-y-0 left-0 flex items-center">
                            <label for="country" class="sr-only">Country</label>
                            <select id="country" name="country"
                                class="h-full rounded-md border-0 bg-transparent bg-none py-0 pl-4 pr-9 text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm">
                                <option>US</option>
                                <option>CA</option>
                                <option>EU</option>
                            </select>
                            <svg class="pointer-events-none absolute right-3 top-0 h-full w-5 text-gray-400"
                                viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                        <input type="tel" name="phone-number" id="phone-number" autocomplete="tel"
                            class="block w-full rounded-md border-0 px-3.5 py-2 pl-20 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>
                <div class="sm:col-span-2">
                    <label for="message" class="block text-sm font-semibold leading-6 text-gray-900">Message</label>
                    <div class="mt-2.5">
                        <textarea name="message" id="message" rows="4"
                            class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
                    </div>
                </div>
                <div class="flex gap-x-4 sm:col-span-2">
                    <div class="flex h-6 items-center">
                        <!-- Enabled: "bg-indigo-600", Not Enabled: "bg-gray-200" -->
                        <button type="button"
                            class="bg-gray-200 flex w-8 flex-none cursor-pointer rounded-full p-px ring-1 ring-inset ring-gray-900/5 transition-colors duration-200 ease-in-out focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"
                            role="switch" aria-checked="false" aria-labelledby="switch-1-label">
                            <span class="sr-only">Agree to policies</span>
                            <!-- Enabled: "translate-x-3.5", Not Enabled: "translate-x-0" -->
                            <span aria-hidden="true"
                                class="translate-x-0 h-4 w-4 transform rounded-full bg-white shadow-sm ring-1 ring-gray-900/5 transition duration-200 ease-in-out"></span>
                        </button>
                    </div>
                    <label class="text-sm leading-6 text-gray-600" id="switch-1-label">
                        By selecting this, you agree to our
                        <a href="#" class="font-semibold text-indigo-600">privacy&nbsp;policy</a>.
                    </label>
                </div>
            </div>
            <div class="mt-10">
                <button type="submit"
                    class="block w-full rounded-md bg-indigo-600 px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Let's
                    talk</button>
            </div>
        </form>
    </div> --}}

    {{-- <section class="get-in-touch py-5">
        <div class="container py-4">
            <div class="row g-4">
                <div class="col-lg-8 col-sm-6 col-12">
                    <div class="heading text-center text-sm-start">
                        <h2 class="fw-bold display-3 text-secondary-darker">Get In Touch</h2>
                        <p class="fw-light fs-4 text-secondary-dark">For inquiries, please contact us:</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-12">
                    <div
                        class="contact-info h-100 d-flex align-items-center justify-content-sm-end justify-content-center">
                        <a href="tel:01204566947" class="btn btn-outline-secondary btn-lg rounded-pill"><i
                                class="bi bi-telephone-fill"></i>
                            01204566947</a>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <x-frontend.section.simple-gradiant>
        <div class="mx-auto max-w-7xl">
            <div
                class="relative isolate overflow-hidden bg-gray-900 px-6 pt-16 shadow-2xl rounded-3xl sm:px-16 md:pt-24 lg:flex lg:items-center lg:gap-x-10 lg:px-16 xl:gap-x-20 xl-px-24 lg:pt-0">
                <svg viewBox="0 0 1024 1024"
                    class="absolute left-1/2 top-1/2 -z-10 h-[64rem] w-[64rem] -translate-y-1/2 [mask-image:radial-gradient(closest-side,white,transparent)] sm:left-full sm:-ml-80 lg:left-1/2 lg:ml-0 lg:-translate-x-1/2 lg:translate-y-0"
                    aria-hidden="true">
                    <circle cx="512" cy="512" r="512"
                        fill="url(#759c1415-0410-454c-8f7c-9a820de03641)" fill-opacity="0.7" />
                    <defs>
                        <radialGradient id="759c1415-0410-454c-8f7c-9a820de03641">
                            <stop stop-color="#7775D6" />
                            <stop offset="1" stop-color="#E935C1" />
                        </radialGradient>
                    </defs>
                </svg>
                <div class="mx-auto lg:max-w-lg xl:max-w-2xl text-center lg:mx-0  lg:py-32 lg:text-left">
                    <h2 class="text-3xl font-bold tracking-tight text-white sm:text-4xl lg:text-5xl">Our Working Process
                    </h2>
                    <p class="mt-6 text-lg leading-8 text-gray-300">Our working strategy is a truly an interactive
                        environment
                        with our clients. We understand the value of time and strive to take the burden on our shoulders to
                        the
                        work in real-time. The development of the project is considered complete when you are thoroughly
                        satisfied with the end result.</p>
                    <div class="mt-10 flex items-center justify-center gap-x-6 lg:justify-start">
                        <a href="#"
                            class="rounded-md bg-white px-3.5 py-2.5 text-sm font-semibold text-gray-900 shadow-sm hover:bg-gray-100 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white">Get
                            started</a>
                    </div>
                </div>

                <div class="hidden" id="tooltip-card">
                    @php
                        $solutionCards = [
                            [
                                'icon' => 'bi-earbuds',
                                'seriesnamediv' => 'Listening',
                                'title' => 'Listening',
                                'subTitle' => 'We listen to your needs and equirements to understand your goals and objectives.',
                            ],
                            ['icon' => 'bi-gear', 'seriesnamediv' => 'Configuring', 'title' => 'Configuring', 'subTitle' => 'We configure and customize the solution based on your specific needs and preferences.'],
                            ['icon' => 'bi-rocket', 'seriesnamediv' => 'Launching', 'title' => 'Launching', 'subTitle' => 'We ensure a smooth launch of the solution and provide necessary support during the process.'],
                            ['icon' => 'bi-headphones', 'seriesnamediv' => 'Support', 'title' => 'Support', 'subTitle' => 'We offer ongoing support and assistance to ensure the continued success of the solution.'],
                        ];
                    @endphp

                    @foreach ($solutionCards as $card)
                        <x-frontend.cards.solution seriesnamediv="{{ $card['seriesnamediv'] }}">
                            <x-slot:icon>
                                {{ $card['icon'] }}
                            </x-slot:icon>
                            <x-slot:title>{{ $card['title'] }}</x-slot:title>
                            <x-slot:sub-title>{{ $card['subTitle'] }}</x-slot:sub-title>
                        </x-frontend.cards.solution>
                    @endforeach

                </div>

                <div class="relative mt-16 w-full h-fit lg:mt-8 lg:justify-end">
                    <div class="px-2 py-5 rounded-md bg-white/5 ring-1 ring-white/10" id="pie-chart"></div>
                </div>
            </div>
        </div>
    </x-frontend.section.simple-gradiant>


    {{-- Salesforce Working Process --}}

    <x-frontend.section.simple-gradiant id="hire-our-developer-section">
        <div class="max-w-7xl mx-auto">
            <div class="mx-auto p-5">
                <div class="text-center py-8 mb-8">
                    <h2
                        class="text-3xl font-bold tracking-tight sm:text-4xl lg:text-5xl text-slate-900 dark:text-white mb-5">
                        Hire Our
                        Developer</h2>
                    <p class="text-slate-700 dark:text-gray-400 font-base">
                        Hire our industry experts at an affordable price
                    </p>
                </div>

                @php
                    $solutionCards = [
                        [
                            'icon' => 'bi-earbuds',
                            'title' => 'Experienced and skilled developers',
                            'subTitle' => '',
                        ],
                        ['icon' => 'bi-gear', 'title' => 'Cutting-edge technologies and tools', 'subTitle' => ''],
                        ['icon' => 'bi-rocket', 'title' => 'Rigorous on and off job trainings', 'subTitle' => ''],
                        ['icon' => 'bi-headphones', 'title' => 'Flexible hiring options', 'subTitle' => ''],
                        ['icon' => 'bi-headphones', 'title' => 'Dedicated support and communication hiring options', 'subTitle' => ''],
                        ['icon' => 'bi-headphones', 'title' => 'On-time project delivery', 'subTitle' => ''],
                        ['icon' => 'bi-headphones', 'title' => 'Certifications and courses', 'subTitle' => ''],
                    ];
                @endphp

                <div class="container">
                    <div class="flex flex-wrap-reverse items-center content-between text-lg">
                        <div class="w-full md:w-1/2 p-2">
                            <ul class="list-unstyled tracking-wide space-y-1 md:space-y-3">
                                @foreach ($solutionCards as $card)
                                    <li><i class="bi bi-check-circle"></i> {{ $card['title'] }}</li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="w-full md:w-1/2 p-2 flex justify-center md:justify-end items-center">
                            <div class="h-80">
                                <img src="https://wp.salesforce.com/en-us/wp-content/uploads/sites/4/2023/08/marquee-contact-center.webp?w=1024"
                                    class="h-full w-full object-contain drop-shadow-lg" alt="Hire Our Developer Image">
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </x-frontend.section.simple-gradiant>

    {{-- Statistics Section --}}
    <x-frontend.section.simple-gradiant class="dark:bg-gray-900">
        <div class="max-w-7xl mx-auto">
            <div class="mx-auto p-5">
                <div class="text-center py-8 mb-8">
                    <h2 class="text-3xl font-bold tracking-tight sm:text-4xl lg:text-5xl text-slate-900 dark:text-white">
                        Statistics</h2>
                    {{-- <p class="text-slate-700 dark:text-gray-400 font-base">
                        Hire our industry experts at an affordable price
                    </p> --}}
                </div>

                <div
                    class="w-full bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <div class="p-4 bg-white rounded-lg md:p-8 dark:bg-gray-800">
                        <dl
                            class="grid max-w-screen-xl grid-cols-2 gap-8 p-4 mx-auto text-gray-900 sm:grid-cols-3 xl:grid-cols-6 dark:text-white sm:p-8 text-center">
                            <div class="flex flex-col items-center justify-center">
                                <dt class="mb-2 text-3xl font-extrabold">73M+</dt>
                                <dd class="text-gray-500 dark:text-gray-400">Developers</dd>
                            </div>
                            <div class="flex flex-col items-center justify-center">
                                <dt class="mb-2 text-3xl font-extrabold">100M+</dt>
                                <dd class="text-gray-500 dark:text-gray-400">Public repositories</dd>
                            </div>
                            <div class="flex flex-col items-center justify-center">
                                <dt class="mb-2 text-3xl font-extrabold">1000s</dt>
                                <dd class="text-gray-500 dark:text-gray-400">Open source projects</dd>
                            </div>
                            <div class="flex flex-col items-center justify-center">
                                <dt class="mb-2 text-3xl font-extrabold">1B+</dt>
                                <dd class="text-gray-500 dark:text-gray-400">Contributors</dd>
                            </div>
                            <div class="flex flex-col items-center justify-center">
                                <dt class="mb-2 text-3xl font-extrabold">90+</dt>
                                <dd class="text-gray-500 dark:text-gray-400">Top Forbes companies</dd>
                            </div>
                            <div class="flex flex-col items-center justify-center">
                                <dt class="mb-2 text-3xl font-extrabold">4M+</dt>
                                <dd class="text-gray-500 dark:text-gray-400">Organizations</dd>
                            </div>
                        </dl>
                    </div>

                </div>

            </div>
        </div>

    </x-frontend.section.simple-gradiant>

    {{-- Testimonial Cards --}}
    <x-frontend.section.simple-gradiant>
        <div class="max-w-7xl mx-auto">
            <div class="mx-auto p-5">
                <div class="text-center py-8 mb-8">
                    <h2
                        class="text-3xl font-bold tracking-tight sm:text-4xl lg:text-5xl text-slate-900 dark:text-white mb-5">
                        Hear It From Our Clients</h2>
                    <p class="text-slate-700 dark:text-gray-400 font-base">
                        Let's see what our customers are saying about their experiences.
                    </p>
                </div>

                <div
                    class="grid mb-8 border border-gray-200 rounded-lg shadow-sm dark:border-gray-700 md:mb-12 md:grid-cols-2">
                    <figure
                        class="flex flex-col items-center justify-center p-8 text-center bg-white border-b border-gray-200 rounded-t-lg md:rounded-t-none md:rounded-tl-lg md:border-r dark:bg-gray-800 dark:border-gray-700">
                        <blockquote class="max-w-2xl mx-auto mb-4 text-gray-500 lg:mb-8 dark:text-gray-400">
                            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Very easy this was to integrate
                            </h3>
                            <p class="my-4">If you care for your time, I hands down would go with this."</p>
                        </blockquote>
                        <figcaption class="flex items-center justify-center space-x-3">
                            <img class="rounded-full w-9 h-9"
                                src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/karen-nelson.png"
                                alt="profile picture">
                            <div class="space-y-0.5 font-medium dark:text-white text-left">
                                <div>Bonnie Green</div>
                                <div class="text-sm text-gray-500 dark:text-gray-400">Developer at Open AI</div>
                            </div>
                        </figcaption>
                    </figure>
                    <figure
                        class="flex flex-col items-center justify-center p-8 text-center bg-white border-b border-gray-200 rounded-tr-lg dark:bg-gray-800 dark:border-gray-700">
                        <blockquote class="max-w-2xl mx-auto mb-4 text-gray-500 lg:mb-8 dark:text-gray-400">
                            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Solid foundation for any
                                project</h3>
                            <p class="my-4">Designing with Figma components that can be easily translated to the utility
                                classes
                                of Tailwind CSS is a huge timesaver!"</p>
                        </blockquote>
                        <figcaption class="flex items-center justify-center space-x-3">
                            <img class="rounded-full w-9 h-9"
                                src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/roberta-casas.png"
                                alt="profile picture">
                            <div class="space-y-0.5 font-medium dark:text-white text-left">
                                <div>Roberta Casas</div>
                                <div class="text-sm text-gray-500 dark:text-gray-400">Lead designer at Dropbox</div>
                            </div>
                        </figcaption>
                    </figure>
                    <figure
                        class="flex flex-col items-center justify-center p-8 text-center bg-white border-b border-gray-200 rounded-bl-lg md:border-b-0 md:border-r dark:bg-gray-800 dark:border-gray-700">
                        <blockquote class="max-w-2xl mx-auto mb-4 text-gray-500 lg:mb-8 dark:text-gray-400">
                            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Mindblowing workflow</h3>
                            <p class="my-4">Aesthetically, the well designed components are beautiful and will
                                undoubtedly level
                                up your next application."</p>
                        </blockquote>
                        <figcaption class="flex items-center justify-center space-x-3">
                            <img class="rounded-full w-9 h-9"
                                src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/jese-leos.png"
                                alt="profile picture">
                            <div class="space-y-0.5 font-medium dark:text-white text-left">
                                <div>Jese Leos</div>
                                <div class="text-sm text-gray-500 dark:text-gray-400">Software Engineer at Facebook</div>
                            </div>
                        </figcaption>
                    </figure>
                    <figure
                        class="flex flex-col items-center justify-center p-8 text-center bg-white border-gray-200 rounded-b-lg md:rounded-br-lg dark:bg-gray-800 dark:border-gray-700">
                        <blockquote class="max-w-2xl mx-auto mb-4 text-gray-500 lg:mb-8 dark:text-gray-400">
                            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Efficient Collaborating</h3>
                            <p class="my-4">You have many examples that can be used to create a fast prototype for your
                                team."
                            </p>
                        </blockquote>
                        <figcaption class="flex items-center justify-center space-x-3">
                            <img class="rounded-full w-9 h-9"
                                src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/joseph-mcfall.png"
                                alt="profile picture">
                            <div class="space-y-0.5 font-medium dark:text-white text-left">
                                <div>Joseph McFall</div>
                                <div class="text-sm text-gray-500 dark:text-gray-400">CTO at Google</div>
                            </div>
                        </figcaption>
                    </figure>
                </div>

                <figure class="max-w-screen-md p-5">
                    <div class="flex items-center mb-4 text-yellow-300">
                        <svg class="w-5 h-5 mr-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 22 20">
                            <path
                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                        </svg>
                        <svg class="w-5 h-5 mr-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 22 20">
                            <path
                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                        </svg>
                        <svg class="w-5 h-5 mr-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 22 20">
                            <path
                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                        </svg>
                        <svg class="w-5 h-5 mr-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 22 20">
                            <path
                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                        </svg>
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 22 20">
                            <path
                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                        </svg>
                    </div>
                    <blockquote>
                        <p class="text-2xl font-semibold text-gray-900 dark:text-white">"Omniforce Technology delivers!
                            Their Salesforce expertise and tailored training programs have elevated our business to new
                            heights. Strategic, reliable, and highly recommended."</p>
                    </blockquote>
                    <figcaption class="flex items-center mt-6 space-x-3">
                        <img class="w-6 h-6 rounded-full"
                            src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/bonnie-green.png"
                            alt="profile picture">
                        <div class="flex items-center divide-x-2 divide-gray-300 dark:divide-gray-700">
                            <cite class="pr-3 font-medium text-gray-900 dark:text-white">Shivam</cite>
                            <cite class="pl-3 text-sm text-gray-500 dark:text-gray-400">Founder at Omniforce</cite>
                        </div>
                    </figcaption>
                </figure>

            </div>
        </div>

    </x-frontend.section.simple-gradiant>
@endsection

@push('script')
    {{-- <script type="module">
        import newCarousel from "{{ Vite::asset('resources/js/components/carousel.js') }}"
        const carousel = newCarousel._init();
        // starts or resumes the carousel cycling (automated sliding)
        carousel.cycle();
        // Trigger next() and prev() methods on the Carousel object.
        newCarousel.trigger.nextPrevBtnClick();
    </script> --}}
@endpush

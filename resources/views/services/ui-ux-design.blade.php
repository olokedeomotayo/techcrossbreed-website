@extends('layouts.app')

@section('title', 'UI/UX Design Services | User Experience & Interface Design | Techcrossbreed')

@section(
    'meta_description',
    'Techcrossbreed creates intuitive UI/UX designs for websites and digital products, combining user research, clear interfaces and engaging experiences that help businesses achieve their goals.'
)

@section('canonical', url('/services/ui-ux-design'))

@section(
    'og_title',
    'UI/UX Design Services | Techcrossbreed'
)

@section(
    'og_description',
    'User-focused UI/UX design for websites, web applications and digital products that make technology easier and more enjoyable to use.'
)

@section('og_url', url('/services/ui-ux-design'))

@section(
    'og_image_alt',
    'Techcrossbreed UI/UX design services'
)

@section(
    'twitter_title',
    'UI/UX Design Services | Techcrossbreed'
)

@section(
    'twitter_description',
    'Create better digital experiences with thoughtful UI/UX design for websites, applications and digital products.'
)

@section('content')

    {{-- ================================================================
         HERO
    ================================================================= --}}
    <section
        class="relative overflow-hidden bg-[#17121b]"
        aria-labelledby="uiux-heading"
    >

        <div
            aria-hidden="true"
            class="pointer-events-none absolute -right-40 -top-40 h-[520px] w-[520px] rounded-full bg-brand-purple/25 blur-[130px]"
        ></div>

        <div
            aria-hidden="true"
            class="pointer-events-none absolute -left-40 bottom-0 h-[420px] w-[420px] rounded-full bg-brand-red/15 blur-[120px]"
        ></div>


        <div class="relative mx-auto max-w-[1410px] px-6 py-20 sm:px-8 lg:px-10 lg:py-28">

            <div class="grid items-center gap-12 lg:grid-cols-[1.05fr_0.95fr] lg:gap-20">

                <div>

                    <div class="mb-6 flex items-center gap-4">

                        <span class="h-[4px] w-11 rounded-full bg-brand-red"></span>

                        <span class="text-[13px] font-bold uppercase tracking-[0.25em] text-[#c98bd0]">
                            UI/UX Design
                        </span>

                    </div>


                    <h1
                        id="uiux-heading"
                        class="max-w-3xl text-4xl font-extrabold tracking-tight text-white sm:text-5xl lg:text-6xl"
                    >
                        Digital experiences people understand and enjoy.
                    </h1>


                    <p class="mt-6 max-w-2xl text-base leading-7 text-white/60 sm:text-lg sm:leading-8">
                        We design intuitive interfaces and thoughtful user
                        experiences that make websites, applications and
                        digital products easier to use and more effective.
                    </p>


                    <div class="mt-9 flex flex-col gap-4 sm:flex-row">

                        <a
                            href="{{ url('/contact') }}"
                            class="group inline-flex items-center justify-center gap-3 rounded-full bg-brand-purple px-7 py-3.5 text-sm font-bold text-white shadow-xl shadow-brand-purple/20 transition duration-300 hover:-translate-y-1 hover:bg-brand-purple-dark"
                        >
                            Start a Design Project

                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke-width="2"
                                stroke="currentColor"
                                class="h-4 w-4 transition-transform group-hover:translate-x-1"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"
                                />
                            </svg>

                        </a>


                        <a
                            href="#uiux-services"
                            class="inline-flex items-center justify-center rounded-full border border-white/15 px-7 py-3.5 text-sm font-bold text-white transition hover:border-white/30 hover:bg-white/5"
                        >
                            Explore Our Design Services
                        </a>

                    </div>

                </div>


                {{-- Design visual --}}
                <div class="relative">

                    <div class="rounded-[34px] border border-white/10 bg-white/[0.04] p-5 shadow-2xl sm:p-7">

                        <div class="rounded-[26px] border border-white/10 bg-[#211a25] p-6 sm:p-8">

                            <div class="flex items-center justify-between">

                                <div>

                                    <p class="text-[10px] font-bold uppercase tracking-[0.22em] text-white/35">
                                        Experience Design
                                    </p>

                                    <p class="mt-2 text-xl font-bold text-white">
                                        User Interface
                                    </p>

                                </div>


                                <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-brand-purple/20 text-brand-purple">

                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke-width="1.6"
                                        stroke="currentColor"
                                        class="h-5 w-5"
                                    >
                                        <rect
                                            x="3.75"
                                            y="4.75"
                                            width="16.5"
                                            height="14.5"
                                            rx="2"
                                        />

                                        <path
                                            stroke-linecap="round"
                                            d="M7.5 8.5h9M7.5 12h5M7.5 15.5h7"
                                        />

                                    </svg>

                                </div>

                            </div>


                            <div class="mt-8 grid grid-cols-[0.7fr_1.3fr] gap-3">

                                <div class="space-y-3 rounded-2xl bg-white/[0.04] p-4">

                                    <div class="h-7 rounded-lg bg-brand-purple/30"></div>

                                    <div class="h-4 w-3/4 rounded bg-white/10"></div>

                                    <div class="h-4 w-1/2 rounded bg-white/10"></div>

                                    <div class="h-4 w-2/3 rounded bg-white/10"></div>

                                </div>


                                <div class="rounded-2xl bg-white/[0.04] p-4">

                                    <div class="h-24 rounded-xl bg-brand-purple/10"></div>

                                    <div class="mt-4 h-3 w-2/3 rounded bg-white/10"></div>

                                    <div class="mt-2 h-3 w-1/2 rounded bg-white/10"></div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>


    {{-- ================================================================
         INTRODUCTION
    ================================================================= --}}
    <section
        class="bg-white"
        aria-labelledby="uiux-intro-heading"
    >

        <div class="mx-auto max-w-[1200px] px-6 py-20 sm:px-8 lg:px-10 lg:py-28">

            <div class="grid gap-12 lg:grid-cols-[0.8fr_1.2fr] lg:gap-20">

                <div>

                    <div class="mb-5 flex items-center gap-4">

                        <span class="h-[4px] w-11 rounded-full bg-brand-red"></span>

                        <span class="text-[13px] font-bold uppercase tracking-[0.25em] text-brand-purple">
                            Design With Purpose
                        </span>

                    </div>


                    <h2
                        id="uiux-intro-heading"
                        class="text-3xl font-extrabold tracking-tight text-brand-dark sm:text-4xl"
                    >
                        Good design makes technology easier to use.
                    </h2>

                </div>


                <div class="space-y-5 text-base leading-8 text-brand-gray sm:text-lg">

                    <p>
                        UI and UX are more than colors, buttons and attractive
                        screens. Effective digital design helps users understand
                        where they are, what they can do and what to do next.
                    </p>

                    <p>
                        We combine user-centered thinking, information
                        architecture, interface design and visual consistency
                        to create digital experiences that feel clear and
                        purposeful.
                    </p>

                    <p>
                        Whether you're launching a new website, developing a
                        business application or improving an existing product,
                        we design around the people who will actually use it.
                    </p>

                </div>

            </div>

        </div>

    </section>


    {{-- ================================================================
         SERVICES
    ================================================================= --}}
    <section
        id="uiux-services"
        class="bg-brand-light"
        aria-labelledby="uiux-services-heading"
    >

        <div class="mx-auto max-w-[1200px] px-6 py-20 sm:px-8 lg:px-10 lg:py-28">

            <div class="mx-auto max-w-3xl text-center">

                <div class="mb-5 flex items-center justify-center gap-4">

                    <span class="h-[4px] w-11 rounded-full bg-brand-red"></span>

                    <span class="text-[13px] font-bold uppercase tracking-[0.25em] text-brand-purple">
                        Our Design Services
                    </span>

                    <span class="h-[4px] w-11 rounded-full bg-brand-red"></span>

                </div>


                <h2
                    id="uiux-services-heading"
                    class="text-3xl font-extrabold tracking-tight text-brand-dark sm:text-4xl"
                >
                    Design from idea to experience.
                </h2>

            </div>


            <div class="mt-14 grid gap-5 md:grid-cols-2 lg:grid-cols-3">


                @php
                    $designServices = [
                        [
                            'number' => '01',
                            'title' => 'UX Research',
                            'text' => 'Understand users, their needs, behaviors and the problems a digital product needs to solve.',
                            'color' => 'purple',
                        ],
                        [
                            'number' => '02',
                            'title' => 'Information Architecture',
                            'text' => 'Organize content, features and navigation so users can find what they need quickly.',
                            'color' => 'red',
                        ],
                        [
                            'number' => '03',
                            'title' => 'Wireframing',
                            'text' => 'Plan page and interface structures before moving into detailed visual design.',
                            'color' => 'purple',
                        ],
                        [
                            'number' => '04',
                            'title' => 'UI Design',
                            'text' => 'Create polished interfaces with clear visual hierarchy, consistency and strong usability.',
                            'color' => 'red',
                        ],
                        [
                            'number' => '05',
                            'title' => 'Design Systems',
                            'text' => 'Build reusable components and visual rules that keep digital products consistent and scalable.',
                            'color' => 'purple',
                        ],
                        [
                            'number' => '06',
                            'title' => 'UX Improvement',
                            'text' => 'Review existing digital experiences and identify opportunities to improve usability and engagement.',
                            'color' => 'red',
                        ],
                    ];
                @endphp


                @foreach ($designServices as $service)

                    <article class="rounded-[28px] border border-gray-200 bg-white p-7 shadow-sm sm:p-8">

                        <span
                            class="text-xs font-black {{ $service['color'] === 'purple' ? 'text-brand-purple' : 'text-brand-red' }}"
                        >
                            {{ $service['number'] }}
                        </span>


                        <h3 class="mt-5 text-xl font-bold text-brand-dark">
                            {{ $service['title'] }}
                        </h3>


                        <p class="mt-3 text-sm leading-7 text-brand-gray">
                            {{ $service['text'] }}
                        </p>

                    </article>

                @endforeach

            </div>

        </div>

    </section>

    {{-- ================================================================
     UI/UX DESIGN PRICING
================================================================= --}}
<section
    id="uiux-pricing"
    class="relative overflow-hidden bg-white"
    aria-labelledby="uiux-pricing-heading"
>

    <div class="mx-auto max-w-[1200px] px-6 py-14 sm:px-8 lg:px-10 lg:py-18">

        {{-- Section Heading --}}
        <div class="mx-auto max-w-3xl text-center">

            <div class="mb-4 flex items-center justify-center gap-4">

                <span class="h-[4px] w-10 rounded-full bg-brand-red"></span>

                <span class="text-[12px] font-bold uppercase tracking-[0.25em] text-brand-purple">
                    Design Packages
                </span>

                <span class="h-[4px] w-10 rounded-full bg-brand-red"></span>

            </div>


            <h2
                id="uiux-pricing-heading"
                class="text-3xl font-extrabold tracking-tight text-brand-dark sm:text-4xl"
            >
                Design packages for every stage of your product.
            </h2>


            <p class="mx-auto mt-3 max-w-2xl text-sm leading-6 text-brand-gray sm:text-base">
                Choose a focused design package or work with us on a
                custom experience tailored to your product and users.
            </p>

        </div>


        {{-- Pricing Cards --}}
        <div class="mt-9 grid gap-5 md:grid-cols-3">


            {{-- =========================================================
                 STARTER
            ========================================================== --}}
            <article
                class="flex flex-col rounded-[24px] border border-gray-200 bg-brand-light p-6"
            >

                <div class="flex-1">

                    <span class="text-[11px] font-black uppercase tracking-[0.18em] text-brand-purple">
                        Starter
                    </span>


                    <h3 class="mt-2 text-xl font-bold text-brand-dark">
                        Essential Design
                    </h3>


                    <p class="mt-2 text-sm leading-6 text-brand-gray">
                        A focused UI/UX package for businesses that need
                        a clear and professional digital interface.
                    </p>


                    <div class="mt-4">

                        <span class="text-[11px] font-semibold text-brand-gray">
                            Starting from
                        </span>


                        <div class="mt-0.5 text-3xl font-extrabold text-brand-dark">
                            ₦100,000
                        </div>

                    </div>


                    <ul class="mt-4 space-y-2 text-sm text-brand-gray">

                        <li class="flex gap-2">
                            <span class="font-bold text-brand-purple">✓</span>
                            Basic UX structure
                        </li>

                        <li class="flex gap-2">
                            <span class="font-bold text-brand-purple">✓</span>
                            Wireframes
                        </li>

                        <li class="flex gap-2">
                            <span class="font-bold text-brand-purple">✓</span>
                            UI design
                        </li>

                        <li class="flex gap-2">
                            <span class="font-bold text-brand-purple">✓</span>
                            Responsive layouts
                        </li>

                        <li class="flex gap-2">
                            <span class="font-bold text-brand-purple">✓</span>
                            Design handoff
                        </li>

                    </ul>

                </div>


                <a
                    href="#"
onclick="orderViaWhatsApp('Starter UI/UX Design Package', '₦100,000'); return false;"
                    class="mt-6 inline-flex items-center justify-center rounded-full border border-brand-purple px-5 py-3 text-sm font-bold text-brand-purple transition hover:bg-brand-purple hover:text-white"
                >
                    Choose Starter
                </a>

            </article>


            {{-- =========================================================
                 BUSINESS
            ========================================================== --}}
            <article
                class="relative flex flex-col rounded-[24px] border-2 border-brand-purple bg-[#17121b] p-6 shadow-xl shadow-brand-purple/10"
            >

                {{-- Recommended --}}
                <span
                    class="absolute -top-3 left-1/2 -translate-x-1/2 whitespace-nowrap rounded-full bg-brand-purple px-4 py-1 text-[10px] font-black uppercase tracking-[0.15em] text-white"
                >
                    Recommended
                </span>


                <div class="flex-1">

                    <span class="text-[11px] font-black uppercase tracking-[0.18em] text-[#c98bd0]">
                        Business
                    </span>


                    <h3 class="mt-2 text-xl font-bold text-white">
                        Complete UX/UI
                    </h3>


                    <p class="mt-2 text-sm leading-6 text-white/50">
                        A complete design package for websites,
                        applications and growing digital products.
                    </p>


                    <div class="mt-4">

                        <span class="text-[11px] font-semibold text-white/40">
                            Starting from
                        </span>


                        <div class="mt-0.5 text-3xl font-extrabold text-white">
                            ₦200,000
                        </div>

                    </div>


                    <ul class="mt-4 space-y-2 text-sm text-white/60">

                        <li class="flex gap-2">
                            <span class="font-bold text-brand-red">✓</span>
                            UX research & user flows
                        </li>

                        <li class="flex gap-2">
                            <span class="font-bold text-brand-red">✓</span>
                            Wireframes
                        </li>

                        <li class="flex gap-2">
                            <span class="font-bold text-brand-red">✓</span>
                            Complete UI design
                        </li>

                        <li class="flex gap-2">
                            <span class="font-bold text-brand-red">✓</span>
                            Responsive layouts
                        </li>

                        <li class="flex gap-2">
                            <span class="font-bold text-brand-red">✓</span>
                            Design system & handoff
                        </li>

                    </ul>

                </div>


                <a
                    href="#"
onclick="orderViaWhatsApp('Business UI/UX Design Package', '₦200,000'); return false;"
                    class="mt-6 inline-flex items-center justify-center rounded-full bg-brand-purple px-5 py-3 text-sm font-bold text-white transition hover:-translate-y-0.5 hover:bg-brand-purple-dark"
                >
                    Choose Business
                </a>

            </article>


            {{-- =========================================================
                 CUSTOM
            ========================================================== --}}
            <article
                class="flex flex-col rounded-[24px] border border-gray-200 bg-brand-light p-6"
            >

                <div class="flex-1">

                    <span class="text-[11px] font-black uppercase tracking-[0.18em] text-brand-red">
                        Custom
                    </span>


                    <h3 class="mt-2 text-xl font-bold text-brand-dark">
                        Tailored Experience
                    </h3>


                    <p class="mt-2 text-sm leading-6 text-brand-gray">
                        For complex products, large applications or
                        organizations requiring a deeper design process.
                    </p>


                    <div class="mt-4">

                        <span class="text-[11px] font-semibold text-brand-gray">
                            Pricing
                        </span>


                        <div class="mt-0.5 text-3xl font-extrabold text-brand-dark">
                            Let's Talk
                        </div>

                    </div>


                    <ul class="mt-4 space-y-2 text-sm text-brand-gray">

                        <li class="flex gap-2">
                            <span class="font-bold text-brand-red">✓</span>
                            Detailed UX research
                        </li>

                        <li class="flex gap-2">
                            <span class="font-bold text-brand-red">✓</span>
                            Complex user journeys
                        </li>

                        <li class="flex gap-2">
                            <span class="font-bold text-brand-red">✓</span>
                            Advanced design systems
                        </li>

                        <li class="flex gap-2">
                            <span class="font-bold text-brand-red">✓</span>
                            Prototyping & testing
                        </li>

                        <li class="flex gap-2">
                            <span class="font-bold text-brand-red">✓</span>
                            Development collaboration
                        </li>

                    </ul>

                </div>


                <a
                    href="#"
onclick="orderViaWhatsApp('Custom UI/UX Design Package'); return false;"
                    class="mt-6 inline-flex items-center justify-center rounded-full border border-brand-red px-5 py-3 text-sm font-bold text-brand-red transition hover:bg-brand-red hover:text-white"
                >
                    Discuss Your Project
                </a>

            </article>

        </div>


        {{-- Pricing Note --}}
        <p class="mt-6 text-center text-xs leading-5 text-brand-gray">
            Final pricing depends on the number of screens, product complexity,
            research requirements and the scope of the design work.
            Custom packages are available for larger or more complex products.
        </p>

    </div>


    {{-- ================================================================
         SECTION DIVIDER
    ================================================================= --}}
    <div
        class="mx-auto h-px max-w-[1100px] bg-gradient-to-r from-transparent via-brand-purple/25 to-transparent"
        aria-hidden="true"
    ></div>

</section>


    {{-- ================================================================
         DESIGN PRINCIPLES
    ================================================================= --}}
    <section
        class="bg-white"
        aria-labelledby="uiux-principles-heading"
    >

        <div class="mx-auto max-w-[1200px] px-6 py-20 sm:px-8 lg:px-10 lg:py-28">

            <div class="grid gap-12 lg:grid-cols-[0.8fr_1.2fr] lg:items-center lg:gap-20">

                <div>

                    <div class="mb-5 flex items-center gap-4">

                        <span class="h-[4px] w-11 rounded-full bg-brand-red"></span>

                        <span class="text-[13px] font-bold uppercase tracking-[0.25em] text-brand-purple">
                            Our Principles
                        </span>

                    </div>


                    <h2
                        id="uiux-principles-heading"
                        class="text-3xl font-extrabold tracking-tight text-brand-dark sm:text-4xl"
                    >
                        Design that balances people, business and technology.
                    </h2>


                    <p class="mt-5 text-base leading-7 text-brand-gray sm:text-lg">
                        Every interface decision should serve a purpose.
                    </p>

                </div>


                <div class="grid gap-4 sm:grid-cols-2">

                    <article class="rounded-2xl border border-gray-200 bg-brand-light p-6">

                        <h3 class="font-bold text-brand-dark">
                            Clarity
                        </h3>

                        <p class="mt-2 text-sm leading-6 text-brand-gray">
                            Users should quickly understand content, actions and navigation.
                        </p>

                    </article>


                    <article class="rounded-2xl border border-gray-200 bg-brand-light p-6">

                        <h3 class="font-bold text-brand-dark">
                            Simplicity
                        </h3>

                        <p class="mt-2 text-sm leading-6 text-brand-gray">
                            Remove unnecessary complexity and focus attention on what matters.
                        </p>

                    </article>


                    <article class="rounded-2xl border border-gray-200 bg-brand-light p-6">

                        <h3 class="font-bold text-brand-dark">
                            Consistency
                        </h3>

                        <p class="mt-2 text-sm leading-6 text-brand-gray">
                            Consistent patterns make digital products easier to learn and use.
                        </p>

                    </article>


                    <article class="rounded-2xl border border-gray-200 bg-brand-light p-6">

                        <h3 class="font-bold text-brand-dark">
                            Accessibility
                        </h3>

                        <p class="mt-2 text-sm leading-6 text-brand-gray">
                            We consider different users and devices when designing experiences.
                        </p>

                    </article>

                </div>

            </div>

        </div>

    </section>


    {{-- ================================================================
         PROCESS
    ================================================================= --}}
    <section
        class="bg-[#17121b]"
        aria-labelledby="uiux-process-heading"
    >

        <div class="mx-auto max-w-[1200px] px-6 py-20 sm:px-8 lg:px-10 lg:py-28">

            <div class="mx-auto max-w-3xl text-center">

                <div class="mb-5 flex items-center justify-center gap-4">

                    <span class="h-[4px] w-11 rounded-full bg-brand-red"></span>

                    <span class="text-[13px] font-bold uppercase tracking-[0.25em] text-[#c98bd0]">
                        Our Process
                    </span>

                    <span class="h-[4px] w-11 rounded-full bg-brand-red"></span>

                </div>


                <h2
                    id="uiux-process-heading"
                    class="text-3xl font-extrabold tracking-tight text-white sm:text-4xl"
                >
                    From user needs to polished experience.
                </h2>

            </div>


            <div class="mt-14 grid gap-5 md:grid-cols-2 lg:grid-cols-4">

                @php
                    $steps = [
                        ['number' => '01', 'title' => 'Discover', 'text' => 'Understand users, business objectives and the product context.'],
                        ['number' => '02', 'title' => 'Structure', 'text' => 'Organize content, flows and functionality into a clear experience.'],
                        ['number' => '03', 'title' => 'Design', 'text' => 'Create interfaces, components and visual experiences around the structure.'],
                        ['number' => '04', 'title' => 'Refine', 'text' => 'Review the experience, identify improvements and prepare designs for development.'],
                    ];
                @endphp


                @foreach ($steps as $step)

                    <article class="rounded-[26px] border border-white/10 bg-white/[0.04] p-7">

                        <span class="text-xs font-black {{ $loop->even ? 'text-brand-red' : 'text-brand-purple' }}">
                            {{ $step['number'] }}
                        </span>


                        <h3 class="mt-5 text-lg font-bold text-white">
                            {{ $step['title'] }}
                        </h3>


                        <p class="mt-2 text-sm leading-6 text-white/40">
                            {{ $step['text'] }}
                        </p>

                    </article>

                @endforeach

            </div>

        </div>

    </section>


    {{-- ================================================================
         FAQ
    ================================================================= --}}
    <section
        class="bg-brand-light"
        aria-labelledby="uiux-faq-heading"
    >

        <div class="mx-auto max-w-[1000px] px-6 py-20 sm:px-8 lg:px-10 lg:py-28">

            <div class="mx-auto max-w-3xl text-center">

                <div class="mb-5 flex items-center justify-center gap-4">

                    <span class="h-[4px] w-11 rounded-full bg-brand-red"></span>

                    <span class="text-[13px] font-bold uppercase tracking-[0.25em] text-brand-purple">
                        Frequently Asked Questions
                    </span>

                    <span class="h-[4px] w-11 rounded-full bg-brand-red"></span>

                </div>


                <h2
                    id="uiux-faq-heading"
                    class="text-3xl font-extrabold tracking-tight text-brand-dark sm:text-4xl"
                >
                    UI/UX design questions.
                </h2>

            </div>


            <div class="mt-12 space-y-4">

                <details class="group rounded-2xl border border-gray-200 bg-white shadow-sm">

                    <summary class="flex cursor-pointer list-none items-center justify-between gap-6 p-6 font-bold text-brand-dark sm:p-7">

                        <span>
                            What is the difference between UI and UX design?
                        </span>

                        <span class="flex h-9 w-9 shrink-0 items-center justify-center rounded-full bg-brand-purple-light text-brand-purple transition group-open:rotate-45">
                            +
                        </span>

                    </summary>


                    <div class="px-6 pb-6 sm:px-7 sm:pb-7">

                        <p class="text-sm leading-7 text-brand-gray">
                            UX focuses on the overall experience and how users
                            interact with a product, while UI focuses more on
                            the visual interface, components and presentation.
                            They work together to create effective digital products.
                        </p>

                    </div>

                </details>


                <details class="group rounded-2xl border border-gray-200 bg-white shadow-sm">

                    <summary class="flex cursor-pointer list-none items-center justify-between gap-6 p-6 font-bold text-brand-dark sm:p-7">

                        <span>
                            Do you design websites as well as applications?
                        </span>

                        <span class="flex h-9 w-9 shrink-0 items-center justify-center rounded-full bg-brand-red-light text-brand-red transition group-open:rotate-45">
                            +
                        </span>

                    </summary>


                    <div class="px-6 pb-6 sm:px-7 sm:pb-7">

                        <p class="text-sm leading-7 text-brand-gray">
                            Yes. We can design experiences for business
                            websites, web applications, internal systems and
                            other digital products.
                        </p>

                    </div>

                </details>


                <details class="group rounded-2xl border border-gray-200 bg-white shadow-sm">

                    <summary class="flex cursor-pointer list-none items-center justify-between gap-6 p-6 font-bold text-brand-dark sm:p-7">

                        <span>
                            Can you redesign an existing digital product?
                        </span>

                        <span class="flex h-9 w-9 shrink-0 items-center justify-center rounded-full bg-brand-purple-light text-brand-purple transition group-open:rotate-45">
                            +
                        </span>

                    </summary>


                    <div class="px-6 pb-6 sm:px-7 sm:pb-7">

                        <p class="text-sm leading-7 text-brand-gray">
                            Yes. We can review an existing interface and
                            experience, identify usability issues and redesign
                            areas that need improvement.
                        </p>

                    </div>

                </details>


                <details class="group rounded-2xl border border-gray-200 bg-white shadow-sm">

                    <summary class="flex cursor-pointer list-none items-center justify-between gap-6 p-6 font-bold text-brand-dark sm:p-7">

                        <span>
                            Can UI/UX design be integrated with development?
                        </span>

                        <span class="flex h-9 w-9 shrink-0 items-center justify-center rounded-full bg-brand-red-light text-brand-red transition group-open:rotate-45">
                            +
                        </span>

                    </summary>


                    <div class="px-6 pb-6 sm:px-7 sm:pb-7">

                        <p class="text-sm leading-7 text-brand-gray">
                            Yes. Design and development can be planned together
                            so the final product maintains consistency between
                            the intended experience and the implemented interface.
                        </p>

                    </div>

                </details>

            </div>

        </div>

    </section>


    {{-- ================================================================
         RELATED SERVICES
    ================================================================= --}}
    <section
        class="bg-white"
        aria-labelledby="uiux-related-heading"
    >

        <div class="mx-auto max-w-[1100px] px-6 py-20 text-center sm:px-8 lg:px-10 lg:py-24">

            <p class="text-xs font-bold uppercase tracking-[0.22em] text-brand-purple">
                Related Services
            </p>


            <h2
                id="uiux-related-heading"
                class="mt-3 text-3xl font-extrabold tracking-tight text-brand-dark sm:text-4xl"
            >
                Design connected to development and growth.
            </h2>


            <div class="mt-9 flex flex-wrap justify-center gap-3">

                <a
                    href="{{ url('/services/website-development') }}"
                    class="rounded-full border border-gray-200 px-5 py-3 text-sm font-bold text-brand-dark transition hover:border-brand-purple hover:text-brand-purple"
                >
                    Website Development
                </a>

                <a
                    href="{{ url('/services/software-development') }}"
                    class="rounded-full border border-gray-200 px-5 py-3 text-sm font-bold text-brand-dark transition hover:border-brand-purple hover:text-brand-purple"
                >
                    Software Development
                </a>

                <a
                    href="{{ url('/services/seo-digital-growth') }}"
                    class="rounded-full border border-gray-200 px-5 py-3 text-sm font-bold text-brand-dark transition hover:border-brand-purple hover:text-brand-purple"
                >
                    SEO & Digital Growth
                </a>

            </div>

        </div>

    </section>


    {{-- ================================================================
         CTA
    ================================================================= --}}
    <section
        class="relative overflow-hidden bg-[#17121b]"
        aria-labelledby="uiux-cta-heading"
    >

        <div class="relative mx-auto max-w-[1000px] px-6 py-20 text-center sm:px-8 lg:px-10 lg:py-28">

            <div class="mb-5 flex items-center justify-center gap-4">

                <span class="h-[4px] w-10 rounded-full bg-brand-red"></span>

                <span class="text-[12px] font-bold uppercase tracking-[0.28em] text-[#c98bd0]">
                    Better Digital Experiences
                </span>

                <span class="h-[4px] w-10 rounded-full bg-brand-red"></span>

            </div>


            <h2
                id="uiux-cta-heading"
                class="text-3xl font-extrabold tracking-tight text-white sm:text-4xl lg:text-5xl"
            >
                Ready to make your digital experience better?
            </h2>


            <p class="mx-auto mt-5 max-w-2xl text-base leading-7 text-white/50 sm:text-lg">
                Let's design an experience that makes sense for your users
                and creates value for your business.
            </p>


            <a
                href="#"
onclick="orderViaWhatsApp('UI/UX Design'); return false;"
                class="mt-9 inline-flex items-center gap-3 rounded-full bg-brand-purple px-7 py-4 text-sm font-bold text-white shadow-xl shadow-brand-purple/20 transition hover:-translate-y-1 hover:bg-brand-purple-dark"
            >
                Start a Design Project

                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="2"
                    stroke="currentColor"
                    class="h-4 w-4"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"
                    />
                </svg>

            </a>

        </div>

    </section>

@endsection
@extends('layouts.app')

@section('title', 'Our Projects | Websites, Software & Digital Solutions | Techcrossbreed')

@section(
    'meta_description',
    'Explore Techcrossbreed projects including business websites, custom software, HR systems, digital platforms and data solutions built for organizations.'
)

@section('canonical', url('/projects'))

@section(
    'og_title',
    'Our Projects | Techcrossbreed'
)

@section(
    'og_description',
    'Explore websites, software systems and digital solutions designed and developed by Techcrossbreed.'
)

@section('og_url', url('/projects'))

@section(
    'twitter_title',
    'Our Projects | Techcrossbreed'
)

@section(
    'twitter_description',
    'Explore Techcrossbreed projects across website development, software, digital platforms and business technology.'
)

@section('content')

    {{-- ================================================================
         HERO
    ================================================================= --}}
    <section
        class="relative overflow-hidden bg-[#17121b]"
        aria-labelledby="projects-heading"
    >

        <div
            aria-hidden="true"
            class="pointer-events-none absolute -right-40 -top-40 h-[520px] w-[520px] rounded-full bg-brand-purple/25 blur-[130px]"
        ></div>

        <div
            aria-hidden="true"
            class="pointer-events-none absolute -left-40 bottom-0 h-[420px] w-[420px] rounded-full bg-brand-red/15 blur-[120px]"
        ></div>


        <div class="relative mx-auto max-w-[1200px] px-6 py-20 text-center sm:px-8 lg:px-10 lg:py-28">

            <div class="mb-6 flex items-center justify-center gap-4">

                <span class="h-[4px] w-11 rounded-full bg-brand-red"></span>

                <span class="text-[13px] font-bold uppercase tracking-[0.25em] text-[#c98bd0]">
                    Our Projects
                </span>

                <span class="h-[4px] w-11 rounded-full bg-brand-red"></span>

            </div>


            <h1
                id="projects-heading"
                class="mx-auto max-w-4xl text-4xl font-extrabold tracking-tight text-white sm:text-5xl lg:text-6xl"
            >
                Digital solutions built to solve real business problems.
            </h1>


            <p class="mx-auto mt-6 max-w-2xl text-base leading-7 text-white/60 sm:text-lg sm:leading-8">
                Explore selected websites, software systems and digital
                solutions we've designed and developed for organizations
                looking to work smarter and grow digitally.
            </p>

        </div>

    </section>


    {{-- ================================================================
         INTRODUCTION
    ================================================================= --}}
    <section
        class="bg-white"
        aria-labelledby="projects-intro-heading"
    >

        <div class="mx-auto max-w-[1200px] px-6 py-20 sm:px-8 lg:px-10 lg:py-24">

            <div class="grid gap-12 lg:grid-cols-[0.75fr_1.25fr] lg:gap-20">

                <div>

                    <div class="mb-5 flex items-center gap-4">

                        <span class="h-[4px] w-11 rounded-full bg-brand-red"></span>

                        <span class="text-[13px] font-bold uppercase tracking-[0.25em] text-brand-purple">
                            Selected Work
                        </span>

                    </div>


                    <h2
                        id="projects-intro-heading"
                        class="text-3xl font-extrabold tracking-tight text-brand-dark sm:text-4xl"
                    >
                        Technology with a purpose.
                    </h2>

                </div>


                <div class="space-y-5 text-base leading-8 text-brand-gray sm:text-lg">

                    <p>
                        Every project starts with a problem that needs to be
                        solved, an opportunity that needs to be explored or a
                        process that needs to work better.
                    </p>

                    <p>
                        Our work combines strategy, design, development, data
                        and technology to create practical digital solutions
                        for businesses and organizations.
                    </p>

                </div>

            </div>

        </div>

    </section>


    {{-- ================================================================
         PROJECTS
    ================================================================= --}}
    <section
        class="bg-brand-light"
        aria-labelledby="projects-grid-heading"
    >

        <div class="mx-auto max-w-[1200px] px-6 py-20 sm:px-8 lg:px-10 lg:py-28">

            <div class="flex flex-col gap-5 sm:flex-row sm:items-end sm:justify-between">

                <div>

                    <div class="mb-4 flex items-center gap-4">

                        <span class="h-[4px] w-11 rounded-full bg-brand-red"></span>

                        <span class="text-[13px] font-bold uppercase tracking-[0.25em] text-brand-purple">
                            Projects
                        </span>

                    </div>


                    <h2
                        id="projects-grid-heading"
                        class="text-3xl font-extrabold tracking-tight text-brand-dark sm:text-4xl"
                    >
                        Selected projects.
                    </h2>

                </div>


                <p class="max-w-md text-sm leading-6 text-brand-gray">
                    A selection of digital products and business technology
                    solutions developed by Techcrossbreed.
                </p>

            </div>


            <div class="mt-12 grid gap-6 md:grid-cols-2">


                {{-- ========================================================
                     PROJECT 01
                ========================================================= --}}
                <article
                    class="group overflow-hidden rounded-[30px] border border-gray-200 bg-white shadow-sm transition duration-300 hover:-translate-y-1 hover:shadow-xl"
                >

                    <a
                        href="{{ url('/projects/apmdc-corporate-website') }}"
                        class="block"
                    >

                        <div class="relative aspect-[16/9] overflow-hidden bg-[#211a25]">

                            {{-- Replace with actual project image later --}}
                            <div class="absolute inset-0 bg-gradient-to-br from-brand-purple/30 via-[#211a25] to-brand-red/20"></div>


                            <div class="absolute inset-0 flex items-center justify-center p-10">

                                <div class="w-full rounded-2xl border border-white/10 bg-white/[0.06] p-5 shadow-2xl backdrop-blur">

                                    <div class="flex items-center justify-between">

                                        <div class="h-3 w-24 rounded-full bg-white/20"></div>

                                        <div class="flex gap-1">

                                            <span class="h-2 w-2 rounded-full bg-white/20"></span>
                                            <span class="h-2 w-2 rounded-full bg-white/20"></span>
                                            <span class="h-2 w-2 rounded-full bg-white/20"></span>

                                        </div>

                                    </div>


                                    <div class="mt-7 grid grid-cols-3 gap-3">

                                        <div class="col-span-2 h-24 rounded-xl bg-brand-purple/20"></div>

                                        <div class="h-24 rounded-xl bg-brand-red/15"></div>

                                    </div>

                                </div>

                            </div>


                            <div class="absolute left-5 top-5">

                                <span class="rounded-full bg-white/10 px-3 py-1.5 text-[10px] font-bold uppercase tracking-wider text-white backdrop-blur">
                                    Website Development
                                </span>

                            </div>

                        </div>


                        <div class="p-7 sm:p-8">

                            <p class="text-xs font-bold uppercase tracking-[0.18em] text-brand-purple">
                                APMDC
                            </p>


                            <h3 class="mt-3 text-2xl font-bold text-brand-dark">
                                APMDC Corporate Website & Web Platform
                            </h3>


                            <p class="mt-3 text-sm leading-7 text-brand-gray">
                                A modern corporate website and digital platform
                                designed to strengthen online presence,
                                communicate services and support digital
                                engagement.
                            </p>


                            <span class="mt-6 inline-flex items-center gap-2 text-sm font-bold text-brand-purple">

                                View Project

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

                            </span>

                        </div>

                    </a>

                </article>


                {{-- ========================================================
                     PROJECT 02
                ========================================================= --}}
                <article
                    class="group overflow-hidden rounded-[30px] border border-gray-200 bg-white shadow-sm transition duration-300 hover:-translate-y-1 hover:shadow-xl"
                >

                    <a
                        href="{{ url('/projects/apmdc-hrms') }}"
                        class="block"
                    >

                        <div class="relative aspect-[16/9] overflow-hidden bg-[#211a25]">

                            <div class="absolute inset-0 bg-gradient-to-br from-brand-red/20 via-[#211a25] to-brand-purple/25"></div>


                            <div class="absolute inset-0 flex items-center justify-center p-10">

                                <div class="w-full rounded-2xl border border-white/10 bg-white/[0.06] p-5 shadow-2xl backdrop-blur">

                                    <div class="flex gap-3">

                                        <div class="h-28 w-1/4 rounded-xl bg-white/[0.05]"></div>

                                        <div class="flex-1">

                                            <div class="h-7 rounded-xl bg-brand-purple/20"></div>

                                            <div class="mt-3 grid grid-cols-3 gap-2">

                                                <div class="h-16 rounded-xl bg-white/[0.05]"></div>
                                                <div class="h-16 rounded-xl bg-white/[0.05]"></div>
                                                <div class="h-16 rounded-xl bg-brand-red/10"></div>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>


                            <div class="absolute left-5 top-5">

                                <span class="rounded-full bg-white/10 px-3 py-1.5 text-[10px] font-bold uppercase tracking-wider text-white backdrop-blur">
                                    Custom Software
                                </span>

                            </div>

                        </div>


                        <div class="p-7 sm:p-8">

                            <p class="text-xs font-bold uppercase tracking-[0.18em] text-brand-purple">
                                APMDC
                            </p>


                            <h3 class="mt-3 text-2xl font-bold text-brand-dark">
                                APMDC Human Resources Management System
                            </h3>


                            <p class="mt-3 text-sm leading-7 text-brand-gray">
                                A centralized HR management platform designed
                                to streamline employee information, workflows,
                                tasks, leave management and organizational
                                processes.
                            </p>


                            <span class="mt-6 inline-flex items-center gap-2 text-sm font-bold text-brand-purple">

                                View Project

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

                            </span>

                        </div>

                    </a>

                </article>


                {{-- ========================================================
                     PROJECT 03
                ========================================================= --}}
                <article
                    class="group overflow-hidden rounded-[30px] border border-gray-200 bg-white shadow-sm transition duration-300 hover:-translate-y-1 hover:shadow-xl"
                >

                    <a
                        href="{{ url('/projects/apmdc-procurement-system') }}"
                        class="block"
                    >

                        <div class="relative aspect-[16/9] overflow-hidden bg-[#211a25]">

                            <div class="absolute inset-0 bg-gradient-to-br from-brand-purple/20 via-[#211a25] to-brand-red/20"></div>


                            <div class="absolute inset-0 flex items-center justify-center p-10">

                                <div class="w-full rounded-2xl border border-white/10 bg-white/[0.06] p-5 shadow-2xl backdrop-blur">

                                    <div class="grid grid-cols-4 gap-3">

                                        <div class="col-span-1 space-y-2">

                                            <div class="h-5 rounded bg-brand-purple/30"></div>
                                            <div class="h-3 rounded bg-white/10"></div>
                                            <div class="h-3 rounded bg-white/10"></div>
                                            <div class="h-3 rounded bg-white/10"></div>

                                        </div>


                                        <div class="col-span-3">

                                            <div class="h-7 rounded-xl bg-white/[0.06]"></div>

                                            <div class="mt-3 h-24 rounded-xl bg-brand-red/10"></div>

                                            <div class="mt-3 grid grid-cols-2 gap-2">

                                                <div class="h-10 rounded-lg bg-white/[0.05]"></div>
                                                <div class="h-10 rounded-lg bg-white/[0.05]"></div>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>


                            <div class="absolute left-5 top-5">

                                <span class="rounded-full bg-white/10 px-3 py-1.5 text-[10px] font-bold uppercase tracking-wider text-white backdrop-blur">
                                    Business System
                                </span>

                            </div>

                        </div>


                        <div class="p-7 sm:p-8">

                            <p class="text-xs font-bold uppercase tracking-[0.18em] text-brand-purple">
                                APMDC
                            </p>


                            <h3 class="mt-3 text-2xl font-bold text-brand-dark">
                                Procurement & Vendor Management System
                            </h3>


                            <p class="mt-3 text-sm leading-7 text-brand-gray">
                                A digital procurement platform designed to
                                organize purchasing workflows, vendor
                                information, approvals and procurement activities.
                            </p>


                            <span class="mt-6 inline-flex items-center gap-2 text-sm font-bold text-brand-purple">

                                View Project

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

                            </span>

                        </div>

                    </a>

                </article>


                {{-- ========================================================
                     PROJECT 04
                ========================================================= --}}
                <article
                    class="group overflow-hidden rounded-[30px] border border-gray-200 bg-white shadow-sm transition duration-300 hover:-translate-y-1 hover:shadow-xl"
                >

                    <a
                        href="{{ url('/projects') }}"
                        class="block"
                    >

                        <div class="relative aspect-[16/9] overflow-hidden bg-[#211a25]">

                            <div class="absolute inset-0 bg-gradient-to-br from-brand-red/20 via-[#211a25] to-brand-purple/25"></div>


                            <div class="absolute inset-0 flex items-center justify-center">

                                <div class="text-center">

                                    <div class="mx-auto flex h-16 w-16 items-center justify-center rounded-2xl border border-white/10 bg-white/[0.06] text-brand-purple">

                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            fill="none"
                                            viewBox="0 0 24 24"
                                            stroke-width="1.5"
                                            stroke="currentColor"
                                            class="h-7 w-7"
                                        >
                                            <path
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                d="M3 7.5h5l2 2h11v8.75A1.75 1.75 0 0 1 19.25 20h-14.5A1.75 1.75 0 0 1 3 18.25V7.5Z"
                                            />

                                            <path
                                                stroke-linecap="round"
                                                d="M3 7.5V5.75A1.75 1.75 0 0 1 4.75 4h4.5l2 2h8A1.75 1.75 0 0 1 21 7.75V9.5"
                                            />

                                        </svg>

                                    </div>


                                    <p class="mt-4 text-xs font-bold uppercase tracking-[0.2em] text-white/40">
                                        More Projects
                                    </p>

                                </div>

                            </div>

                        </div>


                        <div class="p-7 sm:p-8">

                            <p class="text-xs font-bold uppercase tracking-[0.18em] text-brand-purple">
                                More Work
                            </p>


                            <h3 class="mt-3 text-2xl font-bold text-brand-dark">
                                More digital solutions are on the way.
                            </h3>


                            <p class="mt-3 text-sm leading-7 text-brand-gray">
                                We're continuously building websites,
                                applications, dashboards and digital systems
                                for businesses and organizations.
                            </p>


                            <span class="mt-6 inline-flex items-center gap-2 text-sm font-bold text-brand-purple">

                                Explore Projects

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

                            </span>

                        </div>

                    </a>

                </article>

            </div>

        </div>

    </section>


    {{-- ================================================================
         CAPABILITIES
    ================================================================= --}}
    <section
        class="bg-white"
        aria-labelledby="projects-capabilities-heading"
    >

        <div class="mx-auto max-w-[1200px] px-6 py-20 sm:px-8 lg:px-10 lg:py-28">

            <div class="mx-auto max-w-3xl text-center">

                <div class="mb-5 flex items-center justify-center gap-4">

                    <span class="h-[4px] w-11 rounded-full bg-brand-red"></span>

                    <span class="text-[13px] font-bold uppercase tracking-[0.25em] text-brand-purple">
                        Our Capabilities
                    </span>

                    <span class="h-[4px] w-11 rounded-full bg-brand-red"></span>

                </div>


                <h2
                    id="projects-capabilities-heading"
                    class="text-3xl font-extrabold tracking-tight text-brand-dark sm:text-4xl"
                >
                    What we build.
                </h2>

            </div>


            <div class="mt-12 grid gap-4 sm:grid-cols-2 lg:grid-cols-4">

                <a
                    href="{{ url('/services/website-development') }}"
                    class="rounded-2xl border border-gray-200 bg-brand-light p-6 transition hover:-translate-y-1 hover:border-brand-purple"
                >

                    <h3 class="font-bold text-brand-dark">
                        Websites
                    </h3>

                    <p class="mt-2 text-sm leading-6 text-brand-gray">
                        Corporate websites and digital platforms.
                    </p>

                </a>


                <a
                    href="{{ url('/services/software-development') }}"
                    class="rounded-2xl border border-gray-200 bg-brand-light p-6 transition hover:-translate-y-1 hover:border-brand-purple"
                >

                    <h3 class="font-bold text-brand-dark">
                        Software
                    </h3>

                    <p class="mt-2 text-sm leading-6 text-brand-gray">
                        Custom business applications and systems.
                    </p>

                </a>


                <a
                    href="{{ url('/services/data-analytics') }}"
                    class="rounded-2xl border border-gray-200 bg-brand-light p-6 transition hover:-translate-y-1 hover:border-brand-purple"
                >

                    <h3 class="font-bold text-brand-dark">
                        Data & Analytics
                    </h3>

                    <p class="mt-2 text-sm leading-6 text-brand-gray">
                        Dashboards, reports and business intelligence.
                    </p>

                </a>


                <a
                    href="{{ url('/services/digital-transformation') }}"
                    class="rounded-2xl border border-gray-200 bg-brand-light p-6 transition hover:-translate-y-1 hover:border-brand-purple"
                >

                    <h3 class="font-bold text-brand-dark">
                        Digital Transformation
                    </h3>

                    <p class="mt-2 text-sm leading-6 text-brand-gray">
                        Technology-driven operational improvement.
                    </p>

                </a>

            </div>

        </div>

    </section>


    {{-- ================================================================
         CTA
    ================================================================= --}}
    <section
        class="relative overflow-hidden bg-[#17121b]"
        aria-labelledby="projects-cta-heading"
    >

        <div class="relative mx-auto max-w-[1000px] px-6 py-20 text-center sm:px-8 lg:px-10 lg:py-28">

            <div class="mb-5 flex items-center justify-center gap-4">

                <span class="h-[4px] w-10 rounded-full bg-brand-red"></span>

                <span class="text-[12px] font-bold uppercase tracking-[0.28em] text-[#c98bd0]">
                    Start Your Project
                </span>

                <span class="h-[4px] w-10 rounded-full bg-brand-red"></span>

            </div>


            <h2
                id="projects-cta-heading"
                class="text-3xl font-extrabold tracking-tight text-white sm:text-4xl lg:text-5xl"
            >
                Have a business problem we can help solve?
            </h2>


            <p class="mx-auto mt-5 max-w-2xl text-base leading-7 text-white/50 sm:text-lg">
                Tell us what you're trying to achieve and let's explore the
                technology, design or digital solution that fits your needs.
            </p>


            <a
                href="{{ url('/contact') }}"
                class="mt-9 inline-flex items-center gap-3 rounded-full bg-brand-purple px-7 py-4 text-sm font-bold text-white shadow-xl shadow-brand-purple/20 transition hover:-translate-y-1 hover:bg-brand-purple-dark"
            >
                Start a Conversation

                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="2"
                    stroke="currentColor"
                    class="h-4 w-4"
                    aria-hidden="true"
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
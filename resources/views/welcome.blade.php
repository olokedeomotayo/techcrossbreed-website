@extends('layouts.app')

@section('canonical', url('/'))

@section(
    'og_title',
    'Website Development & Digital Solutions for Businesses | Techcrossbreed'
)

@section(
    'og_description',
    'Professional websites, custom software, SEO, UI/UX design, data analytics and digital transformation solutions built to help businesses grow.'
)

@section('og_url', url('/'))

@section(
    'og_image_alt',
    'Techcrossbreed — Website Development, Software and Digital Solutions'
)

@section(
    'twitter_title',
    'Website Development & Digital Solutions for Businesses | Techcrossbreed'
)

@section(
    'twitter_description',
    'Professional websites, custom software, SEO and digital solutions designed to help businesses grow.'
)

@section(
    'twitter_image_alt',
    'Techcrossbreed digital solutions'
)

@section('title', 'Techcrossbreed | Web, Software & Digital Solutions')

@section(
    'meta_description',
    'Techcrossbreed designs and develops professional websites, custom software and digital solutions that help businesses grow, operate smarter and transform.'
)

@section('content')

{{-- ================================================================
     HERO
================================================================ --}}
<section
    class="relative isolate min-h-[calc(100vh-92px)] overflow-hidden bg-white lg:min-h-[calc(100vh-108px)]"
    aria-labelledby="hero-heading"
>

    {{-- ============================================================
         BACKGROUND GLOW
    ============================================================= --}}
    <div
        aria-hidden="true"
        class="pointer-events-none absolute right-[-12%] top-[-15%] -z-10 h-[650px] w-[650px] rounded-full bg-brand-purple-light opacity-80 blur-[110px]"
    ></div>

    <div
        aria-hidden="true"
        class="pointer-events-none absolute bottom-[-20%] left-[25%] -z-10 h-[500px] w-[500px] rounded-full bg-brand-red-light opacity-60 blur-[120px]"
    ></div>


    {{-- ============================================================
         MAIN HERO CONTAINER
    ============================================================= --}}
    <div class="mx-auto max-w-[1410px] px-6 sm:px-8 lg:px-10">

        <div class="grid min-h-[calc(100vh-92px)] items-center gap-12 py-16 lg:min-h-[calc(100vh-108px)] lg:grid-cols-[0.98fr_1.02fr] lg:gap-14 lg:py-14 xl:gap-20">


            {{-- ====================================================
                 LEFT CONTENT
            ===================================================== --}}
            <div class="relative z-10 max-w-[700px]">

                {{-- Eyebrow --}}
                <div class="mb-7 flex items-center gap-4">

                    <span
                        aria-hidden="true"
                        class="h-[4px] w-11 rounded-full bg-brand-red"
                    ></span>

                    <span class="text-[13px] font-bold uppercase tracking-[0.25em] text-brand-purple">
                        Digital Solutions
                    </span>

                </div>


                {{-- =================================================
                     H1
                ================================================== --}}
                <h1
                    id="hero-heading"
                    class="max-w-[720px] text-[52px] font-extrabold leading-[0.99] tracking-[-0.045em] text-brand-dark sm:text-[64px] lg:text-[72px] xl:text-[82px]"
                >

                    <span class="block">
                        Technology
                    </span>

                    <span class="block">
                        That Moves Your
                    </span>

                    <span class="block bg-gradient-to-r from-brand-purple via-brand-purple to-brand-red bg-clip-text text-transparent">
                        Business Forward.
                    </span>

                </h1>


                {{-- =================================================
                     DESCRIPTION
                ================================================== --}}
                <p class="mt-8 max-w-[650px] text-[17px] leading-[1.75] text-brand-gray sm:text-[19px]">
                    We build professional websites, custom software and
                    digital solutions that help businesses operate smarter,
                    reach more customers and grow with confidence.
                </p>


                {{-- =================================================
                     CTA BUTTONS
                ================================================== --}}
                <div class="mt-9 flex flex-col gap-4 sm:flex-row sm:items-center">

                    <a
                        href="{{ url('/contact') }}"
                        class="group inline-flex h-[58px] items-center justify-center gap-4 rounded-full bg-brand-purple px-8 text-[15px] font-bold text-white shadow-lg shadow-brand-purple/20 transition duration-300 hover:-translate-y-1 hover:bg-brand-purple-dark hover:shadow-xl"
                    >

                        <span>
                            Start a Project
                        </span>

                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="2"
                            stroke="currentColor"
                            class="h-5 w-5 transition-transform duration-300 group-hover:translate-x-1"
                            aria-hidden="true"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"
                            />
                        </svg>

                    </a>


                    <a
                        href="{{ url('/projects') }}"
                        class="inline-flex h-[58px] items-center justify-center rounded-full border border-brand-purple bg-white px-8 text-[15px] font-bold text-brand-purple transition duration-300 hover:-translate-y-1 hover:bg-brand-purple-light"
                    >
                        Explore Our Work
                    </a>

                </div>


                {{-- =================================================
                     TRUST INDICATOR
                ================================================== --}}
                <div class="mt-10 flex items-center gap-4">

                    <div class="flex items-center">

                        <div class="flex h-10 w-10 items-center justify-center rounded-full border-[3px] border-white bg-brand-purple text-xs font-bold text-white shadow-sm">
                            T
                        </div>

                        <div class="-ml-2 flex h-10 w-10 items-center justify-center rounded-full border-[3px] border-white bg-brand-red text-xs font-bold text-white shadow-sm">
                            C
                        </div>

                        <div class="-ml-2 flex h-10 w-10 items-center justify-center rounded-full border-[3px] border-white bg-brand-purple-dark text-xs font-bold text-white shadow-sm">
                            B
                        </div>

                    </div>

                    <div class="h-9 w-px bg-gray-200"></div>

                    <div>

                        <p class="text-[15px] font-bold text-brand-dark">
                            Built for growing businesses
                        </p>

                        <p class="mt-0.5 text-[14px] text-brand-gray">
                            to build, grow and transform.
                        </p>

                    </div>

                </div>

            </div>


            {{-- ====================================================
                 RIGHT VISUAL
            ===================================================== --}}
            <div class="relative z-10 mx-auto w-full max-w-[700px] lg:mx-0">

                {{-- Decorative glow --}}
                <div
                    aria-hidden="true"
                    class="absolute -inset-10 -z-10 rounded-full bg-gradient-to-br from-brand-purple/10 via-transparent to-brand-red/10 blur-3xl"
                ></div>


                {{-- =================================================
                     DASHBOARD WINDOW
                ================================================== --}}
                <div class="relative overflow-hidden rounded-[34px] border border-white/10 bg-[#15111a] p-6 shadow-[0_35px_90px_rgba(67,20,76,0.22)] sm:p-7 lg:p-8">

                    {{-- Inner glow --}}
                    <div
                        aria-hidden="true"
                        class="absolute right-[-15%] top-[-20%] h-[350px] w-[350px] rounded-full bg-brand-purple/25 blur-[100px]"
                    ></div>

                    <div
                        aria-hidden="true"
                        class="absolute bottom-[-20%] left-[-10%] h-[300px] w-[300px] rounded-full bg-brand-red/20 blur-[100px]"
                    ></div>


                    {{-- Window header --}}
                    <div class="relative flex items-center justify-between border-b border-white/10 pb-5">

                        <div class="flex items-center gap-2">

                            <span class="h-3 w-3 rounded-full bg-white/20"></span>
                            <span class="h-3 w-3 rounded-full bg-white/20"></span>
                            <span class="h-3 w-3 rounded-full bg-white/20"></span>

                        </div>

                        <span class="text-[11px] font-semibold uppercase tracking-[0.22em] text-white/45">
                            Techcrossbreed
                        </span>

                    </div>


                    {{-- Dashboard content --}}
                    <div class="relative pt-8">

                        <div class="flex items-end justify-between">

                            <div>

                                <p class="text-sm text-white/40">
                                    Digital Growth
                                </p>

                                <h2 class="mt-2 text-[30px] font-bold tracking-tight text-white sm:text-[36px]">
                                    Build. Grow. Transform.
                                </h2>

                            </div>


                            <span class="hidden rounded-full border border-brand-purple/30 bg-brand-purple/10 px-4 py-2 text-xs font-bold text-[#c98bd0] sm:inline-flex">
                                ● LIVE
                            </span>

                        </div>


                        {{-- =================================================
                             GRAPH
                        ================================================== --}}
                        <div class="relative mt-7 h-[190px] overflow-hidden rounded-[20px] border border-white/10 bg-white/[0.025] p-5">

                            <div class="absolute inset-x-6 top-[35px] border-t border-white/[0.055]"></div>
                            <div class="absolute inset-x-6 top-[92px] border-t border-white/[0.055]"></div>
                            <div class="absolute inset-x-6 top-[149px] border-t border-white/[0.055]"></div>

                            <svg
                                viewBox="0 0 600 180"
                                preserveAspectRatio="none"
                                class="relative h-full w-full"
                                aria-hidden="true"
                            >

                                <defs>

                                    <linearGradient
                                        id="heroGrowthGradient"
                                        x1="0"
                                        x2="1"
                                        y1="0"
                                        y2="0"
                                    >
                                        <stop offset="0%" stop-color="#8d3c96"/>
                                        <stop offset="100%" stop-color="#d02d4d"/>
                                    </linearGradient>

                                    <linearGradient
                                        id="heroAreaGradient"
                                        x1="0"
                                        x2="0"
                                        y1="0"
                                        y2="1"
                                    >
                                        <stop offset="0%" stop-color="#9d3fa0" stop-opacity="0.24"/>
                                        <stop offset="100%" stop-color="#b51f35" stop-opacity="0"/>
                                    </linearGradient>

                                </defs>


                                <path
                                    d="M0 158 C55 146 95 145 145 132 C205 116 222 123 270 105 C320 86 350 98 394 73 C435 51 466 78 505 48 C540 22 568 51 600 15 L600 180 L0 180 Z"
                                    fill="url(#heroAreaGradient)"
                                />

                                <path
                                    d="M0 158 C55 146 95 145 145 132 C205 116 222 123 270 105 C320 86 350 98 394 73 C435 51 466 78 505 48 C540 22 568 51 600 15"
                                    fill="none"
                                    stroke="url(#heroGrowthGradient)"
                                    stroke-width="6"
                                    stroke-linecap="round"
                                />

                            </svg>

                        </div>


                        {{-- =================================================
                             SOLUTION CARDS
                        ================================================== --}}
                        <div class="mt-5 grid grid-cols-3 gap-3 sm:gap-4">


                            {{-- Websites --}}
                            <div class="rounded-[20px] border border-white/10 bg-white/[0.045] p-4 sm:p-5">

                                <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-brand-purple text-white">

                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke-width="1.8"
                                        stroke="currentColor"
                                        class="h-5 w-5"
                                        aria-hidden="true"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M3.75 5.25h16.5v11.25H3.75zM8.25 20.25h7.5"
                                        />
                                    </svg>

                                </div>

                                <h3 class="mt-4 text-[16px] font-bold text-white">
                                    Websites
                                </h3>

                                <p class="mt-2 hidden text-sm leading-6 text-white/55 sm:block">
                                    Beautiful. Fast.<br>
                                    Results-driven.
                                </p>

                            </div>


                            {{-- Software --}}
                            <div class="rounded-[20px] border border-white/10 bg-white/[0.045] p-4 sm:p-5">

                                <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-brand-red text-white">

                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke-width="1.8"
                                        stroke="currentColor"
                                        class="h-5 w-5"
                                        aria-hidden="true"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M8.25 8.25l-3 3.75 3 3.75M15.75 8.25l3 3.75-3 3.75M13.5 5.25l-3 13.5"
                                        />
                                    </svg>

                                </div>

                                <h3 class="mt-4 text-[16px] font-bold text-white">
                                    Software
                                </h3>

                                <p class="mt-2 hidden text-sm leading-6 text-white/55 sm:block">
                                    Custom. Scalable.<br>
                                    Built for you.
                                </p>

                            </div>


                            {{-- Analytics --}}
                            <div class="rounded-[20px] border border-white/10 bg-white/[0.045] p-4 sm:p-5">

                                <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-white/10 text-white">

                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke-width="1.8"
                                        stroke="currentColor"
                                        class="h-5 w-5"
                                        aria-hidden="true"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M4.5 18.75l5.25-5.25 3.75 3.75L19.5 11.25"
                                        />

                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M15.75 11.25h3.75V15"
                                        />
                                    </svg>

                                </div>

                                <h3 class="mt-4 text-[16px] font-bold text-white">
                                    Analytics
                                </h3>

                                <p class="mt-2 hidden text-sm leading-6 text-white/55 sm:block">
                                    Data. Insights.<br>
                                    Better Decisions.
                                </p>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>


    {{-- ============================================================
         BOTTOM WAVE
    ============================================================= --}}
    <div
        aria-hidden="true"
        class="pointer-events-none absolute bottom-[-1px] left-0 right-0"
    >

        <svg
            viewBox="0 0 1440 110"
            preserveAspectRatio="none"
            class="h-[80px] w-full sm:h-[95px] lg:h-[105px]"
        >

            <path
                d="M0 62 C150 20 270 25 410 60 C560 98 665 88 785 65 C925 38 1000 15 1130 40 C1250 64 1330 79 1440 45 L1440 110 L0 110 Z"
                fill="#f4edf5"
            />

        </svg>

    </div>

</section>

{{-- ================================================================
     VISION, MISSION & KEY SERVICES
================================================================ --}}
<section
    class="relative overflow-hidden bg-white"
    aria-labelledby="vision-mission-heading"
>

    {{-- Background decoration --}}
    <div
        aria-hidden="true"
        class="pointer-events-none absolute -right-40 top-0 h-[420px] w-[420px] rounded-full bg-brand-purple-light/50 blur-3xl"
    ></div>

    <div
        aria-hidden="true"
        class="pointer-events-none absolute -left-40 bottom-0 h-[380px] w-[380px] rounded-full bg-brand-red-light/30 blur-3xl"
    ></div>


    <div class="relative mx-auto max-w-[1410px] px-6 py-20 sm:px-8 lg:px-10 lg:py-28">


        {{-- =========================================================
             SECTION INTRODUCTION
        ========================================================== --}}
        <div class="mx-auto max-w-3xl text-center">

            <div class="mb-5 flex items-center justify-center gap-4">

                <span
                    aria-hidden="true"
                    class="h-[4px] w-11 rounded-full bg-brand-red"
                ></span>

                <span class="text-[13px] font-bold uppercase tracking-[0.25em] text-brand-purple">
                    Who We Are
                </span>

                <span
                    aria-hidden="true"
                    class="h-[4px] w-11 rounded-full bg-brand-red"
                ></span>

            </div>


            <h2
                id="vision-mission-heading"
                class="text-3xl font-extrabold tracking-tight text-brand-dark sm:text-4xl lg:text-5xl"
            >
                Technology with purpose.
            </h2>


            <p class="mt-5 text-base leading-7 text-brand-gray sm:text-lg sm:leading-8">
                At Techcrossbreed, we believe technology should do more than
                look good. It should solve problems, improve how businesses
                operate and create opportunities for sustainable growth.
            </p>

        </div>


        {{-- =========================================================
             VISION & MISSION
        ========================================================== --}}
        <div class="mt-14 grid gap-6 lg:grid-cols-2">


            {{-- =====================================================
                 VISION
            ====================================================== --}}
            <article
                class="group relative overflow-hidden rounded-[30px] bg-[#17121b] p-8 text-white shadow-xl shadow-brand-purple/10 sm:p-10"
            >

                {{-- Decorative glow --}}
                <div
                    aria-hidden="true"
                    class="absolute -right-20 -top-20 h-64 w-64 rounded-full bg-brand-purple/25 blur-3xl transition duration-500 group-hover:bg-brand-purple/35"
                ></div>


                <div class="relative">

                    <div class="flex items-center justify-between">

                        <span class="text-xs font-bold uppercase tracking-[0.22em] text-[#c98bd0]">
                            Our Vision
                        </span>

                        <span class="flex h-12 w-12 items-center justify-center rounded-2xl bg-brand-purple/20 text-brand-purple">

                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke-width="1.7"
                                stroke="currentColor"
                                class="h-6 w-6"
                                aria-hidden="true"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M2.25 12s3.5-6.75 9.75-6.75S21.75 12 21.75 12 18.25 18.75 12 18.75 2.25 12 2.25 12z"
                                />

                                <circle
                                    cx="12"
                                    cy="12"
                                    r="2.75"
                                />
                            </svg>

                        </span>

                    </div>


                    <h3 class="mt-8 text-2xl font-bold tracking-tight sm:text-3xl">
                        To empower businesses through technology.
                    </h3>


                    <p class="mt-5 max-w-xl text-sm leading-7 text-white/60 sm:text-base">
                        We envision a future where businesses of every size
                        can use accessible, intelligent and reliable
                        technology to compete, innovate and grow in an
                        increasingly digital world.
                    </p>

                </div>

            </article>


            {{-- =====================================================
                 MISSION
            ====================================================== --}}
            <article
                class="group relative overflow-hidden rounded-[30px] border border-gray-200 bg-brand-light p-8 shadow-sm transition duration-300 hover:-translate-y-1 hover:shadow-xl hover:shadow-brand-red/10 sm:p-10"
            >

                <div class="flex items-center justify-between">

                    <span class="text-xs font-bold uppercase tracking-[0.22em] text-brand-red">
                        Our Mission
                    </span>

                    <span class="flex h-12 w-12 items-center justify-center rounded-2xl bg-brand-red-light text-brand-red">

                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="1.7"
                            stroke="currentColor"
                            class="h-6 w-6"
                            aria-hidden="true"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M3.75 21h16.5M5.25 21V9.75h13.5V21M8.25 9.75V6h7.5v3.75"
                            />

                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M8.25 13.5h.01M12 13.5h.01M15.75 13.5h.01M8.25 17.25h.01M12 17.25h.01M15.75 17.25h.01"
                            />
                        </svg>

                    </span>

                </div>


                <h3 class="mt-8 text-2xl font-bold tracking-tight text-brand-dark sm:text-3xl">
                    Build technology that creates real value.
                </h3>


                <p class="mt-5 max-w-xl text-sm leading-7 text-brand-gray sm:text-base">
                    Our mission is to combine strategy, creativity and
                    technology to deliver practical digital solutions that
                    help organizations improve efficiency, connect with their
                    customers and achieve measurable business objectives.
                </p>

            </article>

        </div>


       

    </div>

</section>

{{-- ================================================================
SERVICES
================================================================ --}}

<section
    class="relative overflow-hidden bg-brand-light"
    aria-labelledby="services-heading"
>

```
{{-- Background decoration --}}
<div
    aria-hidden="true"
    class="absolute -right-40 top-10 h-[420px] w-[420px] rounded-full bg-brand-purple-light/70 blur-3xl"
></div>

<div
    aria-hidden="true"
    class="absolute -left-40 bottom-10 h-[400px] w-[400px] rounded-full bg-brand-red-light/40 blur-3xl"
></div>


<div class="relative mx-auto max-w-[1410px] px-6 py-20 sm:px-8 lg:px-10 lg:py-28">

    {{-- Section Header --}}
    <div class="flex flex-col justify-between gap-8 lg:flex-row lg:items-end">

        <div class="max-w-3xl">

            <div class="mb-5 flex items-center gap-4">

                <span
                    aria-hidden="true"
                    class="h-[4px] w-11 rounded-full bg-brand-red"
                ></span>

                <span class="text-[13px] font-bold uppercase tracking-[0.25em] text-brand-purple">
                    Our Services
                </span>

            </div>

            <h2
                id="services-heading"
                class="text-3xl font-extrabold tracking-tight text-brand-dark sm:text-4xl lg:text-5xl"
            >
                Digital solutions built for growth.
            </h2>

            <p class="mt-5 max-w-2xl text-base leading-7 text-brand-gray sm:text-lg sm:leading-8">
                From professional websites and custom software to SEO,
                analytics and digital transformation, we build technology
                around the way your business works.
            </p>

        </div>


        {{-- View All Services --}}
        <a
            href="{{ url('/services') }}"
            class="group inline-flex shrink-0 items-center gap-3 text-sm font-bold text-brand-purple transition hover:text-brand-red"
        >

            <span>
                Explore All Services
            </span>

            <span
                class="flex h-10 w-10 items-center justify-center rounded-full border border-brand-purple/20 bg-white transition duration-300 group-hover:border-brand-red group-hover:bg-brand-red group-hover:text-white"
            >
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="2"
                    stroke="currentColor"
                    class="h-4 w-4 transition-transform duration-300 group-hover:translate-x-0.5"
                    aria-hidden="true"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"
                    />
                </svg>
            </span>

        </a>

    </div>


    {{-- =========================================================
         SERVICES GRID — 3 COLUMNS × 2 ROWS
    ========================================================== --}}
    <div class="mt-14 grid gap-5 sm:grid-cols-2 lg:grid-cols-3">


        {{-- 01 Website Development --}}
        <a
            href="{{ url('/services/website-development') }}"
            class="group rounded-[28px] border border-gray-200/80 bg-white p-7 shadow-sm transition duration-300 hover:-translate-y-1 hover:border-brand-purple/20 hover:shadow-xl hover:shadow-brand-purple/10 sm:p-8"
        >

            <div class="flex items-start justify-between">

                <span class="text-sm font-bold text-brand-purple/40">
                    01
                </span>

                <span class="flex h-11 w-11 items-center justify-center rounded-xl bg-brand-purple-light text-brand-purple transition duration-300 group-hover:bg-brand-purple group-hover:text-white">

                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="1.8"
                        stroke="currentColor"
                        class="h-5 w-5"
                        aria-hidden="true"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M3.75 5.25h16.5v11.25H3.75zM8.25 20.25h7.5"
                        />
                    </svg>

                </span>

            </div>

            <h3 class="mt-10 text-xl font-bold tracking-tight text-brand-dark">
                Website Development
            </h3>

            <p class="mt-3 text-sm leading-6 text-brand-gray">
                Professional, responsive websites designed to strengthen
                your brand, attract customers and support business growth.
            </p>

            <div class="mt-7 flex items-center gap-2 text-sm font-bold text-brand-purple">
                Explore service

                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="2"
                    stroke="currentColor"
                    class="h-4 w-4 transition-transform duration-300 group-hover:translate-x-1"
                    aria-hidden="true"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"
                    />
                </svg>
            </div>

        </a>


        {{-- 02 Software Development --}}
        <a
            href="{{ url('/services/software-development') }}"
            class="group rounded-[28px] border border-gray-200/80 bg-white p-7 shadow-sm transition duration-300 hover:-translate-y-1 hover:border-brand-red/20 hover:shadow-xl hover:shadow-brand-red/10 sm:p-8"
        >

            <div class="flex items-start justify-between">

                <span class="text-sm font-bold text-brand-red/40">
                    02
                </span>

                <span class="flex h-11 w-11 items-center justify-center rounded-xl bg-brand-red-light text-brand-red transition duration-300 group-hover:bg-brand-red group-hover:text-white">

                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="1.8"
                        stroke="currentColor"
                        class="h-5 w-5"
                        aria-hidden="true"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M8.25 8.25l-3 3.75 3 3.75M15.75 8.25l3 3.75-3 3.75M13.5 5.25l-3 13.5"
                        />
                    </svg>

                </span>

            </div>

            <h3 class="mt-10 text-xl font-bold tracking-tight text-brand-dark">
                Software Development
            </h3>

            <p class="mt-3 text-sm leading-6 text-brand-gray">
                Custom web applications and business systems built around
                your processes, workflows and operational requirements.
            </p>

            <div class="mt-7 flex items-center gap-2 text-sm font-bold text-brand-red">
                Explore service

                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="2"
                    stroke="currentColor"
                    class="h-4 w-4 transition-transform duration-300 group-hover:translate-x-1"
                    aria-hidden="true"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"
                    />
                </svg>
            </div>

        </a>


        {{-- 03 UI/UX Design --}}
        <a
            href="{{ url('/services/ui-ux-design') }}"
            class="group rounded-[28px] border border-gray-200/80 bg-white p-7 shadow-sm transition duration-300 hover:-translate-y-1 hover:border-brand-purple/20 hover:shadow-xl hover:shadow-brand-purple/10 sm:p-8"
        >

            <div class="flex items-start justify-between">

                <span class="text-sm font-bold text-brand-purple/40">
                    03
                </span>

                <span class="flex h-11 w-11 items-center justify-center rounded-xl bg-brand-purple-light text-brand-purple transition duration-300 group-hover:bg-brand-purple group-hover:text-white">

                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="1.8"
                        stroke="currentColor"
                        class="h-5 w-5"
                        aria-hidden="true"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M4.5 5.25A2.25 2.25 0 016.75 3h10.5a2.25 2.25 0 012.25 2.25v13.5A2.25 2.25 0 0117.25 21H6.75a2.25 2.25 0 01-2.25-2.25V5.25z"
                        />

                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M8.25 7.5h7.5M8.25 11.25h4.5"
                        />
                    </svg>

                </span>

            </div>

            <h3 class="mt-10 text-xl font-bold tracking-tight text-brand-dark">
                UI/UX Design
            </h3>

            <p class="mt-3 text-sm leading-6 text-brand-gray">
                Intuitive digital experiences and interfaces designed to
                make your products easier and more enjoyable to use.
            </p>

            <div class="mt-7 flex items-center gap-2 text-sm font-bold text-brand-purple">
                Explore service

                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="2"
                    stroke="currentColor"
                    class="h-4 w-4 transition-transform duration-300 group-hover:translate-x-1"
                    aria-hidden="true"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"
                    />
                </svg>
            </div>

        </a>


        {{-- 04 SEO & Digital Growth --}}
        <a
            href="{{ url('/services/seo-services') }}"
            class="group rounded-[28px] border border-gray-200/80 bg-white p-7 shadow-sm transition duration-300 hover:-translate-y-1 hover:border-brand-red/20 hover:shadow-xl hover:shadow-brand-red/10 sm:p-8"
        >

            <div class="flex items-start justify-between">

                <span class="text-sm font-bold text-brand-red/40">
                    04
                </span>

                <span class="flex h-11 w-11 items-center justify-center rounded-xl bg-brand-red-light text-brand-red transition duration-300 group-hover:bg-brand-red group-hover:text-white">

                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="1.8"
                        stroke="currentColor"
                        class="h-5 w-5"
                        aria-hidden="true"
                    >
                        <circle
                            cx="11"
                            cy="11"
                            r="6.75"
                        />

                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M16 16l4.25 4.25"
                        />
                    </svg>

                </span>

            </div>

            <h3 class="mt-10 text-xl font-bold tracking-tight text-brand-dark">
                SEO & Digital Growth
            </h3>

            <p class="mt-3 text-sm leading-6 text-brand-gray">
                Search-focused strategies that improve online visibility,
                attract qualified visitors and create sustainable growth.
            </p>

            <div class="mt-7 flex items-center gap-2 text-sm font-bold text-brand-red">
                Explore service

                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="2"
                    stroke="currentColor"
                    class="h-4 w-4 transition-transform duration-300 group-hover:translate-x-1"
                    aria-hidden="true"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"
                    />
                </svg>
            </div>

        </a>


        {{-- 05 Data Analytics --}}
        <a
            href="{{ url('/services/data-analytics') }}"
            class="group rounded-[28px] border border-gray-200/80 bg-white p-7 shadow-sm transition duration-300 hover:-translate-y-1 hover:border-brand-purple/20 hover:shadow-xl hover:shadow-brand-purple/10 sm:p-8"
        >

            <div class="flex items-start justify-between">

                <span class="text-sm font-bold text-brand-purple/40">
                    05
                </span>

                <span class="flex h-11 w-11 items-center justify-center rounded-xl bg-brand-purple-light text-brand-purple transition duration-300 group-hover:bg-brand-purple group-hover:text-white">

                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="1.8"
                        stroke="currentColor"
                        class="h-5 w-5"
                        aria-hidden="true"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M4.5 19.5V9.75M10.5 19.5V5.25M16.5 19.5v-6M22.5 19.5V3"
                        />
                    </svg>

                </span>

            </div>

            <h3 class="mt-10 text-xl font-bold tracking-tight text-brand-dark">
                Data Analytics
            </h3>

            <p class="mt-3 text-sm leading-6 text-brand-gray">
                Dashboards, reporting and business intelligence solutions
                that turn your data into useful insights and better decisions.
            </p>

            <div class="mt-7 flex items-center gap-2 text-sm font-bold text-brand-purple">
                Explore service

                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="2"
                    stroke="currentColor"
                    class="h-4 w-4 transition-transform duration-300 group-hover:translate-x-1"
                    aria-hidden="true"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"
                    />
                </svg>
            </div>

        </a>


        {{-- 06 Digital Transformation --}}
        <a
            href="{{ url('/services/digital-transformation') }}"
            class="group rounded-[28px] border border-gray-200/80 bg-white p-7 shadow-sm transition duration-300 hover:-translate-y-1 hover:border-brand-red/20 hover:shadow-xl hover:shadow-brand-red/10 sm:p-8"
        >

            <div class="flex items-start justify-between">

                <span class="text-sm font-bold text-brand-red/40">
                    06
                </span>

                <span class="flex h-11 w-11 items-center justify-center rounded-xl bg-brand-red-light text-brand-red transition duration-300 group-hover:bg-brand-red group-hover:text-white">

                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="1.8"
                        stroke="currentColor"
                        class="h-5 w-5"
                        aria-hidden="true"
                    >
                        <circle
                            cx="12"
                            cy="12"
                            r="8.25"
                        />

                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M12 3.75v16.5M3.75 12h16.5"
                        />
                    </svg>

                </span>

            </div>

            <h3 class="mt-10 text-xl font-bold tracking-tight text-brand-dark">
                Digital Transformation
            </h3>

            <p class="mt-3 text-sm leading-6 text-brand-gray">
                Practical technology strategies that help organizations
                modernize processes, improve efficiency and adapt for growth.
            </p>

            <div class="mt-7 flex items-center gap-2 text-sm font-bold text-brand-red">
                Explore service

                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="2"
                    stroke="currentColor"
                    class="h-4 w-4 transition-transform duration-300 group-hover:translate-x-1"
                    aria-hidden="true"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"
                    />
                </svg>
            </div>

        </a>

    </div>

</div>
```

</section>

{{-- ================================================================
FEATURED PROJECTS
================================================================ --}}

<section
    class="relative overflow-hidden bg-[#17121b] text-white"
    aria-labelledby="projects-heading"
>

```
{{-- Background glow --}}
<div
    aria-hidden="true"
    class="absolute -right-40 -top-40 h-[520px] w-[520px] rounded-full bg-brand-purple/20 blur-[120px]"
></div>

<div
    aria-hidden="true"
    class="absolute -left-40 bottom-[-100px] h-[460px] w-[460px] rounded-full bg-brand-red/10 blur-[120px]"
></div>


<div class="relative mx-auto max-w-[1410px] px-6 py-20 sm:px-8 lg:px-10 lg:py-28">

    {{-- Section Header --}}
    <div class="flex flex-col justify-between gap-8 lg:flex-row lg:items-end">

        <div class="max-w-3xl">

            <div class="mb-5 flex items-center gap-4">

                <span
                    aria-hidden="true"
                    class="h-[4px] w-11 rounded-full bg-brand-red"
                ></span>

                <span class="text-[13px] font-bold uppercase tracking-[0.25em] text-[#c98bd0]">
                    Featured Work
                </span>

            </div>


            <h2
                id="projects-heading"
                class="text-3xl font-extrabold tracking-tight text-white sm:text-4xl lg:text-5xl"
            >
                Digital solutions we've built.
            </h2>


            <p class="mt-5 max-w-2xl text-base leading-7 text-white/55 sm:text-lg sm:leading-8">
                Explore selected websites, business systems and digital
                solutions developed to solve real operational and business
                challenges.
            </p>

        </div>


        {{-- View All Projects --}}
        <a
            href="{{ url('/projects') }}"
            class="group inline-flex shrink-0 items-center gap-3 text-sm font-bold text-white transition hover:text-brand-red"
        >

            <span>
                View All Projects
            </span>

            <span
                class="flex h-10 w-10 items-center justify-center rounded-full border border-white/15 transition duration-300 group-hover:border-brand-red group-hover:bg-brand-red group-hover:text-white"
            >
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="2"
                    stroke="currentColor"
                    class="h-4 w-4 transition-transform duration-300 group-hover:translate-x-0.5"
                    aria-hidden="true"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"
                    />
                </svg>
            </span>

        </a>

    </div>


    {{-- Project Grid --}}
    <div class="mt-14 grid gap-6 lg:grid-cols-3">


        {{-- =====================================================
             PROJECT 01
        ====================================================== --}}
        <article
            class="group overflow-hidden rounded-[30px] border border-white/10 bg-white shadow-xl transition duration-300 hover:-translate-y-1 hover:shadow-2xl hover:shadow-brand-purple/20"
        >

            <div class="relative h-[280px] overflow-hidden bg-[#211a25]">

                <div
                    aria-hidden="true"
                    class="absolute -right-20 -top-20 h-64 w-64 rounded-full bg-brand-purple/30 blur-3xl"
                ></div>


                <div class="absolute inset-x-7 top-8 overflow-hidden rounded-2xl border border-white/10 bg-[#17121b] shadow-2xl">

                    <div class="flex items-center justify-between border-b border-white/10 px-4 py-3">

                        <div class="flex gap-1.5">
                            <span class="h-2 w-2 rounded-full bg-white/20"></span>
                            <span class="h-2 w-2 rounded-full bg-white/20"></span>
                            <span class="h-2 w-2 rounded-full bg-white/20"></span>
                        </div>

                        <div class="h-2 w-20 rounded-full bg-white/10"></div>

                    </div>


                    <div class="p-5">

                        <div class="h-3 w-24 rounded-full bg-brand-purple/70"></div>

                        <div class="mt-4 h-8 w-4/5 rounded-lg bg-white/10"></div>

                        <div class="mt-3 h-2 w-3/5 rounded-full bg-white/10"></div>

                        <div class="mt-6 grid grid-cols-3 gap-2">

                            <div class="h-16 rounded-lg bg-brand-purple/20"></div>
                            <div class="h-16 rounded-lg bg-brand-red/20"></div>
                            <div class="h-16 rounded-lg bg-white/5"></div>

                        </div>

                    </div>

                </div>

            </div>


            <div class="p-7 sm:p-8">

                <div class="flex items-center gap-2">

                    <span class="rounded-full bg-brand-purple-light px-3 py-1 text-[11px] font-bold uppercase tracking-wider text-brand-purple">
                        Website
                    </span>

                    <span class="text-xs text-gray-400">
                        Web Platform
                    </span>

                </div>


                <h3 class="mt-5 text-xl font-bold tracking-tight text-brand-dark">
                    Corporate Website & Web Platform
                </h3>


                <p class="mt-3 text-sm leading-6 text-brand-gray">
                    A professional corporate website and digital platform
                    designed to strengthen online presence and
                    communicate its services and capabilities.
                </p>


                <a
                    href="{{ url('/projects/apmdc-corporate-website') }}"
                    class="mt-6 inline-flex items-center gap-2 text-sm font-bold text-brand-purple transition hover:text-brand-red"
                >
                    View Project

                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="2"
                        stroke="currentColor"
                        class="h-4 w-4 transition-transform duration-300 group-hover:translate-x-1"
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

        </article>


        {{-- =====================================================
             PROJECT 02
        ====================================================== --}}
        <article
            class="group overflow-hidden rounded-[30px] border border-white/10 bg-white shadow-xl transition duration-300 hover:-translate-y-1 hover:shadow-2xl hover:shadow-brand-red/20"
        >

            <div class="relative h-[280px] overflow-hidden bg-[#211a25]">

                <div
                    aria-hidden="true"
                    class="absolute -left-20 -top-20 h-64 w-64 rounded-full bg-brand-red/30 blur-3xl"
                ></div>


                <div class="absolute inset-x-7 top-8 overflow-hidden rounded-2xl border border-white/10 bg-[#17121b] shadow-2xl">

                    <div class="flex items-center justify-between border-b border-white/10 px-4 py-3">

                        <div class="flex gap-1.5">
                            <span class="h-2 w-2 rounded-full bg-white/20"></span>
                            <span class="h-2 w-2 rounded-full bg-white/20"></span>
                            <span class="h-2 w-2 rounded-full bg-white/20"></span>
                        </div>

                        <div class="h-2 w-20 rounded-full bg-white/10"></div>

                    </div>


                    <div class="grid grid-cols-[75px_1fr]">

                        <div class="border-r border-white/10 p-3">

                            <div class="h-3 w-10 rounded bg-brand-red/70"></div>

                            <div class="mt-6 space-y-3">

                                <div class="h-2 rounded bg-white/15"></div>
                                <div class="h-2 rounded bg-white/10"></div>
                                <div class="h-2 rounded bg-white/10"></div>
                                <div class="h-2 rounded bg-white/10"></div>

                            </div>

                        </div>


                        <div class="p-4">

                            <div class="h-3 w-24 rounded bg-white/20"></div>

                            <div class="mt-4 grid grid-cols-3 gap-2">

                                <div class="h-12 rounded-lg bg-brand-purple/20"></div>
                                <div class="h-12 rounded-lg bg-brand-red/20"></div>
                                <div class="h-12 rounded-lg bg-white/5"></div>

                            </div>

                            <div class="mt-4 h-20 rounded-lg bg-white/5"></div>

                        </div>

                    </div>

                </div>

            </div>


            <div class="p-7 sm:p-8">

                <div class="flex items-center gap-2">

                    <span class="rounded-full bg-brand-red-light px-3 py-1 text-[11px] font-bold uppercase tracking-wider text-brand-red">
                        HR Technology
                    </span>

                    <span class="text-xs text-gray-400">
                        Business System
                    </span>

                </div>


                <h3 class="mt-5 text-xl font-bold tracking-tight text-brand-dark">
                    Human Resources Management System
                </h3>


                <p class="mt-3 text-sm leading-6 text-brand-gray">
                    A centralized HR management platform designed to
                    streamline employee records, workflows, reporting
                    and everyday human resource operations.
                </p>


                <a
                    href="{{ url('/projects/apmdc-hrms') }}"
                    class="mt-6 inline-flex items-center gap-2 text-sm font-bold text-brand-red transition hover:text-brand-purple"
                >
                    View Project

                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="2"
                        stroke="currentColor"
                        class="h-4 w-4 transition-transform duration-300 group-hover:translate-x-1"
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

        </article>


        {{-- =====================================================
             PROJECT 03
        ====================================================== --}}
        <article
            class="group overflow-hidden rounded-[30px] border border-white/10 bg-white shadow-xl transition duration-300 hover:-translate-y-1 hover:shadow-2xl hover:shadow-brand-purple/20"
        >

            <div class="relative h-[280px] overflow-hidden bg-[#211a25]">

                <div
                    aria-hidden="true"
                    class="absolute -right-20 -bottom-20 h-64 w-64 rounded-full bg-brand-purple/30 blur-3xl"
                ></div>


                <div class="absolute inset-x-7 top-8 overflow-hidden rounded-2xl border border-white/10 bg-[#17121b] shadow-2xl">

                    <div class="flex items-center justify-between border-b border-white/10 px-4 py-3">

                        <div class="flex gap-1.5">
                            <span class="h-2 w-2 rounded-full bg-white/20"></span>
                            <span class="h-2 w-2 rounded-full bg-white/20"></span>
                            <span class="h-2 w-2 rounded-full bg-white/20"></span>
                        </div>

                        <div class="h-2 w-20 rounded-full bg-white/10"></div>

                    </div>


                    <div class="p-5">

                        <div class="flex items-center justify-between">

                            <div class="h-3 w-28 rounded bg-white/20"></div>

                            <div class="h-6 w-16 rounded-full bg-brand-purple/20"></div>

                        </div>


                        <div class="mt-5 space-y-2">

                            <div class="flex h-10 items-center gap-3 rounded-lg bg-white/5 px-3">

                                <span class="h-5 w-5 rounded bg-brand-purple/40"></span>
                                <span class="h-2 w-24 rounded bg-white/15"></span>
                                <span class="ml-auto h-2 w-12 rounded bg-white/10"></span>

                            </div>


                            <div class="flex h-10 items-center gap-3 rounded-lg bg-white/5 px-3">

                                <span class="h-5 w-5 rounded bg-brand-red/40"></span>
                                <span class="h-2 w-28 rounded bg-white/15"></span>
                                <span class="ml-auto h-2 w-12 rounded bg-white/10"></span>

                            </div>


                            <div class="flex h-10 items-center gap-3 rounded-lg bg-white/5 px-3">

                                <span class="h-5 w-5 rounded bg-white/10"></span>
                                <span class="h-2 w-20 rounded bg-white/15"></span>
                                <span class="ml-auto h-2 w-12 rounded bg-white/10"></span>

                            </div>

                        </div>

                    </div>

                </div>

            </div>


            <div class="p-7 sm:p-8">

                <div class="flex items-center gap-2">

                    <span class="rounded-full bg-brand-purple-light px-3 py-1 text-[11px] font-bold uppercase tracking-wider text-brand-purple">
                        Procurement
                    </span>

                    <span class="text-xs text-gray-400">
                        Business System
                    </span>

                </div>


                <h3 class="mt-5 text-xl font-bold tracking-tight text-brand-dark">
                    Procurement & Vendor Management System
                </h3>


                <p class="mt-3 text-sm leading-6 text-brand-gray">
                    A digital procurement platform designed to improve
                    vendor management, procurement workflows, records
                    and organizational visibility.
                </p>


                <a
                    href="{{ url('/projects/apmdc-procurement-system') }}"
                    class="mt-6 inline-flex items-center gap-2 text-sm font-bold text-brand-purple transition hover:text-brand-red"
                >
                    View Project

                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="2"
                        stroke="currentColor"
                        class="h-4 w-4 transition-transform duration-300 group-hover:translate-x-1"
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

        </article>

    </div>

</div>

</section>

{{-- ================================================================
     WHY TECHCROSSBREED
================================================================ --}}
<section
    class="relative overflow-hidden bg-white"
    aria-labelledby="why-techcrossbreed-heading"
>

    {{-- Background decoration --}}
    <div
        aria-hidden="true"
        class="absolute -left-40 top-20 h-[420px] w-[420px] rounded-full bg-brand-purple-light/50 blur-3xl"
    ></div>

    <div
        aria-hidden="true"
        class="absolute -right-40 bottom-0 h-[420px] w-[420px] rounded-full bg-brand-red-light/30 blur-3xl"
    ></div>


    <div class="relative mx-auto max-w-[1410px] px-6 py-20 sm:px-8 lg:px-10 lg:py-28">

        <div class="grid items-center gap-14 lg:grid-cols-[0.9fr_1.1fr] lg:gap-20">


            {{-- =====================================================
                 LEFT — VISUAL
            ====================================================== --}}
            <div class="relative">

                <div class="relative overflow-hidden rounded-[34px] bg-[#17121b] p-7 shadow-2xl shadow-brand-purple/15 sm:p-9">


                    {{-- Decorative glow --}}
                    <div
                        aria-hidden="true"
                        class="absolute -right-24 -top-24 h-[350px] w-[350px] rounded-full bg-brand-purple/25 blur-[100px]"
                    ></div>

                    <div
                        aria-hidden="true"
                        class="absolute -bottom-24 -left-24 h-[300px] w-[300px] rounded-full bg-brand-red/15 blur-[100px]"
                    ></div>


                    <div class="relative">

                        {{-- Visual header --}}
                        <div class="flex items-center justify-between">

                            <div>

                                <p class="text-[11px] font-bold uppercase tracking-[0.22em] text-white/40">
                                    Our Approach
                                </p>

                                <p class="mt-2 text-lg font-bold text-white">
                                    Business + Technology
                                </p>

                            </div>


                            <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-brand-purple/20 text-brand-purple">

                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke-width="1.7"
                                    stroke="currentColor"
                                    class="h-5 w-5"
                                    aria-hidden="true"
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M12 3.75v16.5M3.75 12h16.5"
                                    />

                                    <circle
                                        cx="12"
                                        cy="12"
                                        r="8.25"
                                    />

                                </svg>

                            </div>

                        </div>


                        {{-- Connection visual --}}
                        <div class="relative mt-12 flex items-center justify-between">

                            {{-- Business --}}
                            <div class="flex flex-col items-center">

                                <div class="flex h-20 w-20 items-center justify-center rounded-2xl border border-white/10 bg-white/[0.05]">

                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke-width="1.5"
                                        stroke="currentColor"
                                        class="h-8 w-8 text-brand-red"
                                        aria-hidden="true"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M3.75 21h16.5M5.25 21V9.75h13.5V21M8.25 9.75V6h7.5v3.75"
                                        />

                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M8.25 13.5h.01M12 13.5h.01M15.75 13.5h.01"
                                        />

                                    </svg>

                                </div>

                                <span class="mt-3 text-xs font-semibold text-white/50">
                                    Business
                                </span>

                            </div>


                            {{-- Connection --}}
                            <div class="mx-4 flex flex-1 items-center">

                                <div class="h-px flex-1 bg-gradient-to-r from-brand-red/60 via-brand-purple to-brand-purple/20"></div>

                                <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-full border border-brand-purple/30 bg-brand-purple/10 text-brand-purple">

                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke-width="1.8"
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

                                </div>

                                <div class="h-px flex-1 bg-gradient-to-r from-brand-purple/20 via-brand-purple to-brand-red/60"></div>

                            </div>


                            {{-- Technology --}}
                            <div class="flex flex-col items-center">

                                <div class="flex h-20 w-20 items-center justify-center rounded-2xl border border-white/10 bg-white/[0.05]">

                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke-width="1.5"
                                        stroke="currentColor"
                                        class="h-8 w-8 text-brand-purple"
                                        aria-hidden="true"
                                    >
                                        <rect
                                            x="4.5"
                                            y="5.25"
                                            width="15"
                                            height="13.5"
                                            rx="2"
                                        />

                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M8.25 9.75l2.25 2.25-2.25 2.25M12.75 14.25h3"
                                        />

                                    </svg>

                                </div>

                                <span class="mt-3 text-xs font-semibold text-white/50">
                                    Technology
                                </span>

                            </div>

                        </div>


                        {{-- Bottom message --}}
                        <div class="mt-12 rounded-2xl border border-white/10 bg-white/[0.04] p-5">

                            <p class="text-sm leading-6 text-white/60">
                                We connect business objectives with practical
                                technology to create solutions that deliver
                                real value.
                            </p>

                        </div>

                    </div>

                </div>

            </div>


            {{-- =====================================================
                 RIGHT — CONTENT
            ====================================================== --}}
            <div>

                <div class="mb-5 flex items-center gap-4">

                    <span
                        aria-hidden="true"
                        class="h-[4px] w-11 rounded-full bg-brand-red"
                    ></span>

                    <span class="text-[13px] font-bold uppercase tracking-[0.25em] text-brand-purple">
                        Why Techcrossbreed
                    </span>

                </div>


                <h2
                    id="why-techcrossbreed-heading"
                    class="max-w-2xl text-3xl font-extrabold tracking-tight text-brand-dark sm:text-4xl lg:text-5xl"
                >
                    Technology should work for your business.
                </h2>


                <p class="mt-6 max-w-2xl text-base leading-7 text-brand-gray sm:text-lg sm:leading-8">
                    We don't believe in technology for technology's sake.
                    We first understand your goals, challenges and customers,
                    then build digital solutions that support the way your
                    business actually works.
                </p>


                {{-- Benefits --}}
                <div class="mt-10 space-y-7">


                    {{-- Benefit 01 --}}
                    <div class="flex gap-5">

                        <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-brand-purple-light text-brand-purple">

                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke-width="1.8"
                                stroke="currentColor"
                                class="h-5 w-5"
                                aria-hidden="true"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M12 3.75l2.25 4.5 4.95.72-3.6 3.51.85 4.96L12 15.1l-4.45 2.34.85-4.96-3.6-3.51 4.95-.72L12 3.75z"
                                />
                            </svg>

                        </div>

                        <div>

                            <h3 class="font-bold text-brand-dark">
                                Business-focused
                            </h3>

                            <p class="mt-1 text-sm leading-6 text-brand-gray">
                                Every solution starts with understanding the
                                business objective behind the technology.
                            </p>

                        </div>

                    </div>


                    {{-- Benefit 02 --}}
                    <div class="flex gap-5">

                        <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-brand-red-light text-brand-red">

                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke-width="1.8"
                                stroke="currentColor"
                                class="h-5 w-5"
                                aria-hidden="true"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M12 3.75v16.5M3.75 12h16.5"
                                />

                                <circle
                                    cx="12"
                                    cy="12"
                                    r="8.25"
                                />

                            </svg>

                        </div>

                        <div>

                            <h3 class="font-bold text-brand-dark">
                                Custom-built
                            </h3>

                            <p class="mt-1 text-sm leading-6 text-brand-gray">
                                We create solutions around your processes,
                                requirements and customers instead of forcing
                                your business into a generic system.
                            </p>

                        </div>

                    </div>


                    {{-- Benefit 03 --}}
                    <div class="flex gap-5">

                        <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-brand-purple-light text-brand-purple">

                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke-width="1.8"
                                stroke="currentColor"
                                class="h-5 w-5"
                                aria-hidden="true"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M3.75 12h16.5M12 3.75v16.5"
                                />

                                <circle
                                    cx="12"
                                    cy="12"
                                    r="8.25"
                                />

                            </svg>

                        </div>

                        <div>

                            <h3 class="font-bold text-brand-dark">
                                Modern & scalable
                            </h3>

                            <p class="mt-1 text-sm leading-6 text-brand-gray">
                                We use modern development practices to create
                                reliable solutions that can evolve as your
                                business grows.
                            </p>

                        </div>

                    </div>


                    {{-- Benefit 04 --}}
                    <div class="flex gap-5">

                        <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-brand-red-light text-brand-red">

                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke-width="1.8"
                                stroke="currentColor"
                                class="h-5 w-5"
                                aria-hidden="true"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M9 12.75l2 2 4-4.5"
                                />

                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M12 3.75l7.5 3v5.25c0 4.5-3.25 7.75-7.5 9-4.25-1.25-7.5-4.5-7.5-9V6.75l7.5-3z"
                                />

                            </svg>

                        </div>

                        <div>

                            <h3 class="font-bold text-brand-dark">
                                Built for the long term
                            </h3>

                            <p class="mt-1 text-sm leading-6 text-brand-gray">
                                We design with maintainability, performance
                                and future improvements in mind.
                            </p>

                        </div>

                    </div>

                </div>


                {{-- CTA --}}
                <a
                    href="{{ url('/about') }}"
                    class="group mt-10 inline-flex items-center gap-3 rounded-full bg-brand-purple px-7 py-3.5 text-sm font-bold text-white shadow-lg shadow-brand-purple/15 transition duration-300 hover:-translate-y-0.5 hover:bg-brand-purple-dark"
                >

                    Learn More About Us

                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="2"
                        stroke="currentColor"
                        class="h-4 w-4 transition-transform duration-300 group-hover:translate-x-1"
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

        </div>

    </div>

</section>

{{-- ================================================================
     TECH STACK
================================================================ --}}
<section
    class="relative overflow-hidden bg-[#17121b]"
    aria-labelledby="tech-stack-heading"
>

    <div
        aria-hidden="true"
        class="absolute left-1/2 top-0 h-[350px] w-[600px] -translate-x-1/2 rounded-full bg-brand-purple/15 blur-[120px]"
    ></div>

    <div class="relative mx-auto max-w-[1410px] px-6 py-20 sm:px-8 lg:px-10 lg:py-24">

        <div class="mx-auto max-w-3xl text-center">

            <div class="mb-5 flex items-center justify-center gap-4">

                <span class="h-[4px] w-11 rounded-full bg-brand-red"></span>

                <span class="text-[13px] font-bold uppercase tracking-[0.25em] text-[#c98bd0]">
                    Technology
                </span>

                <span class="h-[4px] w-11 rounded-full bg-brand-red"></span>

            </div>

            <h2
                id="tech-stack-heading"
                class="text-3xl font-extrabold tracking-tight text-white sm:text-4xl lg:text-5xl"
            >
                Built with modern technology.
            </h2>

            <p class="mt-5 text-base leading-7 text-white/55 sm:text-lg sm:leading-8">
                We choose reliable, modern technologies based on the needs,
                goals and scale of each project.
            </p>

        </div>


        <div class="mt-14 grid grid-cols-2 gap-3 sm:grid-cols-3 lg:grid-cols-6">

            @php
                $technologies = [
                    ['name' => 'Laravel', 'type' => 'Backend'],
                    ['name' => 'PHP', 'type' => 'Development'],
                    ['name' => 'JavaScript', 'type' => 'Frontend'],
                    ['name' => 'Vue.js', 'type' => 'Frontend'],
                    ['name' => 'Tailwind CSS', 'type' => 'UI'],
                    ['name' => 'MySQL', 'type' => 'Database'],
                    ['name' => 'Git & GitHub', 'type' => 'Version Control'],
                    ['name' => 'REST APIs', 'type' => 'Integration'],
                    ['name' => 'Power BI', 'type' => 'Analytics'],
                    ['name' => 'Google Analytics', 'type' => 'Analytics'],
                    ['name' => 'Figma', 'type' => 'Design'],
                    ['name' => 'SEO Tools', 'type' => 'Digital Growth'],
                ];
            @endphp

            @foreach ($technologies as $technology)

                <div
                    class="group rounded-2xl border border-white/10 bg-white/[0.035] p-5 text-center transition duration-300 hover:-translate-y-1 hover:border-brand-purple/40 hover:bg-white/[0.06]"
                >

                    <div class="mx-auto flex h-12 w-12 items-center justify-center rounded-xl bg-white/[0.06] text-sm font-black text-white transition group-hover:bg-brand-purple group-hover:text-white">
                        {{ strtoupper(substr($technology['name'], 0, 2)) }}
                    </div>

                    <h3 class="mt-4 text-sm font-bold text-white">
                        {{ $technology['name'] }}
                    </h3>

                    <p class="mt-1 text-[11px] text-white/35">
                        {{ $technology['type'] }}
                    </p>

                </div>

            @endforeach

        </div>

    </div>

</section>

{{-- ================================================================
     TESTIMONIALS
================================================================ --}}
<section
    class="relative overflow-hidden bg-brand-light"
    aria-labelledby="testimonials-heading"
>

    <div
        aria-hidden="true"
        class="absolute -right-40 top-10 h-[400px] w-[400px] rounded-full bg-brand-purple-light/50 blur-3xl"
    ></div>

    <div
        aria-hidden="true"
        class="absolute -left-40 bottom-0 h-[350px] w-[350px] rounded-full bg-brand-red-light/30 blur-3xl"
    ></div>


    <div class="relative mx-auto max-w-[1410px] px-6 py-20 sm:px-8 lg:px-10 lg:py-28">

        <div class="flex flex-col justify-between gap-8 lg:flex-row lg:items-end">

            <div class="max-w-3xl">

                <div class="mb-5 flex items-center gap-4">

                    <span class="h-[4px] w-11 rounded-full bg-brand-red"></span>

                    <span class="text-[13px] font-bold uppercase tracking-[0.25em] text-brand-purple">
                        Client Feedback
                    </span>

                </div>

                <h2
                    id="testimonials-heading"
                    class="text-3xl font-extrabold tracking-tight text-brand-dark sm:text-4xl lg:text-5xl"
                >
                    Trusted to build digital solutions.
                </h2>

                <p class="mt-5 max-w-2xl text-base leading-7 text-brand-gray sm:text-lg sm:leading-8">
                    What our clients and partners say about working with
                    Techcrossbreed.
                </p>

            </div>

        </div>


        <div class="mt-14 grid gap-6 lg:grid-cols-3">


            {{-- Testimonial 01 --}}
            <article
                class="rounded-[28px] border border-gray-200 bg-white p-7 shadow-sm sm:p-8"
            >

                <div class="flex gap-1 text-brand-red" aria-label="5 out of 5 stars">

                    ★ ★ ★ ★ ★

                </div>

                <blockquote class="mt-7 text-base leading-7 text-brand-gray">
                    “Techcrossbreed helped us turn our digital requirements
                    into a practical solution that supports our organization
                    and its day-to-day operations.”
                </blockquote>

                <div class="mt-7 flex items-center gap-4 border-t border-gray-100 pt-6">

                    <div class="flex h-11 w-11 items-center justify-center rounded-full bg-brand-purple text-sm font-bold text-white">
                        A
                    </div>

                    <div>

                    
                        <p class="mt-0.5 text-xs text-brand-gray">
                            Corporate Client
                        </p>

                    </div>

                </div>

            </article>


            {{-- Testimonial 02 --}}
            <article
                class="rounded-[28px] border border-gray-200 bg-white p-7 shadow-sm sm:p-8"
            >

                <div class="flex gap-1 text-brand-red" aria-label="5 out of 5 stars">

                    ★ ★ ★ ★ ★

                </div>

                <blockquote class="mt-7 text-base leading-7 text-brand-gray">
                    “The focus on understanding the business process before
                    building the technology made the project much easier to
                    implement and use.”
                </blockquote>

                <div class="mt-7 flex items-center gap-4 border-t border-gray-100 pt-6">

                    <div class="flex h-11 w-11 items-center justify-center rounded-full bg-brand-red text-sm font-bold text-white">
                        C
                    </div>

                    <div>

                        <p class="text-sm font-bold text-brand-dark">
                            Client Partner
                        </p>

                        <p class="mt-0.5 text-xs text-brand-gray">
                            Business Client
                        </p>

                    </div>

                </div>

            </article>


            {{-- Testimonial 03 --}}
            <article
                class="rounded-[28px] border border-gray-200 bg-white p-7 shadow-sm sm:p-8"
            >

                <div class="flex gap-1 text-brand-red" aria-label="5 out of 5 stars">

                    ★ ★ ★ ★ ★

                </div>

                <blockquote class="mt-7 text-base leading-7 text-brand-gray">
                    “A professional approach from planning through development,
                    with a clear focus on delivering technology that solves
                    real problems.”
                </blockquote>

                <div class="mt-7 flex items-center gap-4 border-t border-gray-100 pt-6">

                    <div class="flex h-11 w-11 items-center justify-center rounded-full bg-brand-purple text-sm font-bold text-white">
                        P
                    </div>

                    <div>

                        <p class="text-sm font-bold text-brand-dark">
                            Project Partner
                        </p>

                        <p class="mt-0.5 text-xs text-brand-gray">
                            Technology Client
                        </p>

                    </div>

                </div>

            </article>

        </div>

    </div>

</section>

{{-- ================================================================
     FINAL CALL TO ACTION
================================================================ --}}
<section
    class="relative overflow-hidden bg-[#17121b]"
    aria-labelledby="final-cta-heading"
>

    {{-- =========================================================
         BACKGROUND GLOW
    ========================================================== --}}
    <div
        aria-hidden="true"
        class="pointer-events-none absolute -left-32 -top-32 h-[420px] w-[420px] rounded-full bg-brand-purple/25 blur-[110px]"
    ></div>

    <div
        aria-hidden="true"
        class="pointer-events-none absolute -right-32 -bottom-32 h-[420px] w-[420px] rounded-full bg-brand-red/15 blur-[110px]"
    ></div>


    {{-- Subtle center glow --}}
    <div
        aria-hidden="true"
        class="pointer-events-none absolute left-1/2 top-1/2 h-[500px] w-[700px] -translate-x-1/2 -translate-y-1/2 rounded-full bg-brand-purple/10 blur-[140px]"
    ></div>


    <div class="relative mx-auto max-w-[1100px] px-6 py-20 text-center sm:px-8 lg:px-10 lg:py-28">


        {{-- =====================================================
             LABEL
        ====================================================== --}}
        <div class="mb-6 flex items-center justify-center gap-4">

            <span
                aria-hidden="true"
                class="h-[4px] w-10 rounded-full bg-brand-red"
            ></span>

            <span class="text-[12px] font-bold uppercase tracking-[0.28em] text-[#c98bd0]">
                Let's Build Something
            </span>

            <span
                aria-hidden="true"
                class="h-[4px] w-10 rounded-full bg-brand-red"
            ></span>

        </div>


        {{-- =====================================================
             HEADING
        ====================================================== --}}
        <h2
            id="final-cta-heading"
            class="mx-auto max-w-4xl text-4xl font-extrabold tracking-tight text-white sm:text-5xl lg:text-6xl"
        >
            Ready to turn your idea into a digital solution?
        </h2>


        {{-- =====================================================
             DESCRIPTION
        ====================================================== --}}
        <p class="mx-auto mt-6 max-w-2xl text-base leading-7 text-white/55 sm:text-lg sm:leading-8">
            Whether you need a professional website, custom software,
            better search visibility or a complete digital transformation,
            let's build something that moves your business forward.
        </p>


        {{-- =====================================================
             ACTIONS
        ====================================================== --}}
        <div class="mt-10 flex flex-col items-center justify-center gap-4 sm:flex-row">


            {{-- Primary CTA --}}
            <a
                href="{{ url('/contact') }}"
                class="group inline-flex min-w-[190px] items-center justify-center gap-3 rounded-full bg-brand-purple px-7 py-4 text-sm font-bold text-white shadow-xl shadow-brand-purple/20 transition duration-300 hover:-translate-y-1 hover:bg-brand-purple-dark"
            >

                Start a Project

                <span
                    class="flex h-7 w-7 items-center justify-center rounded-full bg-white/10 transition group-hover:bg-white/20"
                >

                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="2"
                        stroke="currentColor"
                        class="h-4 w-4 transition-transform duration-300 group-hover:translate-x-0.5"
                        aria-hidden="true"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"
                        />
                    </svg>

                </span>

            </a>


            {{-- Secondary CTA --}}
            <a
                href="{{ url('/services') }}"
                class="inline-flex min-w-[190px] items-center justify-center rounded-full border border-white/15 px-7 py-4 text-sm font-bold text-white transition duration-300 hover:-translate-y-1 hover:border-white/30 hover:bg-white/5"
            >
                Explore Our Services
            </a>

        </div>


        {{-- =====================================================
             SUPPORTING POINTS
        ====================================================== --}}
        <div class="mt-12 flex flex-wrap items-center justify-center gap-x-8 gap-y-4 text-xs text-white/40">

            <span class="flex items-center gap-2">

                <span class="h-1.5 w-1.5 rounded-full bg-brand-purple"></span>

                Business-focused solutions

            </span>


            <span class="flex items-center gap-2">

                <span class="h-1.5 w-1.5 rounded-full bg-brand-red"></span>

                Custom-built technology

            </span>


            <span class="flex items-center gap-2">

                <span class="h-1.5 w-1.5 rounded-full bg-brand-purple"></span>

                Long-term digital growth

            </span>

        </div>

    </div>

</section>

{{-- ================================================================
     LATEST ARTICLES / INSIGHTS
================================================================ --}}
<section
    id="articles"
    class="relative overflow-hidden bg-white"
    aria-labelledby="articles-heading"
>

    {{-- Background decoration --}}
    <div
        aria-hidden="true"
        class="pointer-events-none absolute -left-40 top-20 h-[420px] w-[420px] rounded-full bg-brand-purple-light/40 blur-3xl"
    ></div>

    <div
        aria-hidden="true"
        class="pointer-events-none absolute -right-40 bottom-0 h-[350px] w-[350px] rounded-full bg-brand-red-light/20 blur-3xl"
    ></div>


    <div class="relative mx-auto max-w-[1410px] px-6 py-20 sm:px-8 lg:px-10 lg:py-28">


        {{-- =========================================================
             SECTION HEADER
        ========================================================== --}}
        <div class="flex flex-col justify-between gap-8 lg:flex-row lg:items-end">

            <div class="max-w-3xl">

                {{-- Label --}}
                <div class="mb-5 flex items-center gap-4">

                    <span
                        aria-hidden="true"
                        class="h-[4px] w-11 rounded-full bg-brand-red"
                    ></span>

                    <span class="text-[13px] font-bold uppercase tracking-[0.25em] text-brand-purple">
                        Insights & Resources
                    </span>

                </div>


                {{-- Heading --}}
                <h2
                    id="articles-heading"
                    class="text-3xl font-extrabold tracking-tight text-brand-dark sm:text-4xl lg:text-5xl"
                >
                    Ideas, insights & practical technology advice.
                </h2>


                {{-- Description --}}
                <p class="mt-5 max-w-2xl text-base leading-7 text-brand-gray sm:text-lg sm:leading-8">
                    Explore practical insights on website development, software,
                    SEO, digital transformation, data analytics and technology
                    for growing businesses.
                </p>

            </div>


            {{-- =====================================================
                 VIEW ALL ARTICLES
            ====================================================== --}}
            <a
                href="{{ url('/blog') }}"
                class="group inline-flex shrink-0 items-center gap-3 text-sm font-bold text-brand-purple transition hover:text-brand-red"
            >

                <span>
                    View All Articles
                </span>

                <span
                    class="flex h-10 w-10 items-center justify-center rounded-full border border-brand-purple/20 bg-white transition duration-300 group-hover:border-brand-red group-hover:bg-brand-red group-hover:text-white"
                >

                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="2"
                        stroke="currentColor"
                        class="h-4 w-4 transition-transform duration-300 group-hover:translate-x-0.5"
                        aria-hidden="true"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"
                        />
                    </svg>

                </span>

            </a>

        </div>


        {{-- =========================================================
             ARTICLE GRID
        ========================================================== --}}
        <div class="mt-14 grid gap-6 lg:grid-cols-3">


            {{-- =====================================================
                 ARTICLE 01
            ====================================================== --}}
            <article
                class="group overflow-hidden rounded-[30px] border border-gray-200 bg-white shadow-sm transition duration-300 hover:-translate-y-1 hover:border-brand-purple/20 hover:shadow-xl hover:shadow-brand-purple/10"
            >

                {{-- Article visual --}}
                <div class="relative h-[230px] overflow-hidden bg-[#17121b]">

                    {{-- Decorative glow --}}
                    <div
                        aria-hidden="true"
                        class="absolute -right-16 -top-16 h-56 w-56 rounded-full bg-brand-purple/30 blur-3xl transition duration-500 group-hover:scale-110"
                    ></div>


                    <div
                        aria-hidden="true"
                        class="absolute -bottom-20 -left-10 h-48 w-48 rounded-full bg-brand-red/15 blur-3xl"
                    ></div>


                    {{-- Abstract website interface --}}
                    <div class="absolute inset-x-7 top-8 overflow-hidden rounded-2xl border border-white/10 bg-[#211a25] shadow-2xl">

                        <div class="flex items-center justify-between border-b border-white/10 px-4 py-3">

                            <div class="flex gap-1.5">

                                <span class="h-2 w-2 rounded-full bg-white/20"></span>
                                <span class="h-2 w-2 rounded-full bg-white/20"></span>
                                <span class="h-2 w-2 rounded-full bg-white/20"></span>

                            </div>

                            <div class="h-2 w-20 rounded-full bg-white/10"></div>

                        </div>


                        <div class="p-5">

                            <div class="h-3 w-24 rounded-full bg-brand-purple/70"></div>

                            <div class="mt-4 h-7 w-4/5 rounded-lg bg-white/10"></div>

                            <div class="mt-3 h-2 w-3/5 rounded-full bg-white/10"></div>

                            <div class="mt-6 flex gap-2">

                                <div class="h-12 flex-1 rounded-lg bg-brand-purple/20"></div>

                                <div class="h-12 flex-1 rounded-lg bg-white/5"></div>

                                <div class="h-12 flex-1 rounded-lg bg-brand-red/15"></div>

                            </div>

                        </div>

                    </div>


                    {{-- Category --}}
                    <div class="absolute bottom-5 left-6">

                        <span class="inline-flex rounded-full border border-white/10 bg-black/20 px-3 py-1.5 text-[10px] font-bold uppercase tracking-[0.12em] text-white backdrop-blur-md">
                            Website Development
                        </span>

                    </div>

                </div>


                {{-- Article content --}}
                <div class="p-7 sm:p-8">

                    <div class="flex items-center gap-3 text-xs text-brand-gray">

                        <span>
                            Web Development
                        </span>

                        <span class="h-1 w-1 rounded-full bg-gray-300"></span>

                        <span>
                            5 min read
                        </span>

                    </div>


                    <h3 class="mt-4 text-xl font-bold leading-7 tracking-tight text-brand-dark transition duration-300 group-hover:text-brand-purple">
                        Why Every Business Needs a Professional Website
                    </h3>


                    <p class="mt-3 text-sm leading-6 text-brand-gray">
                        Discover how a professional business website can build
                        credibility, improve online visibility and help turn
                        visitors into customers.
                    </p>


                    <a
                        href="{{ url('/blog/why-every-business-needs-a-professional-website') }}"
                        class="mt-6 inline-flex items-center gap-2 text-sm font-bold text-brand-purple transition hover:text-brand-red"
                    >

                        Read Article

                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="2"
                            stroke="currentColor"
                            class="h-4 w-4 transition-transform duration-300 group-hover:translate-x-1"
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

            </article>


            {{-- =====================================================
                 ARTICLE 02
            ====================================================== --}}
            <article
                class="group overflow-hidden rounded-[30px] border border-gray-200 bg-white shadow-sm transition duration-300 hover:-translate-y-1 hover:border-brand-red/20 hover:shadow-xl hover:shadow-brand-red/10"
            >

                {{-- Article visual --}}
                <div class="relative h-[230px] overflow-hidden bg-[#17121b]">

                    <div
                        aria-hidden="true"
                        class="absolute -left-16 -top-16 h-56 w-56 rounded-full bg-brand-red/25 blur-3xl transition duration-500 group-hover:scale-110"
                    ></div>


                    <div
                        aria-hidden="true"
                        class="absolute -right-10 -bottom-20 h-48 w-48 rounded-full bg-brand-purple/20 blur-3xl"
                    ></div>


                    {{-- SEO analytics visual --}}
                    <div class="absolute inset-x-7 top-8 overflow-hidden rounded-2xl border border-white/10 bg-[#211a25] shadow-2xl">

                        <div class="border-b border-white/10 px-4 py-3">

                            <div class="h-2 w-24 rounded-full bg-white/15"></div>

                        </div>


                        <div class="p-5">

                            <div class="flex items-end gap-2">

                                <div class="h-10 flex-1 rounded-t bg-brand-purple/30"></div>

                                <div class="h-16 flex-1 rounded-t bg-brand-purple/45"></div>

                                <div class="h-12 flex-1 rounded-t bg-brand-red/35"></div>

                                <div class="h-20 flex-1 rounded-t bg-brand-purple/60"></div>

                                <div class="h-24 flex-1 rounded-t bg-brand-red/45"></div>

                            </div>

                        </div>

                    </div>


                    <div class="absolute bottom-5 left-6">

                        <span class="inline-flex rounded-full border border-white/10 bg-black/20 px-3 py-1.5 text-[10px] font-bold uppercase tracking-[0.12em] text-white backdrop-blur-md">
                            SEO & Digital Growth
                        </span>

                    </div>

                </div>


                {{-- Article content --}}
                <div class="p-7 sm:p-8">

                    <div class="flex items-center gap-3 text-xs text-brand-gray">

                        <span>
                            SEO
                        </span>

                        <span class="h-1 w-1 rounded-full bg-gray-300"></span>

                        <span>
                            6 min read
                        </span>

                    </div>


                    <h3 class="mt-4 text-xl font-bold leading-7 tracking-tight text-brand-dark transition duration-300 group-hover:text-brand-red">
                        How SEO Helps Businesses Get Found Online
                    </h3>


                    <p class="mt-3 text-sm leading-6 text-brand-gray">
                        Learn how search engine optimization can improve your
                        visibility, attract qualified visitors and support
                        long-term digital growth.
                    </p>


                    <a
                        href="{{ url('/blog/how-seo-helps-businesses-get-found-online') }}"
                        class="mt-6 inline-flex items-center gap-2 text-sm font-bold text-brand-red transition hover:text-brand-purple"
                    >

                        Read Article

                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="2"
                            stroke="currentColor"
                            class="h-4 w-4 transition-transform duration-300 group-hover:translate-x-1"
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

            </article>


            {{-- =====================================================
                 ARTICLE 03
            ====================================================== --}}
            <article
                class="group overflow-hidden rounded-[30px] border border-gray-200 bg-white shadow-sm transition duration-300 hover:-translate-y-1 hover:border-brand-purple/20 hover:shadow-xl hover:shadow-brand-purple/10"
            >

                {{-- Article visual --}}
                <div class="relative h-[230px] overflow-hidden bg-[#17121b]">

                    <div
                        aria-hidden="true"
                        class="absolute -right-16 -top-16 h-56 w-56 rounded-full bg-brand-purple/25 blur-3xl transition duration-500 group-hover:scale-110"
                    ></div>


                    <div
                        aria-hidden="true"
                        class="absolute -left-10 -bottom-20 h-48 w-48 rounded-full bg-brand-red/15 blur-3xl"
                    ></div>


                    {{-- Digital transformation visual --}}
                    <div class="absolute inset-x-7 top-8 overflow-hidden rounded-2xl border border-white/10 bg-[#211a25] shadow-2xl">

                        <div class="flex items-center justify-between border-b border-white/10 px-4 py-3">

                            <div class="h-2 w-24 rounded-full bg-white/15"></div>

                            <div class="h-5 w-12 rounded-full bg-brand-purple/20"></div>

                        </div>


                        <div class="p-5">

                            <div class="grid grid-cols-3 gap-2">

                                <div class="h-14 rounded-lg bg-brand-purple/20"></div>

                                <div class="h-14 rounded-lg bg-brand-red/20"></div>

                                <div class="h-14 rounded-lg bg-white/5"></div>

                            </div>


                            <div class="mt-4 h-2 w-3/4 rounded-full bg-white/10"></div>

                            <div class="mt-2 h-2 w-1/2 rounded-full bg-white/10"></div>

                            <div class="mt-5 h-7 w-24 rounded-lg bg-brand-purple/25"></div>

                        </div>

                    </div>


                    <div class="absolute bottom-5 left-6">

                        <span class="inline-flex rounded-full border border-white/10 bg-black/20 px-3 py-1.5 text-[10px] font-bold uppercase tracking-[0.12em] text-white backdrop-blur-md">
                            Digital Transformation
                        </span>

                    </div>

                </div>


                {{-- Article content --}}
                <div class="p-7 sm:p-8">

                    <div class="flex items-center gap-3 text-xs text-brand-gray">

                        <span>
                            Business Technology
                        </span>

                        <span class="h-1 w-1 rounded-full bg-gray-300"></span>

                        <span>
                            7 min read
                        </span>

                    </div>


                    <h3 class="mt-4 text-xl font-bold leading-7 tracking-tight text-brand-dark transition duration-300 group-hover:text-brand-purple">
                        How Digital Transformation Can Improve Your Business
                    </h3>


                    <p class="mt-3 text-sm leading-6 text-brand-gray">
                        Explore practical ways organizations can use technology
                        to improve efficiency, streamline processes and create
                        better customer experiences.
                    </p>


                    <a
                        href="{{ url('/blog/digital-transformation-for-business') }}"
                        class="mt-6 inline-flex items-center gap-2 text-sm font-bold text-brand-purple transition hover:text-brand-red"
                    >

                        Read Article

                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="2"
                            stroke="currentColor"
                            class="h-4 w-4 transition-transform duration-300 group-hover:translate-x-1"
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

            </article>

        </div>


        {{-- =========================================================
             ARTICLES CTA
        ========================================================== --}}
        <div class="mt-12 text-center">

            <a
                href="{{ url('/blog') }}"
                class="group inline-flex items-center gap-3 rounded-full border border-brand-purple/20 bg-brand-light px-6 py-3 text-sm font-bold text-brand-purple transition duration-300 hover:-translate-y-0.5 hover:border-brand-purple hover:bg-brand-purple hover:text-white"
            >

                Explore the Techcrossbreed Blog

                <span class="flex h-7 w-7 items-center justify-center rounded-full bg-brand-purple/10 transition group-hover:bg-white/10">

                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="2"
                        stroke="currentColor"
                        class="h-4 w-4 transition-transform duration-300 group-hover:translate-x-0.5"
                        aria-hidden="true"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"
                        />
                    </svg>

                </span>

            </a>

        </div>

    </div>

</section>

{{-- ================================================================
     FREQUENTLY ASKED QUESTIONS
================================================================ --}}
<section
    id="faq"
    class="relative overflow-hidden bg-brand-light"
    aria-labelledby="faq-heading"
>

    <div
        aria-hidden="true"
        class="absolute -right-40 top-0 h-[400px] w-[400px] rounded-full bg-brand-purple-light/50 blur-3xl"
    ></div>

    <div
        aria-hidden="true"
        class="absolute -left-40 bottom-0 h-[350px] w-[350px] rounded-full bg-brand-red-light/30 blur-3xl"
    ></div>


    <div class="relative mx-auto max-w-[1100px] px-6 py-20 sm:px-8 lg:px-10 lg:py-28">

        {{-- Header --}}
        <div class="mx-auto max-w-3xl text-center">

            <div class="mb-5 flex items-center justify-center gap-4">

                <span class="h-[4px] w-11 rounded-full bg-brand-red"></span>

                <span class="text-[13px] font-bold uppercase tracking-[0.25em] text-brand-purple">
                    Frequently Asked Questions
                </span>

                <span class="h-[4px] w-11 rounded-full bg-brand-red"></span>

            </div>


            <h2
                id="faq-heading"
                class="text-3xl font-extrabold tracking-tight text-brand-dark sm:text-4xl lg:text-5xl"
            >
                Questions? We've got answers.
            </h2>


            <p class="mt-5 text-base leading-7 text-brand-gray sm:text-lg sm:leading-8">
                Here are answers to some of the questions businesses
                commonly ask before starting a digital project with us.
            </p>

        </div>


        {{-- FAQ List --}}
        <div class="mx-auto mt-14 max-w-4xl space-y-4">


            {{-- FAQ 01 --}}
            <details
                class="group rounded-2xl border border-gray-200 bg-white shadow-sm"
            >

                <summary
                    class="flex cursor-pointer list-none items-center justify-between gap-6 p-6 font-bold text-brand-dark sm:p-7"
                >

                    <span>
                        What services does Techcrossbreed offer?
                    </span>

                    <span
                        class="flex h-9 w-9 shrink-0 items-center justify-center rounded-full bg-brand-purple-light text-brand-purple transition duration-300 group-open:rotate-45"
                    >
                        +
                    </span>

                </summary>

                <div class="px-6 pb-6 sm:px-7 sm:pb-7">

                    <p class="text-sm leading-7 text-brand-gray">
                        Techcrossbreed provides website development, custom
                        software development, UI/UX design, SEO and digital
                        growth, data analytics and digital transformation
                        services.
                    </p>

                </div>

            </details>


            {{-- FAQ 02 --}}
            <details
                class="group rounded-2xl border border-gray-200 bg-white shadow-sm"
            >

                <summary
                    class="flex cursor-pointer list-none items-center justify-between gap-6 p-6 font-bold text-brand-dark sm:p-7"
                >

                    <span>
                        Can you build a website specifically for my business?
                    </span>

                    <span
                        class="flex h-9 w-9 shrink-0 items-center justify-center rounded-full bg-brand-red-light text-brand-red transition duration-300 group-open:rotate-45"
                    >
                        +
                    </span>

                </summary>

                <div class="px-6 pb-6 sm:px-7 sm:pb-7">

                    <p class="text-sm leading-7 text-brand-gray">
                        Yes. We design and develop websites around your
                        business goals, audience, brand and operational
                        requirements rather than relying on a one-size-fits-all
                        approach.
                    </p>

                </div>

            </details>


            {{-- FAQ 03 --}}
            <details
                class="group rounded-2xl border border-gray-200 bg-white shadow-sm"
            >

                <summary
                    class="flex cursor-pointer list-none items-center justify-between gap-6 p-6 font-bold text-brand-dark sm:p-7"
                >

                    <span>
                        Do you develop custom business software?
                    </span>

                    <span
                        class="flex h-9 w-9 shrink-0 items-center justify-center rounded-full bg-brand-purple-light text-brand-purple transition duration-300 group-open:rotate-45"
                    >
                        +
                    </span>

                </summary>

                <div class="px-6 pb-6 sm:px-7 sm:pb-7">

                    <p class="text-sm leading-7 text-brand-gray">
                        Yes. We build custom web applications and business
                        management systems designed around specific workflows,
                        processes and organizational requirements.
                    </p>

                </div>

            </details>


            {{-- FAQ 04 --}}
            <details
                class="group rounded-2xl border border-gray-200 bg-white shadow-sm"
            >

                <summary
                    class="flex cursor-pointer list-none items-center justify-between gap-6 p-6 font-bold text-brand-dark sm:p-7"
                >

                    <span>
                        Do you provide SEO services?
                    </span>

                    <span
                        class="flex h-9 w-9 shrink-0 items-center justify-center rounded-full bg-brand-red-light text-brand-red transition duration-300 group-open:rotate-45"
                    >
                        +
                    </span>

                </summary>

                <div class="px-6 pb-6 sm:px-7 sm:pb-7">

                    <p class="text-sm leading-7 text-brand-gray">
                        Yes. Our SEO and digital growth services focus on
                        improving search visibility, attracting relevant
                        visitors and building a stronger long-term digital
                        presence.
                    </p>

                </div>

            </details>


            {{-- FAQ 05 --}}
            <details
                class="group rounded-2xl border border-gray-200 bg-white shadow-sm"
            >

                <summary
                    class="flex cursor-pointer list-none items-center justify-between gap-6 p-6 font-bold text-brand-dark sm:p-7"
                >

                    <span>
                        How do I start a project with Techcrossbreed?
                    </span>

                    <span
                        class="flex h-9 w-9 shrink-0 items-center justify-center rounded-full bg-brand-purple-light text-brand-purple transition duration-300 group-open:rotate-45"
                    >
                        +
                    </span>

                </summary>

                <div class="px-6 pb-6 sm:px-7 sm:pb-7">

                    <p class="text-sm leading-7 text-brand-gray">
                        Start by contacting us with an overview of your
                        project, business needs or idea. We'll discuss your
                        requirements, recommend an approach and determine the
                        appropriate next steps.
                    </p>

                </div>

            </details>


            {{-- FAQ 06 --}}
            <details
                class="group rounded-2xl border border-gray-200 bg-white shadow-sm"
            >

                <summary
                    class="flex cursor-pointer list-none items-center justify-between gap-6 p-6 font-bold text-brand-dark sm:p-7"
                >

                    <span>
                        Do you work with businesses outside Nigeria?
                    </span>

                    <span
                        class="flex h-9 w-9 shrink-0 items-center justify-center rounded-full bg-brand-red-light text-brand-red transition duration-300 group-open:rotate-45"
                    >
                        +
                    </span>

                </summary>

                <div class="px-6 pb-6 sm:px-7 sm:pb-7">

                    <p class="text-sm leading-7 text-brand-gray">
                        Yes. Digital projects can be delivered remotely, and
                        we can work with businesses and organizations
                        regardless of their location.
                    </p>

                </div>

            </details>

        </div>

    </div>

</section>



@endsection
